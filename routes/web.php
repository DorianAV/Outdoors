<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TitleSliderController;
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

Route::resource('titleSlider', TitleSliderController::class)->middleware('auth')->except('index');
Route::resource('service', ServiceController::class)->middleware('auth')->except('index');
Route::resource('homeSection', \App\Http\Controllers\HomeSectionController::class)->middleware('auth')->except('index');
Route::resource('homeImage', \App\Http\Controllers\HomeImagesController::class)->middleware('auth')->except('index');
Route::resource('message', MessageController::class);

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('auth');
Route::get('/admin/service', [ServiceController::class, 'index'])->name('admin.service')->middleware('auth');
Route::get('/home', [App\Http\Controllers\OutdoorsController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\OutdoorsController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\OutdoorsController::class, 'contact'])->name('contact');
Route::get('/services', [App\Http\Controllers\OutdoorsController::class, 'services'])->name('services');

Route::view('/service-detail', 'outdoors.service-detail')->name('service-detail');

