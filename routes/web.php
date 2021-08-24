<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
    // return view('index');
// });

Auth::routes();

// Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/login',[UserController::class,'index']);
Route::get('/',[ProductController::class,'index']);
Route::get('/loja',[LojaController::class,'index']);
Route::get('/details/{id}',[LojaController::class,'detail']);
Route::get('/checkout/{id}',[LojaController::class,'checkout']);
Route::post('/add-to-cart',[LojaController::class,'addToCart']);
Route::get('/remove-cart/{id}',[LojaController::class,'removeCart']);
Route::get('/cartlist',[LojaController::class,'cartList']);
Route::get('/ordernow',[LojaController::class,'orderNow']);
Route::post('/orderplace',[LojaController::class,'orderPlace']);
Route::post('/register',[UserController::class,'store']);

// Route::post('/admin',[ApiController::class,'store']);

Route::get('/enable',[ApiController::class,'index']);


 Route::get('/afiliados', function () {
     return view('afiliados');
 });

 Route::get('/admin', function () {
    return view('admin');
});

 Route::get('/checkout', function () {
    return view('checkout');
});

 Route::get('/logout', function () {

    Session::forget('user');

    return redirect('/');
});
