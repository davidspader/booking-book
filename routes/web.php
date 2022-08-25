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

Route::get('/houses', [HouseController::class, 'index'])->name('houses');
Route::get('/houses/register', [HouseController::class, 'create'])->name('house_create');
Route::post('/houses/register', [HouseController::class, 'store'])->name('house_store');
Route::get('/houses/{house}/edit', [HouseController::class, 'edit'])->name('house_edit');
Route::put('/houses/{house}', [HouseController::class, 'update'])->name('house_update');
Route::get('/houses/{house}/delete', [HouseController::class, 'destroy'])->name('house_destroy');

Route::get('/rents/{user}/{house}', [RentController::class, 'index'])->name('rents');
Route::get('/rents/register/{user}/{house}', [RentController::class, 'create'])->name('rent_create');
Route::post('/rents/register/{user}/{house}', [RentController::class, 'store'])->name('rent_store');


