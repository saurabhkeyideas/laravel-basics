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


Route::group(['prefix'=>'/customer'],function(){
    Route::get('/create',[CustomerController::class,'index'])->name('customer.create'); //we can give router name by my convinience
    Route::get('/view',[CustomerController::class,'view']);
    Route::post('',[CustomerController::class,'store']);
    Route::get('/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');
    Route::get('/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
    Route::post('/update/{id}',[CustomerController::class,'update'])->name('customer.update');
});


Route::get('/',function(){  
    return view('demo');
});

Route::get('/upload',function(){
    return view('upload');
});

Route::post('/upload',[CustomerController::class,'upload']);





// Route::get('/',[BasicController::class, 'home']);

Route::get('/welcome','App\Http\Controllers\BasicController@welcome');
// Route::get('/demo',[SingleController::class]);
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

