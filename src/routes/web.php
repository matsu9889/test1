<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ContactsController::class, 'index']);
Route::post('/confirm', [ContactsController::class, 'confirm']);
Route::post('/thanks', [ContactsController::class, 'store']);
Route::get('/thanks', function () {
    return view('thanks');
});
Route::get('/admin', [AdminContactController::class, 'index']);
Route::get('/search', [AdminContactController::class, 'search']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);
Route::middleware('auth')->group(function () {
    Route::get('/login', [LoginController::class, 'index']);
});
Route::post('/login', [LoginController::class, 'login']);
