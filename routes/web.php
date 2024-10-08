<?php

use App\Http\Controllers\TicketController;
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
// Route::resource('tickets', TicketController::class)->middleware('auth');
Route::middleware('auth')->group(function () {
    Route::view('/', 'home')->name('home');
    Route::resource('tickets', TicketController::class);
    Route::get('/getdata', [TicketController::class, 'getdata'])->name('getdata');
    Route::get('/getAreas', [TicketController::class, 'getAreas'])->name('getAreas');
});
