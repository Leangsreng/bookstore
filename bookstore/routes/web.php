<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/home', [PosController::class, 'index2'])->name('Pos');

//Profile Routes
Route::get('/edit-profile', [UserController::class, 'edit'])->name('profile');
Route::put('/update-profile/{user}', [UserController::class, 'update'])->name('profile.update');
Route::delete('/delete-profile/{user}', [UserController::class, 'destroy'])->name('profile.delete');

Route::get('/cart', [CartController::class, 'index']);

//Authentication Routes
///Login
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

///register
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

///logout
Route::post('/logout', [LoginController::class, 'logout']);

//POS Pages Routes
Route::get('/dashboard', [PosController::class, 'dashboard']);
Route::get('/add-product', [PosController::class, 'addproduct']);
Route::post('/add-product', [PosController::class, 'storeproduct']);
Route::resource('/products', PosController::class);
Route::get('/faq', [PosController::class, 'faq']);
Route::get('/contact', [PosController::class, 'contact']);
Route::get('/store-profile', [PosController::class, 'storeprofile']);
Route::get('/transaction', [PosController::class, 'transaction']);
Route::get('/feature-locked', [PosController::class, 'locked']);
