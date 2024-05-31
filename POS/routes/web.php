<?php

use App\Http\Controllers\BabyKidController;
use App\Http\Controllers\BeautyHealthController;
use App\Http\Controllers\FoodBeverageController;
use App\Http\Controllers\HomeCareController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [HomepageController::class, 'home']);

Route::get('/product', [ProductController::class, 'index']);
Route::prefix('/category')->group(function () {
    Route::get('food-baverage', [ProductController::class, 'foodbeverage']);
    Route::get('home-care', [ProductController::class, 'homecare']);
    Route::get('beauty-health', [ProductController::class, 'beautyhealth']);
    Route::get('baby-kid', [ProductController::class, 'babykid']);
});

Route::get('/user', [UserController::class,'user']);


Route::get('/sales', [SalesController::class,'sales']);