<?php

use App\Models\Content;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Models\Kategori;

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
  return redirect()->route('home');
});



Route::group(['middleware' => 'web'], function () {
  Route::group(['middleware' => 'guest'], function () {
    #home
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/home/{path_berita}', [HomeController::class, 'berita']);
    #login
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
  });

  Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    #berita
    // Route::delete('news/{path}', [ContentController::class, 'destroy'])->name('news.destroy');
    Route::resource('news', NewsController::class);
    #slider
    Route::resource('slider', SliderController::class)->except('show');
    #content
    Route::get('content/upload/{path}', [ContentController::class, 'upload'])->name('upload');
    Route::put('content/upload/{path}/storeUpload', [ContentController::class, 'storeUpload'])->name('content.storeUpload');
    // Route::delete('content/{path}', [ContentController::class, 'destroy'])->name('content.destroy');
    Route::resource('content', ContentController::class);
    #upload admin
    Route::get('indexDataAdmin', [ContentController::class, 'indexDataAdmin'])->name('indexDataAdmin');
    #upload
    Route::get('data', [DataController::class, 'index'])->name('data');
    Route::get('data/create/{id_content}', [DataController::class, 'create'])->name('create');
    Route::post('data/store', [DataController::class, 'store'])->name('store');
    #profile
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('profile/setting/{user}', [ProfileController::class, 'setting'])->name('setting');
    Route::put('profile/updateSetting/{id_user}', [ProfileController::class, 'updateSetting'])->name('updateSetting');
    #User
    Route::resource('users', UserController::class)->except('show', 'create', 'destroy', 'store');
    #Password
    Route::get('password', [UserController::class, 'password'])->name('password');
    Route::put('password/updatePassword/{id_user}', [UserController::class, 'updatePassword'])->name('updatePassword');
    #kategori
    Route::resource('kategori', Kategori::class);
  });
});
