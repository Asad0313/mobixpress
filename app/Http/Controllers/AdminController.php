<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;






class AdminController extends Controller
{
    //

    public function index()
    {

        $products = Product::paginate(3);
        return view('admin.product.displayProducts', ['products' => $products]);
    }

    public function indexes(){

        $products = Product::paginate(3);
        return view('admin.index', compact('products'));
    }

    public function editProductForm($id)
    {

        $product = Product::find($id);
        return view('admin.product.editProductForm', ['product' => $product]);


    }

    public function editProductImageForm($id)
    {

        $product = Product::find($id);
        return view('admin.product.editProductImageForm', ['product' => $product]);


    }

    public function updateProductImage(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if ($image != '') {
            $request->validate([
                'image' => 'required|file|image|mimes:jpg,png,jpeg|max:5000'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        } else {
            $request->validate([
                'image' => 'required'

            ]);
        }

        $form_data = array(
            'image' => $image_name


        );
        Product::whereId($id)->update($form_data);
        return redirect()->route('adminDisplayProducts')->with('Success', 'Image Is SuccessFully Updated');
    }

//        Validator::make($request->all(),['image'=>'required|file|image|mimes:jpg,png,jpeg|max:5000'])->validate();
//
//        if($request->hasFile('image')){
//
//            $product = Product::find($id);
//         $exists =   Storage::disk('local')->exists('/images',$product->image);
//
//         if($exists){
//
//             Storage::delete('/images',$product->image);
//         }
//
//       $ext=  $request->file('image')->getClientOriginalExtension();
//         $request->image->storeAs('/images',$product->image);
//
//         $arrayToUpdate = array('image'=>$product->image);
//         DB::table('products')->where('id',$id)->update($arrayToUpdate);
//
//         return redirect()->route('adminDisplayProducts');
//
//
//        }else{
//
//            $error = "No Image Is Selected";
//            return $error;
//
//
//
//        }


    public function updateProduct(Request $request, $id)
    {

        $name = $request->input('name');
        $description = $request->input('description');
        $code = $request->input('code');
        $price = $request->input('price');
        $sale = $request->input('sale');
        $categories = $request->input('categories');
        $brands = $request->input('brands');

        $UpdateArray = array('pro_name' => $name, 'pro_info' => $description, 'pro_code' => $code, 'pro_price' => $price, 'spl_price' => $sale,'categories'=>$categories,'brands'=>$brands);

        DB::table('products')->where('id', $id)->update($UpdateArray);

        return redirect()->route('adminDisplayProducts');


    }

    public function createProductForm()
    {
        $brands_data = DB::table('products')->get();
        return view('admin.product.createProductForm',['brands_data'=> $brands_data]);
    }
    public function discountcouponForm()
    {
        $coupons_data = DB::table('coupons')->get();
        return view('admin.product.Discount',['coupons_data'=> $coupons_data]);
    }

    public function senddiscountcouponForm(Request $request){
        $code = $request->input('code');
        $type = $request->input('type');
        $value = $request->input('value');
        $percentoff = $request->input('percent_off');
        $newProductArray = array('code' => $code, 'type' => $type, 'value' => $value, 'percent_off' => $percentoff);
        DB::table('coupons')->insert($newProductArray);
        return redirect()->route('adminDisplayCoupons');

    }
    public function display(){
        $coupons = Coupon::all();
        return view('admin.product.displayCoupons', ['coupons' => $coupons]);

    }
    public function deleteCoupons($id){

        $coupons = Coupon::find($id);
        Coupon::destroy($id);

        return redirect()->route('adminDisplayCoupons');
    }

    public function sendCreateProductForm(Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $code = $request->input('code');
        $price = $request->input('price');
        $sale = $request->input('sale');
        $categories = $request->input('categories');
        $brands = $request->input('brands');

        $image_name = $request->hidden_image;
        $image = $request->file('imageFile');

        if ($image->isValid()) {

            $request->validate([
                'image' => 'nullable|image|mimes:jpg,png,jpeg|max:5000'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);

        } else {
            $request->validate([
                'image' => 'required'
            ]);
        }
        $newProductArray = array('pro_name' => $name, 'pro_info' => $description, 'pro_code' => $code, 'pro_price' => $price, 'spl_price' => $sale,'image'=>$image_name,'categories' => $categories,'brands' =>$brands);
        DB::table('products')->insert($newProductArray);
        return redirect()->route('adminDisplayProducts');

//        return redirect()->route('testing');
    }

    public function deleteProduct($id){

        $products = Product::find($id);
        Product::destroy($id);

        return redirect()->route('adminDisplayProducts');
    }

    public function ordersPanel(){

        $orders = DB::table('orders')->paginate(5);
        return view('admin.product.ordersPanel',["orders"=>$orders]);
    }

    public function deleteOrder(Request $request,$id){

        $deleted = DB::table('orders')->where("order_id",$id)->delete();

        if($deleted){

            return redirect()->back()->with('orderDeletionStatus', 'Order '.$id.  '  Was Successfully Deleted');
        }else{

            return redirect()->back()->with('orderDeletionStatus', 'Order '.$id. '  Was Not Deleted');
        }
    }

    public function editOrderForm($order_id){

        $order =  DB::table('orders')->where("order_id",$order_id)->get();

        return view('admin.product.editOrderForm',['order'=>$order[0]]);

    }






    public function updateOrder(Request $request,$order_id){

        $date =  $request->input('date');
        $del_date =  $request->input('del_date');
        $status = $request->input('status');
        $price = $request->input('price');

        $updateArray = array("date"=>$date, "del_date"=> $del_date,"status"=>$status,"price"=>$price);

        DB::table('orders')->where('order_id',$order_id)->update($updateArray);

        return redirect()->route("ordersPanel");

    }


    public function search(Request $request){
        $searchText =   $request->get('searchText');
        $products = Product::where('pro_name',"Like",$searchText."%")->paginate(3);

        return view('adminDisplayProducts', ['products' => $products]);





    }




}




