<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return redirect('/home');
});

Auth::routes([
    'register' => false,
    'reset' => false
    ]);

Route::resource('service', ServiceController::class)->middleware('auth')->except('index');
Route::resource('message', MessageController::class);
Route::get('/admin', [HomeController::class, 'index'])->name('admin');
Route::get('/admin/service', [ServiceController::class, 'index'])->name('admin.service')->middleware('auth');
Route::get('/home', [App\Http\Controllers\OutdoorsController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\OutdoorsController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\OutdoorsController::class, 'contact'])->name('contact');
Route::get('/services', [App\Http\Controllers\OutdoorsController::class, 'services'])->name('services');

Route::view('/service-detail', 'outdoors.service-detail')->name('service-detail');

