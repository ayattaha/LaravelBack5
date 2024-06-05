<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StudentController;



Route::get('formdisplay',[ClientController::class,'create'])->name('receiveform2');
Route::get('Add',[ClientController::class,'create'])->name('Add');
Route::get('Clients',[ClientController::class,'index'])->name('Clients');
Route::post('insertClient',[ClientController::class,'store'])->name('insertClient');
//..................day 5
Route::get('editClients/{id}',[ClientController::class,'edit'])->name('editClients');
Route::put('updateClients/{id}',[ClientController::class,'update'])->name('updateClients');
//show 1 row
Route::get('showClient/{id}',[ClientController::class,'show'])->name('showClient');
//delet client
Route::delete('deleteClient',[ClientController::class,'destroy'])->name('deleteClient');

// day 6
Route::get('trashedClients',[ClientController::class,'showDeleted'])->name('trashedClients');
Route::get('restorClient/{id}',[ClientController::class,'restore'])->name('restorClient');

Route::delete('ForceDeleteClient',[ClientController::class,'forceDelete'])->name('ForceDeleteClient');

//Task 6
Route::get('trashedStudent',[StudentController::class,'showDeleted'])->name('trashedStudent');
Route::get('restorStudent/{id}',[StudentController::class,'restore'])->name('restorStudent');

Route::delete('forceDeleteStudent',[StudentController::class,'forceDelete'])->name('forceDeleteStudent');


//task 3- task 4
Route::post('insertStudent',[StudentController::class,'store'])->name('insertStudent');
Route::get('addStudent',[StudentController::class,'create'])->name('AddStusent');
Route::get('Students',[StudentController::class,'index'])->name('Students');
//task 3- task 4

//task 5
Route::get('editStudent/{id}',[StudentController::class,'edit'])->name('editStudent');
Route::put('updateStudents/{id}',[StudentController::class,'update'])->name('updateStudents');

//show 1 row
Route::get('showStudent/{id}',[StudentController::class,'show'])->name('showStudent');
//delet client
Route::delete('deleteStudent',[StudentController::class,'destroy'])->name('deleteStudent');





//
Route::get('test',[MyController::class,'my_data']);

Route::get('insertClient',[ClientController::class,'store']);

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
Route::get('stack',function(){
    return view('stacked');
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

//task goin 
// Route::post('form', function () {
//     return view('formdisplay');
// })->name('receiveform2');

