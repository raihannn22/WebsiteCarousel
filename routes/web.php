<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TampilanController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\Authenticate;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function (){
    return view ('tampilan.carousel');
})->name('index');


Route::get('/login', [LoginController::class, 'index'])->name('login') ;
Route::post('/login', [LoginController::class, 'login']);


Route::get('/admin', function (){
    return view ('tampilan.admin.dashboard');
})->name('admin')->middleware('auth');

