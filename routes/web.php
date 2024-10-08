<?php

use App\Http\Controllers\GeometriController;
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
    return view('home');
});

Route::controller(GeometriController::class)->group(function () {
    Route::get('/geometri/keliling-lingkaran', 'vkelilingLingkaran');
    Route::get('/geometri/luas-lingkaran', 'vluasLingkaran');
});
