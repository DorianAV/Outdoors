<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeDetailsController;
use App\Http\Controllers\HomeImagesController;
use App\Http\Controllers\HomeSectionController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\OutdoorsController;
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
Route::resource('homeSection', HomeSectionController::class)->middleware('auth')->except('index');
Route::resource('homeImage', HomeImagesController::class)->middleware('auth')->except('index');
Route::resource('homeDetails', HomeDetailsController::class)->middleware('auth')->except('index');
Route::resource('about', AboutController::class)->middleware('auth')->except('index');
Route::resource('contact', ContactController::class)->middleware('auth')->except('index');
Route::resource('message', MessageController::class);

Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');
Route::get('/admin/service', [ServiceController::class, 'index'])->name('admin.service')->middleware('auth');
Route::get('/admin/about', [AboutController::class, 'index'])->name('admin.about')->middleware('auth');
Route::get('/admin/contact', [ContactController::class, 'index'])->name('admin.contact')->middleware('auth');


Route::get('/home', [OutdoorsController::class, 'index'])->name('home');
Route::get('/about', [OutdoorsController::class, 'about'])->name('about');
Route::get('/contact', [OutdoorsController::class, 'contact'])->name('contact');
Route::get('/services', [OutdoorsController::class, 'services'])->name('services');

Route::view('/service-detail', 'outdoors.service-detail')->name('service-detail');

