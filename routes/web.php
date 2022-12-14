<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users/create',[App\Http\Controllers\UserController::class,'create'])->name('users.create');
Route::post('/users',[App\Http\Controllers\UserController::class,'lion'])->name('users.lion');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');
/*
Boardroom Routes 
*/
Route::get('/rooms/createroom',[App\Http\Controllers\RoomController::class,'createroom'])->name('rooms.createroom');
Route::post('/rooms',[App\Http\Controllers\RoomController::class,'reservation'])->name('rooms.reservation');
Route::get('/rooms',[App\Http\Controllers\RoomController::class,'indexroom'])->name('rooms.indexroom');
Route::get('/rooms/{room}',[App\Http\Controllers\RoomController::class,'showroom'])->name('rooms.showroom');
Route::get('/rooms/{room}/editroom',[App\Http\Controllers\RoomController::class,'editroom'])->name('rooms.editroom');
Route::put('/rooms/{room}',[App\Http\Controllers\RoomController::class,'updateroom'])->name('rooms.updateroom');
Route::delete('/rooms/{room}',[App\Http\Controllers\RoomController::class,'destroyroom'])->name('rooms.deleteroom');