<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use Illuminate\Routing\Controllers\Middleware;
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

Route::group(['middleware' => 'guest'], function(){
    Route::get('/', [homeController::class, 'index'])->name('home');
    Route::get('/activity', [homeController::class, 'posts']);
    Route::get('/activity/{activity_id}', [homeController::class, 'singlePost']);
    Route::get('/about', [homeController::class, 'about']);

    //Login
    Route::get('/login', [LoginController::class, 'index']);
    Route::post('/login', [LoginController::class, 'authenticate']);
});

Route::group(['middleware' => 'auth'], function(){
    
    Route::get('/dashboard', [homeController::class, 'dashboard']);
    Route::get('/dashboard/activity', [homeController::class, 'db_activity']);

    // USERS CRUD
    Route::get('/dashboard/users', [UsersController::class, 'index']);
    
    //CREATE
    Route::get('/dashboard/users/create', [UsersController::class, 'create']);
    Route::post('/dashboard/users', [UsersController::class, 'store']);
    
    //READ
    Route::get('/dashboard/users/{users_id}', [UsersController::class, 'show']);
    
    //UPDATE
    Route::get('/dashboard/users/{users_id}/edit', [UsersController::class, 'edit']);
    Route::put('/dashboard/users/{users_id}', [UsersController::class, 'update']);
    
    //DELETE
    Route::delete('/dashboard/users/{users_id}', [UsersController::class, 'destroy']);
    
    
    
    // ACTIVITY CRUD
    Route::get('/dashboard/activity', [ActivityController::class, 'index']);
    
    //CREATE
    Route::get('/dashboard/activity/create', [ActivityController::class, 'create']);
    Route::post('/dashboard/activity', [ActivityController::class, 'store']);
    
    //READ
    Route::get('/dashboard/activity/{activity_id}', [ActivityController::class, 'show']);
    
    //UPDATE
    Route::get('/dashboard/activity/{activity_id}/edit', [ActivityController::class, 'edit']);
    Route::put('/dashboard/activity/{activity_id}', [ActivityController::class, 'update']);
    
    //DELETE
    Route::delete('/dashboard/activity/{activity_id}', [ActivityController::class, 'destroy']);
    
    
    //logout
    Route::delete('/logout', [LoginController::class, 'logout']);
    
});




