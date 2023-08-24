<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;

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

Route::get('/reviews', function () {
    return view('reviews');
});

Route::get('/contacts', [ContactUsFormController::class, 'createForm']);
Route::post('/contacts', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');



