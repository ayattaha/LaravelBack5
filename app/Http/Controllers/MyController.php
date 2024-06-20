<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactClient;
use App\Models\Client;
use Mail;
class MyController extends Controller
{
    public function mysession(){
// session()->put('test', 'First Laravel session');
//flash session
session()->flash('test1', 'First Laravel session');
return ('session start');
    }
    public function restorsession(){
        return 'My session value is:'. session('test1');
            }
    
    public function deletsession(){
    // session()->forget('test');
    session()->flush();
   return ('session deleted');
            }


    public function my_data(){
        return view('test');
    }


    public function sendClientMail(){
        $data=Client::findorFail(1)->toArray();
        $data['theMessage']='My message';
        Mail::to( $data['email'])->send( 
        new ContactClient($data)
        );
        return "mail sent!";
    }

//    
}



// class FormController extends Controller
// {
//     public function receiveForm1(Request $request)
//     {
//         $fname = $request->input('fname');
//         $lname = $request->input('lname');

//         return view('displayForm', compact('fname', 'lname'));
//     }
// }