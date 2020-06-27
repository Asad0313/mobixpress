<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderCreatedEmail;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    //
    public function store(Request $request){
        $this->validate($request,[
            'first_name'=>'required',
            'last_name'=>'required',
            'email' => 'required|email',
            'address'=>'required',
            'zip' => 'required',
            'phone'=>'required'

        ]);

        $data = array(
           'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'address'=>$request->address,
            'zip'=>$request->zip,
            'phone'=>$request->phone
        );
        Mail::to('asadaliwaliani@gmail.com')->send(new OrderCreatedEmail($data));
        return redirect()->back()->with('flash_message','Thanks For Contacting Us!');
    }

}
