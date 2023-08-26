<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\CommentController;

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
//	v=spf1 include:spf.titan.email ~all
// 10	mx1.titan.email
//	v=spf1 include:spf.titan.email include:_spf.smtp.mailtrap.live ~all


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/portfolio/somerset', function () {
    return view('portfolio/somerset/index');
});

Route::get('/portfolio/ac', function () {
    return view('portfolio/ac/index');
});

Route::get('/portfolio/sf', function () {
    return view('portfolio/sf/index');
});

Route::get('/portfolio/maintain', function () {
    return view('portfolio/maintain/index');
});

Route::get('/reviews', [CommentController::class, 'show']);
Route::post('/reviews/store', [CommentController::class, 'store']);

Route::get('/contacts', [ContactUsFormController::class, 'createForm']);
Route::post('/contacts', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');



