<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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
})->name('homepage');

//Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');








////////////////////////////////   Admin panel ///////////////////////////////
Route::group(['middleware'=>['auth', 'admin', 'verified'], 'prefix'=>'/admin', 'namespace'=>'\App\Http\Controllers\Backend'], function (){
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('product', ProductController::class);
});


////////////////////////////////   Front  ///////////////////////////////
Route::group(['middleware'=>['auth', 'verified']], function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::group(['namespace'=>'\App\Http\Controllers\Frontend'], function (){
        Route::post('/basket/create', [\App\Http\Controllers\Frontend\BasketController::class, 'create'])->name('create'); // ajax
        Route::post('/basket/update', [\App\Http\Controllers\Frontend\BasketController::class, 'update'])->name('update'); // ajax
        Route::post('/basket/delete/{id}', [\App\Http\Controllers\Frontend\BasketController::class, 'delete'])->name('delete'); // ajax
        Route::get('/basket/total', [\App\Http\Controllers\Frontend\BasketController::class, 'total'])->name('total'); // ajax
    });
});
Route::group(['namespace'=>'\App\Http\Controllers\Frontend'], function (){
    Route::get('/product', [\App\Http\Controllers\Frontend\ProductController::class, 'index'])->name('product.index.front');
    Route::get('/basket', [\App\Http\Controllers\Frontend\BasketController::class, 'index'])->name('basket.index.front');
});
