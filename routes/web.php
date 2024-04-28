<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('test',[MyController::class,'my_data']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('aya',function(){
    return('welcome to my page');
});
Route::get('aya/{id}',function($id){
    return('welcome to my page'.$id);
});
Route::get('ayat/{id?}',function($id= 0){
    return('welcome to my page'. $id);
});
Route::get('ayattaha/{id?}',function($id= 0){
    return('welcome to my page'. $id);
})->where(['id'=> '[0-9]+']);

Route::get('karma/{name}',function($name){
    return('welcome to my page ' . $name);
})->whereAlpha('name');


Route::get('yasso/{name}',function($name){
    return('welcome to my page ' . $name);
})->whereIn('name',['aya','koko','lara']);


Route::prefix('cars')->group(function(){
    Route::get('bmw',function(){
        return('BMW Category');
    });
    Route::get('merc',function(){
        return('MERCEDES Category');
    });
});
// Route::fallback(function(){
//    // return redirect ('/');
// });

// // Route::get('test',function(){
// //     return view('test');
// });
Route::get('form1',function(){
    return view('form1');
});

// Route::post('displayForm', 'FormController@receiveForm1')->name('receiveform1');

use Illuminate\Http\Request;

Route::post('/receive-form', function (Request $request) {
    $fname = $request->input('fname');
    $lname = $request->input('lname');

    // Pass data to the view and return it
    return view('displayForm', compact('fname', 'lname'));
})->name('receiveform1');


// Route::post('recform1',function(){
//     return ('data recieved');
// })->name('receiveform1');


