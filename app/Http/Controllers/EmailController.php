<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{ 
    
    public function index(){
        $meta_title ="Contact us  Raspberry";
        $meta_description=" re here to sort out your Business! Contact Information Have any
         querry! Contact Us. Raspberry Solution Pvt. Ltd. Kathmandu, Nepal +977 9801010200 
         info@raspberry.com.np FOLLOW US Facebook Twitter Raspberry,  a HR and Management 
         Consulting Organization in Nepal aims to consistently
         exceed industry standards by providing clients with a high level of personalized 
         service and enabling cost savings";
        $meta_keywords="Consulting website, Human resource management, solution management";
    return view('email')->with(compact('meta_title','meta_description','meta_keywords'));
}


public function send(Request $request){

    // $file= $request->file('image');
    $data = [

        'nama'=> $request->nama,
        'email'=> $request->email,
        'contact'=> $request->contact,
        'messages'=> $request->messages,
        'image'=>$request->file('image')


    ];

    $to= 'bishal.sth.460@gmail.com';

    \Mail::to($to)->send(new \App\Mail\TestMail($data));

return redirect('/email')->with('flash_message_success','Message have been successfully sent');

}
}
