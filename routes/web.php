<?php

use App\Http\Controllers\RentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseController;
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
    if(!Auth::check()){
        return view('auth.login');
    }

    return Redirect::route('houses');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/houses', [HouseController::class, 'index'])->name('houses')->middleware('auth');
Route::get('/houses/register/{user}', [HouseController::class, 'create'])->name('house_create')->middleware(['auth', 'checkUserId']);
Route::post('/houses/register/{user}', [HouseController::class, 'store'])->name('house_store')->middleware(['auth', 'checkUserId']);
Route::get('/houses/edit/{user}/{house}', [HouseController::class, 'edit'])->name('house_edit')->middleware(['auth', 'checkUserId']);
Route::put('/houses/{user}/{house}', [HouseController::class, 'update'])->name('house_update')->middleware(['auth', 'checkUserId']);
Route::get('/houses/{user}/{house}/delete', [HouseController::class, 'destroy'])->name('house_destroy')->middleware(['auth', 'checkUserId']);

Route::get('/rents/{user}/{house}', [RentController::class, 'index'])->name('rents')->middleware('auth');
Route::get('/rents/register/{user}/{house}', [RentController::class, 'create'])->name('rent_create')->middleware('auth');
Route::post('/rents/register/{user}/{house}', [RentController::class, 'store'])->name('rent_store')->middleware('auth');
Route::get('/rents/edit/{user}/{rent}', [RentController::class, 'edit'])->name('rent_edit')->middleware('auth');
Route::put('/rents/{user}/{rent}', [RentController::class, 'update'])->name('rent_update')->middleware('auth');
Route::get('/rents/{user}/{rent}/delete', [RentController::class, 'destroy'])->name('rent_destroy')->middleware('auth');


