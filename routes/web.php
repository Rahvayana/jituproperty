<?php

use App\Http\Controllers\CinemaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ScheduleController;
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

Route::get('/', [DashboardController::class,'index'])->name('dashboard');

Route::get('/bioskop', [CinemaController::class,'index'])->name('cinema.index');
Route::get('/create-bioskop', [CinemaController::class,'create'])->name('cinema.create');
Route::post('/store-bioskop', [CinemaController::class,'store'])->name('cinema.store');


Route::get('/film', [FilmController::class,'index'])->name('film.index');
Route::get('/create-film', [FilmController::class,'create'])->name('film.create');
Route::post('/store-film', [FilmController::class,'store'])->name('film.store');
Route::get('/film/{film}', [FilmController::class,'show'])->name('film.show');


Route::get('/schedule', [ScheduleController::class,'index'])->name('schedule.index');
Route::get('/create-schedule', [ScheduleController::class,'create'])->name('schedule.create');
Route::post('/store-schedule', [ScheduleController::class,'store'])->name('schedule.store');

Route::get('/resrevation', [ReservationController::class,'index'])->name('resrevation.index');
Route::get('/create-resrevation', [ReservationController::class,'create'])->name('resrevation.create');
Route::post('/store-resrevation', [ReservationController::class,'store'])->name('resrevation.store');
