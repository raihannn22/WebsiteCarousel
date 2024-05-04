<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\FiturController;
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

Route::get('/index', [IndexController::class, 'index'])->name('index') ;

Route::get('/login', [LoginController::class, 'index'])->name('login') ;
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::middleware('auth')->group(function () {

    Route::get('/admin', function (){
        return view ('admin.dashboard');
    })->name('admin');

    Route::prefix('/carousel')->controller(CarouselController::class)->name('carousel.')->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');

        Route::get('/form', 'form')->name('form');
        Route::post('/create', 'create')->name('create');

        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');

        Route::delete('/{id}', 'delete')->name('delete');
    });




    Route::prefix('/detail')->controller(DetailController::class)->name('detail.')->group(function () {
        Route::get('/dashboard',  'dashboard')->name('dashboard');

        Route::get('/form', 'form')->name('form');
        Route::post('/create', 'create')->name('create');

        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');

        Route::delete('/{id}', 'delete')->name('delete');
    });

    Route::get('/fitur', [FiturController::class, 'index'])->name('fitur');

    Route::prefix('/fitur')->controller(FiturController::class)->name('fitur.')->group(function () {
        Route::get('/dashboard',  'dashboard')->name('dashboard');

        Route::get('/form', 'form')->name('form');
        Route::post('/create', 'create')->name('create');

        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');

        Route::delete('/{id}', 'delete')->name('delete');
    });

});
