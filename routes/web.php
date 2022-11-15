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
use App\Http\Controllers\DataController;

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
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    #login
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
  });

  Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    #content
    Route::get('content/upload/{path}', [ContentController::class, 'upload'])->name('upload');
    Route::put('content/upload/{path}/storeUpload', [ContentController::class, 'storeUpload'])->name('content.storeUpload');
    Route::resource('content', ContentController::class);
    #upload
    Route::get('data', [DataController::class, 'index'])->name('data');
    Route::get('data/create/{id_content}', [DataController::class, 'create'])->name('create');
    Route::post('data/store', [DataController::class, 'store'])->name('store');
    #profile
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('profile/setting/{user}', [ProfileController::class, 'setting'])->name('setting');
    Route::put('profile/updateSetting/{id_user}', [ProfileController::class, 'updateSetting'])->name('updateSetting');
  });
});
#User
Route::get('users', [UserController::class, 'index']);
