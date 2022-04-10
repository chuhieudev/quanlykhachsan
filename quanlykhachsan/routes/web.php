<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

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

Route::get('/', [RoomController::class, 'index'])->name('room.index');
Route::get('/order-room', [RoomController::class, 'createOrder'])->name('room.order');
Route::post('/order-room', [RoomController::class, 'storeOrder'])->name('room.order.store');
Route::get('/about', [RoomController::class, 'about'])->name('about');
Route::get('/contact', [RoomController::class, 'contact'])->name('contact');
Route::get('/events', [RoomController::class, 'events'])->name('events');