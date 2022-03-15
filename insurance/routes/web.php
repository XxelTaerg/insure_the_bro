<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\InsuranceCompanyController;

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



Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/product/{category_id}/category', [MainController::class, 'categories'])->name('filter.categories');
Route::get('search', [MainController::class, 'index'])->name('search');

Route::get('product/{product_id}/feedback', [MainController::class, 'showFeedback'])->name('feedback.show');
Route::post('product/{product_id}/feedback', [MainController::class, 'sendFeedback'])->name('feedback.send');

Route::group([
    'as' => 'account.',
    'prefix' => 'account',
    'middleware' => 'auth'
], function () {
    Route::get('/', [InsuranceCompanyController::class, 'index'])->name('index');
    Route::get('/insert-product', [InsuranceCompanyController::class, 'insertProduct'])->name('insert-product');
});
