<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TourismController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CartController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('aboutUs');
Route::get('/tourism', [TourismController::class, 'index'])->name('tourism');
Route::get('/tourism/service/{locationId}', [ServiceController::class, 'show'])->name('service');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/article/{articleId}', [ArticleController::class, 'show'])->name('article');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/contacts', [ContactUsController::class, 'index'])->name('contactUs');
Route::post('/contactUs', [ContactUsController::class, 'send'])->name('contactUs.send')
    ->middleware('log.activity:sendContactUs');
