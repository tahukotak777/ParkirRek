<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('masuk');
});

Route::get('/keluar', function () {
    return view('keluar');
});
Route::get('/scan', function () {
    return view('scan');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('admin.sigup');
});
Route::get('/admin', function () {
    return view('admin.admin');
})->name('admin.dashboard');


Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/signup', 'Auth\RegisterController@register')->name('signup');
Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::get('/admin/users', [IndexController::class, 'manageUsers'])->name('admin.users');
Route::get('/admin/settings', [IndexController::class, 'settings'])->name('admin.settings');

Route::get('/tiket', [IndexController::class,'tiket']);
Route::get('/pembayaran', [IndexController::class,'pembayaran']);

Route::post('/pembayaran/bayar', [IndexController::class,'bayar']);
Route::post('/masuk/parkir', [IndexController::class,'masuk']);
Route::post('/scan/qrcode', [IndexController::class,'submitScan']);