<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TourismController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
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
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/tourism', [TourismController::class, 'index'])->name('tourism');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/article/{articleId}', [ArticleController::class, 'show'])->name('article');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');

