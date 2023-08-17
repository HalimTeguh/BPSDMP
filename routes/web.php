<?php

use App\Http\Controllers\homeController;
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

Route::get('/', [homeController::class, 'index']);

Route::get('/activity', [homeController::class, 'posts']);

Route::get('/activity/singlePost', [homeController::class, 'singlePost']);

Route::get('/about', [homeController::class, 'about']);

Route::get('/dashboard', [homeController::class, 'dashboard']);

Route::get('/dashboard/users', [homeController::class, 'db_users']);

Route::get('/dashboard/activity', [homeController::class, 'db_activity']);


