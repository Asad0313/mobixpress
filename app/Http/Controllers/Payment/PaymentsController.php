<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Cart;
use App\Product;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class PaymentsController extends Controller
{
    //

    public function showPaymentPage(){

        $payment_info = Session::get('payment_info');
       //Has not Paid yet!!!
        if($payment_info['status'] == 'on hold'){
            return view('payment.paymentpage',['payment_info'=>$payment_info]);
        }
        else{
            return redirect()->route("front.shop");
        }


    }

    private function storePaymentInfo($paypalPaymentID,$paypalPayerID){

                $payment_info = Session::get('payment_info');
                $order_id = $payment_info['order_id'];
                $status = $payment_info['status'];
//                $discount = $payment_info['discount'];
               $paypal_payment_id = $paypalPaymentID;
               $paypal_payer_id = $paypalPayerID;
                if ($status == 'on hold'){

                    $date = date('y-m-d H:i:s');
                    $newPaymentArray = array("order_id" => $order_id,"date"=>$date , "amount"=>$payment_info['price'] ,
                        "paypal_payment_id"=>$paypal_payment_id, "paypal_payer_id"=>$paypal_payer_id);

                    $created_order = DB::table('payments')->insert($newPaymentArray);


                    DB::table('orders')->where('order_id',$order_id)->update(['status' =>'paid']);
                }
    }


    public function showPaymentReceipt($paypalPaymentID,$paypalPayerID){

                  if (!empty($paypalPaymentID) && !empty($paypalPayerID)){


                          $this->validate_payment($paypalPaymentID,$paypalPayerID);

                      $this->storePaymentInfo($paypalPaymentID,$paypalPayerID);
                      $payment_receipt = Session::get('payment_info');
                      $payment_receipt['paypal_payment_id'] = $paypalPaymentID;
                      $payment_receipt['paypal_payer_id'] = $paypalPayerID;

                      Session::forget('payment_info');
                      return view('payment.paymentreceipt',['payment_receipt' => $payment_receipt]);
                  }
                  else{

                      return redirect()->route('front.shop');
                  }

    }


    private function validate_payment($paypalPaymentID, $paypalPayerID){

//        $paypalEnv       = 'sandbox'; // Or 'production'
//        $paypalURL       = 'https://api.sandbox.paypal.com/v1/'; //change this to paypal live url when you go live
//        $paypalClientID  = 'Your_Client_id';
//        $paypalSecret   = 'Your_Secret';
//
//
//
//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_URL, $paypalURL.'oauth2/token');
//        curl_setopt($ch, CURLOPT_HEADER, false);
//        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//        curl_setopt($ch, CURLOPT_POST, true);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_USERPWD, $paypalClientID.":".$paypalSecret);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
//        $response = curl_exec($ch);
//        curl_close($ch);
//
//        if(empty($response)){
//            return false;
//        }else{
//            $jsonData = json_decode($response);
//            $curl = curl_init($paypalURL.'payments/payment/'.$paypalPaymentID);
//            curl_setopt($curl, CURLOPT_POST, false);
//            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//            curl_setopt($curl, CURLOPT_HEADER, false);
//            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//            curl_setopt($curl, CURLOPT_HTTPHEADER, array(
//                'Authorization: Bearer ' . $jsonData->access_token,
//                'Accept: application/json',
//                'Content-Type: application/xml'
//            ));
//            $response = curl_exec($curl);
//            curl_close($curl);
//
//            // Transaction data
//            $result = json_decode($response);
//
//            return $result;
//        }

    }

    public function getPaymentInfoByOrderId($order_id){

        $paymentInfo = DB::table('payments')->where('order_id',$order_id)->get();
        return json_encode($paymentInfo[0]);


    }
}
