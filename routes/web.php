<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeocoderController;
use App\Http\Controllers\MollieController;

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
Route::get('/', function () {
    
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//routes voor OwnerController
Route::get('/owners', 'OwnerController@index');
Route::post('/owners', 'OwnerController@store');

//routes voor GeocoderController
Route::get('/details/{id}', 'GeocoderController@detail');
Route::get('/mappage', 'GeocoderController@index');

// Routes voor Mollie
Route::get('mollie-payment',[MollieController::Class,'preparePayment'])->name('mollie.payment');
Route::get('payment-success',[MollieController::Class, 'paymentSuccess'])->name('payment.success');
