<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

Route::get('/', [AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('post.login');
Route::get('/register',[AuthController::class,'pelanggan'])->name('register.pelanggan');
Route::get('/pendaftaran-selesai',[AuthController::class,'konfirmasi'])->name('konfirmasi');
Route::get('/verify/{token}',[AuthController::class,'verify'])->name('verify');
ROute::get('/logout',[AuthController::class,'logout'])->name('logout');
