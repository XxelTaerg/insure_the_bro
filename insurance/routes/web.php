<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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


Route::group([
    'as' => 'auth.',
    'prefix' => 'auth'
], function () {
    Route::get('registration', [AuthController::class, 'showRegistrationForm'])->name('register-show');
    Route::post('registration', [AuthController::class, 'registration'])->name('register');
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login-show');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
});
Route::post('registration', [AuthController::class, 'registration'])->name('register.custom');
Route::post('login', [AuthController::class, 'login'])->name('login.custom');
Route::get('login', [AuthController::class, 'login'])->name('login.custom');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/product/{category_id}/category', [MainController::class, 'getProductsByCategory'])->name('filter.categories');

Route::get('product/{product_id}/feedback', [MainController::class, 'showFeedback'])->name('feedback.show');
Route::post('product/{product_id}/feedback', [MainController::class, 'sendFeedback'])->name('feedback.send');

Route::group([
    'as' => 'account.',
    'prefix' => 'account',
    'middleware' => 'auth'
], function () {
    Route::get('/', [InsuranceCompanyController::class, 'index'])->name('index');
    Route::get('/product/add', [InsuranceCompanyController::class, 'insertProductForm'])->name('product-save-form');
    Route::post('/product/save', [InsuranceCompanyController::class, 'saveProduct'])->name('product-save');
    Route::get('/product/{product_id}/update', [InsuranceCompanyController::class, 'updateProductForm'])->name('product-update-form');
    Route::put('/product/{product_id}/update', [InsuranceCompanyController::class, 'updateProduct'])->name('product-update');
    Route::delete('/product/{product_id}/delete', [InsuranceCompanyController::class, 'deleteProduct'])->name('product-delete');
    Route::get('/feedbacks', [InsuranceCompanyController::class, 'showFeedbacks'])->name('feedbacks');
});
