<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoffeeController;

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
    return view('welcome');
});

Route::get('/coffeeList', [CoffeeController::class, 'index'])->name('coffeeList.index')->middleware('auth');
Route::get('/coffeeList/create', [CoffeeController::class, 'create'])->name('coffeeList.create');
Route::post('/coffeeList', [CoffeeController::class, 'store'])->name('coffeList.store');
Route::get('/coffeeList/{id}', [CoffeeController::class, 'show'])->name('coffeeList.show')->middleware('auth');
Route::delete('/coffeeList/{id}', [CoffeeController::class, 'delete'])->name('coffeeList.delete')->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
