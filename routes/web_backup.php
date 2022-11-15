<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContentController;

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
  return view('/main/home');
});


#Auth
Route::middleware('guest')->group(function () {
  Route::get('/login', [AuthController::class, 'index'])->name('login');
  Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
  Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

#Home
Route::get('/home', [HomeController::class, 'index'])->name('index');

#dashboard
Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

#Content
// Route::get('/content', [ContentController::class, 'index']);
// Route::get('/content/insert', [ContentController::class, 'insert'])->name('content/insert');
Route::resource('/content', ContentController::class);
// Route::post('/content/insert', [ContentController::class, 'insert_data'])->name('insert_data');

#Users
Route::get('/users', [UsersController::class, 'index'])->name('users');
