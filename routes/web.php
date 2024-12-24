<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'show']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/student/{name}', [HomeController::class, 'shown']);

// Route::get('/user/{id}',[HomeController::class, 'get_user']);

// Route::get('/', function () {
//     $data =['name'=>'aung', 'age'=>'23'];
//     return view('home',compact('data')); 
// });
// Route::get('/contact',function(){
//     return view('contact');
// });
// Route::get('/about',function(){
//     return view('about');
// });


// Route::get('/contact/{name}', function ($name) {
//     // $data = request('name');
//     return $name;
//     // return view('contact',['data'=>$data]);
// });

