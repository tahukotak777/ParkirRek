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

Route::get('/tiket', [IndexController::class,'tiket']);
Route::get('/pembayaran', [IndexController::class,'pembayaran']);

Route::post('/pembayaran/bayar', [IndexController::class,'bayar']);
Route::post('/masuk/parkir', [IndexController::class,'masuk']);
Route::post('/scan/qrcode', [IndexController::class,'submitScan']);