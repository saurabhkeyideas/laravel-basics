<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\BasicController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ResourseController;
use  App\Http\Controllers\SingleController;
use App\Http\Controllers\RegistrationController;
use App\Models\Customers;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Customer Routes
Route::get('/customer/create',[CustomerController::class,'index']);
Route::get('/customer/view',[CustomerController::class,'view']);
Route::post('/customer',[CustomerController::class,'store']);



// Route::get('/',[BasicController::class, 'home']);

Route::get('/welcome','App\Http\Controllers\BasicController@welcome');
Route::get('/demo',[SingleController::class]);
// Route::resourse('/photos',PhotoController::class);  //not working


//form part
Route::get('/register',[RegistrationController::class, 'index']);
Route::post('/register',[RegistrationController::class, 'register']);

//get all table data
Route::get('/customers',function(){
    $customers=Customers::all();
    echo "<pre>";
    print_r($customers->toArray());

});


// Route::get('/{name?}', function ($name=null) {
//    $data=compact('name');
//     return view('home')->with($data);
// });

// Route::get('/demo',function(){
//     // echo "Hello World";
//     return view('demo');
// });

// Route::get('/demo/{name}', function ($name) {
//     echo "Hello ".$name;
// });

// Route::any('/test',function(){
//   echo "Testing the route";
// });

// Route::put('users/{id}',function(){
//     echo "put router";
//   });

//   Route::delete('users/{id}',function(){
//     echo "Testing the route";
//   });

