<?php

use App\Http\Controllers\MessageController;
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

Auth::routes();

Route::resource('message', MessageController::class);
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
Route::view('/home', 'outdoors.index')->name('home');
Route::view('/services', 'outdoors.services')->name('services');
Route::view('/about', 'outdoors.about')->name('about');
Route::view('/contact', 'outdoors.contact')->name('contact');
Route::view('/service-detail', 'outdoors.service-detail')->name('service-detail');

