<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class ContactController extends Controller
{
    //



    public function create(){
        return view('front.contact');
    }

    public function store(Request $request){
        $this->validate($request,[
           'name'=>'required',
           'email' => 'required|email',
           'message' => 'required'

        ]);

        $data = array(
          'name'=> $request->name,
            'message'=>$request->message
        );
        Mail::to('asadaliwaliani@gmail.com')->send(new SendMail($data));
     return redirect()->back()->with('flash_message','Thanks For Contacting Us!');
    }
}
