<?php

namespace App\Http\Controllers;



use App\Cart;
use App\Coupon;
use App\Mail\OrderCreatedEmail;
use App\Mail\SendMail;
use App\User;
use App\Wishlist_model;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Notifications\OrderNotification;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

use App\order;
use App\Product;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $products = Product::all();
        return view('admin.product.index',compact('products'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $formInput = $request->except('image');
        $image = $request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
            $formInput['image']=$imageName;
        }
        Product::create($formInput);
        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $product = Product::findOrFail($id);
        return view('product.show',compact('products'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addProductToCart(Request $request,$id){
//
//        $request->session()->forget('cart');
//        $request->session()->flush();

        $prevCart = $request->session()->get('cart');
        $cart = new Cart($prevCart);

        $product = Product::find($id);
        $cart->addItem($id,$product);
        $request->session()->put('cart',$cart);
//        dump($cart);
        return redirect()->route("front.shop");



    }

    public function showCart(){

        $cart = Session::get('cart');

        if($cart){
          return view('cart.cartproducts',['cartItems'=> $cart]);

        }else{

                 return redirect()->route("front.shop");
        }
    }

    public function deleteItemFromCart(Request $request,$id){
        $cart =$request->session()->get('cart');

        if(array_key_exists($id,$cart->items)){
            unset($cart->items[$id]);

        }

        $prevCart =  $request->session()->get('cart');
        $updatedCart = new Cart($prevCart);
        $updatedCart->updatePriceAndQuantity();

        $request->session()->put('cart',$updatedCart);
//        return("your cart is empty back to shopping");
      return redirect()->route('cart.cartproducts');

    }

//    public function UpdateCart(Request $request,$id){
//
//        echo $id;
//
//
//    }


public function addToCartAjaxPost(Request $request){

        $id = $request->input('id');

    $prevCart = $request->session()->get('cart');
    $cart = new Cart($prevCart);

    $product = Product::find($id);
    $cart->addItem($id,$product);
    $request->session()->put('cart',$cart);
//        dump($cart);
   return response()->json(['totalQuantity',$cart->totalQuantity]);



}


public function addToCartAjaxGet(Request $request,$id){

    $prevCart = $request->session()->get('cart');
    $cart = new Cart($prevCart);

    $product = Product::find($id);
    $cart->addItem($id,$product);
    $request->session()->put('cart',$cart);
//        dump($cart);
    return response()->json(['totalQuantity',$cart->totalQuantity]);



}

//fetchprice

public function fetchpricejax(Request $request){
//   $product =  Product::all()->where('pro_price');
////   error_log('Asad');
////   return $request->price;
///
    $searchText =   $request->get('price');
    $products = Product::where('pro_price',"Like",$searchText."%")->paginate(3);







    return $products;



}



    public function increaseSingleProduct(Request $request, $id){

        $prevCart =  $request->session()->get('cart');
        $cart = new Cart($prevCart);

         $product = Product::find($id);
        $cart->addItem($id,$product);
        $request->session()->put('cart',$cart);

        return redirect()->route('cart.cartproducts');

    }

    public function decreaseSingleProduct(Request $request,$id){

        $prevCart =  $request->session()->get('cart');
        $cart = new Cart($prevCart);

        if($cart->items[$id]['quantity'] > 1){
                  $product = Product::find($id);
                  $cart->items[$id]['quantity'] = $cart->items[$id]['quantity']-1;
                  $cart->items[$id]['price'] = $cart->items[$id]['quantity'] *  $product['spl_price'];
                  $cart->updatePriceAndQuantity();

                  $request->session()->put('cart',$cart);


        }

        return redirect()->route('cart.cartproducts');


    }


    public function createOrder(Request $request){




        $cart = Session::get('cart');


        $first_name = $request->input('first_name');
        $address = $request->input('address');
        $last_name = $request->input('last_name');
        $zip = $request->input('zip');
        $phone = $request->input('phone');
        $email = $request->input('email');



        $isUserLoggedIn = Auth::check();
        if($isUserLoggedIn){
            $user_id = Auth::id();

        }else{
            //customer is guest
            $user_id = 0;


        }


        if($cart){
            $date = date('Y-m-d H:i:s');
            $newOrderArray = array("user_id" => $user_id,'status'=>"on hold",'date'=>$date,'del_date'=>$date,'price'=>$cart->totalPrice,
                 "first_name"=>$first_name, "address"=>$address,"last_name"=>$last_name,'phone'=>$phone,  'zip'=>$zip,
                'email'=>$email);
            $creared_order = DB::table('orders')->insert($newOrderArray);
            $order_id = DB::getPdo()->lastInsertId();

            foreach ($cart->items as $cart_item){
                $item_id = $cart_item['data']['id'];
                $item_name = $cart_item['data']['pro_name'];
                $item_price = $cart_item['data']['pro_price'];
                $newItemsInCurrent = array('item_id'=>$item_id,'order_id'=>$order_id,'item_name'=>$item_name,'item_price'=>$item_price);
                $created_order_items = DB::table('order_items')->insert($newItemsInCurrent);


            }

            //send the email when order created
              User::find(2)->notify(new OrderNotification);


            //delete cart

            Session::forget('cart');


            $payment_info = $newOrderArray;

            $payment_info['order_id'] = $order_id;
            $request->session()->put('payment_info',$payment_info);

//            Mail::to('asadaliwaliani@gmail.com');
            return redirect()->route('showPaymentPage');
//           print_r($newOrderArray);



        }
        else{

            return redirect()->route('front.shop');
//            print_r("error");
        }




    }

    public function stores(Request $request){

//        $user = Auth::user();
//        $cart = Session::get('cart');

//        if ($cart != null && $user !=null){
//            Mail::to($user)->send(new OrderCreatedEmail($cart));



    }
//    public function createOrder(){
//
//        $cart = Session::get('cart');
//
//        if($cart){
//            $date = date('Y-m-d H:i:s');
//            $newOrderArray = array('status'=>"on hold",'date'=>$date,'del_date'=>$date,'price'=>$cart->totalPrice);
//            $creared_order = DB::table('orders')->insert($newOrderArray);
//            $order_id = DB::getPdo()->lastInsertId();
//
//            foreach ($cart->items as $cart_item){
//              $item_id = $cart_item['data']['id'];
//              $item_name = $cart_item['data']['pro_name'];
//              $item_price = $cart_item['data']['pro_price'];
//              $newItemsInCurrent = array('item_id'=>$item_id,'order_id'=>$order_id,'item_name'=>$item_name,'item_price'=>$item_price);
//              $created_order_items = DB::table('order_items')->insert($newItemsInCurrent);
//
//
//            }
//            //delete cart
//
//            Session::forget('cart');
//            Session::flush();
//
//            return redirect()->route('front.shop')->with('success','Thanks For Choosing Us!');
//
//
//
//        }
//        else{
//
//            return redirect()->route('front.shop');
//        }
//
//
//    }
    public function checkoutProducts(){

        return view('front.checkoutProducts');
    }

    public function Couponprice(Request $request,$id){

    $discount = session()->get('coupon')['discount'] ?? 0;
    $subtotal = Product::where('pro_price') - $discount;

        $updateArray = array('pro_price'=>$subtotal);

        DB::table('products')->where('pro_price',$id)->update($updateArray);

        $request->session()->put('coupon',$id);

    }







}
