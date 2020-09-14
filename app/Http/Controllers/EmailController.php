<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{ 
    
    public function index(){
    return view('email');
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
