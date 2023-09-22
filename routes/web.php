<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuctionPages;
use App\Http\Controllers\Authentication;



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

# -- AuctionPages Controller
Route::get('/', [AuctionPages::class, 'index']);
Route::get('/support', [AuctionPages::class, 'support']);
Route::get('/why-sell', [AuctionPages::class, 'whySell']);
Route::get('/sale-form', [AuctionPages::class, 'sellForm']);


# Authentication Controller
Route::get('/login', [Authentication::class, 'login']);
Route::get('/register', [Authentication::class, 'register']);












