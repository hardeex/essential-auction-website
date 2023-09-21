<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

# navigate to the index page
Route::get('/', function(){
    return view('index');
});

Route::get('/why-sell', function(){
    return view('why-sell');
});

Route::get('/sale-form', function(){
    return view('sale-form');
});

Route::get('/login', function(){
    return view('auth.login');
});

Route::get('/register', function(){
    return view('auth.register');
});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
