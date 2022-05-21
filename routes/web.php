<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ContactusController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/categories', CategoryController::class);
 Route::get('categories/enable/{id} ', [CategoryController::class, 'enable'])->name('categories.enable');
 Route::get('categories/disable/{id} ', [CategoryController::class, 'disable'])->name('categories.disable');
Route::resource('jobs', JobController::class);
Route::resource('companies', CompanyController::class);
Route::resource('Aboutus', AboutusController::class);
Route::resource('Contactus', ContactusController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


 Route::get('/dashboard', function () {
     return view('layouts.master');
 })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
