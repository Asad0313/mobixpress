<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

use App\Wishlist_model;





use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function shop(){
        $products=Product::paginate(3);
        return view('front.shop',['products'=>$products]);
//        print_r($products);




    }

    public function product_details($id){




        $products=Product::findOrFail($id);
        return view('front.product_details')->with('products',$products);

    }

//
//    public function addToCartAjaxGet(Request $request,$id){
//
//        $prevCart = $request->session()->get('cart');
//        $cart = new Cart($prevCart);
//
//        $product = Product::find($id);
//        $cart->addItem($id,$product);
//        $request->session()->put('cart',$cart);
////        dump($cart);
//        return response()->json(['cart','Item Successfully added in cart']);
//
//
//
//    }

    //categories fucntion

    public function mobileproducts(){
    $products =     DB::table('products')->where('categories','mobile')->get();
        return view('front.MobileProducts',['products'=>$products]);

    }

    public function tabletproducts(){
        $products =     DB::table('products')->where('categories','ipad')->get();
        return view('front.TabletProducts',['products'=>$products]);


    }

    public function accessoriesproducts(){
        $products =     DB::table('products')->where('categories','accessories')->get();
        return view('front.Accessories',['products'=>$products]);


    }
    //Brands Function
    public function applebrands(){
        $products =     DB::table('products')->where('brands','Apple')->get();
        return view('front.Apple',['products'=>$products]);

    }

    public function oppobrands(){
        $products =     DB::table('products')->where('brands','Oppo')->get();
        return view('front.Oppo',['products'=>$products]);

    }

    public function huaweibrands(){
        $products =     DB::table('products')->where('brands','Huawei')->get();
        return view('front.Huawei',['products'=>$products]);

    }




    //Search
    public function search(Request $request){
      $searchText =   $request->get('searchText');
       $products = Product::where('pro_name',"Like",$searchText."%")->paginate(3);


        if (count ( $products ) > 0)
            return view('front.shop', ['products' => $products]);
        else
//            return view('front.shop', ['products' => $products])->with('flash_message', 'No Details found. Try to search again !' );
            return redirect()->back()->with('flash_message','No Details found. Try to search again !');







    }

//    public function View_wishList(){
//        $products=DB::table('table_wishlist')->leftJoin('products','table_wishlist.pro_id','=','products.id')->get();
//
//        return view('front.wishlist',compact('products'));
//    }
//
//    public function addWishList(Request $request){
//
//        $wishlist = new Wishlist_model();
//
//        $wishlist->user_id = Auth::user()->id;
//
//        $wishlist->pro_id = $request->pro_id;
//
//        $wishlist->save();
//
//        $products = DB::table('products')->where('id',$request->pro_id)->get();
//
//        return view('front.wishlist',compact('products'));
//    }

    /**
     * @param Request $request
     */
////    public function wishList(Request $request){
////        $wishList = new wishlist_model;
////        $wishList->user_id = Auth::user()->id;
////        $wishList->pro_id = $request->pro_id;
////        $wishList->save();
////        return view('front.wishlist',compact('wishList'));
//
//
//
//    }

}
