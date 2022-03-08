<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\MainController;

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


Route::get('/insertproduct', function () {
    return view('insertproduct');
});
Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/product/{category_id}/category', [MainController::class, 'categories'])->name('filter.categories');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('search', [MainController::class, 'index'])->name('search');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('insurancecompany', [CustomAuthController::class, 'index'])->name('insurance.company');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
