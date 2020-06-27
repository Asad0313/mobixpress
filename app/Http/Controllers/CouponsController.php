<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Coupon;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CouponsController extends Controller
{
       public function store(Request $request){

           $coupon = Coupon::where('code', $request->coupon_code)->first();





           if (!$coupon){

               return redirect()->route('cart.cartproducts',compact('coupon'))->with("Invalid Coupon Code!");

           }
              else {
                  Session::put('coupon', [
                      'name' => $coupon->code,
                      'discount' => $coupon->discount(Product::where('pro_price')),




                  ]);



                  return redirect()->route('cart.cartproducts')->with('Success_Message', 'Coupon has been applied');
              }
       }

       public function destroy(){

           Session::forget('coupon');
           return redirect()->route('cart.cartproducts')->with('Success_Message','Coupon has been removed');
       }





}
