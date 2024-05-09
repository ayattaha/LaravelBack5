<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function my_data(){
        return view('test');
    }}

// class FormController extends Controller
// {
//     public function receiveForm1(Request $request)
//     {
//         $fname = $request->input('fname');
//         $lname = $request->input('lname');

//         return view('displayForm', compact('fname', 'lname'));
//     }
// }