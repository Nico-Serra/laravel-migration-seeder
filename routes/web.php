<?php

use App\Http\Controllers\Guest\TrainController;
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
    return view('guests.welcome');
})->name('guests.home');

Route::get('/trains', [TrainController::class, 'index'])->name('guests.trains');

Route::get('/trains/{train}', [TrainController::class, 'show'])->name('guest.train.show');
