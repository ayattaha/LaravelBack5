<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('aya',function(){
    return('welcome to my page');
});
Route::get('aya/{id}',function($id){
    return('welcome to my page'.$id);
});