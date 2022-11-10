<?php

use App\Models\Content;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

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
//   return view('/main/home');
// });



Route::group(['middleware' => 'web'], function () {
  Route::group(['middleware' => 'guest'], function () {
    #home
    Route::get('/', [HomeController::class, 'index'])->name('home');
    #login
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
  });

  Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('content', ContentController::class);
    #upload
    Route::get('upload', [UploadController::class, 'upload'])->name('upload');
    Route::post('storeUpload', [UploadController::class, 'storeUpload'])->name('storeUpload');
    #profile
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('profile/setting/{user}', [ProfileController::class, 'setting'])->name('setting');
    Route::put('profile/updateSetting/{id_user}', [ProfileController::class, 'updateSetting'])->name('updateSetting');
  });
});

#User
Route::get('users', [UserController::class, 'index']);
