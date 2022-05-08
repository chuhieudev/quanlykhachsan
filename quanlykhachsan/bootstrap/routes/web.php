<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\Admin\AdminRoomController;

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

//admin

Route::get('login', 'LoginController@getLogin');
Route::post('login', 'LoginController@login')->name('login');
Route::post('logout', 'LoginController@logout')->name('logout');
Route::middleware('auth:admin')->group(function() {
    Route::group(['prefix' => '/room'], function () {
        Route::get('/', [AdminRoomController::class, 'index'])->name('admin.room.index');
        Route::get('/create', [AdminRoomController::class, 'create'])->name('admin.room.create');
        Route::post('/', [AdminRoomController::class, 'store'])->name('admin.room.store');
        Route::get('/{room}/edit', [AdminRoomController::class, 'edit'])->name('admin.roomr.edit');
        Route::patch('/{room}', [AdminRoomController::class, 'update'])->name('admin.room.update');
        Route::delete('/{room}', [AdminRoomController::class, 'destroy'])->name('admin.room.destroy');
    });
});