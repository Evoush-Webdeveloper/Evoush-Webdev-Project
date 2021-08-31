<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WebsiteController::class, 'index']);

Auth::routes(['register' => false, 'login' => true, 'reset' => false]);

Route::get('/dashboard/home', [HomeController::class, 'index'])->name('home');

Route::get('/user', [UserController::class, 'UserData']);

Route::resource('/dashboard/users', UserController::class);
