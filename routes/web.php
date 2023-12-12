<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\VideoController;
use App\Http\Controllers\Backend\PhotoController;
use App\Http\Controllers\Backend\SettingController;


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

Route::get('/', [HomeController::class, 'getindex']);
Route::get('/video/{slug}', 'App\Http\Controllers\Video\VideoController@get_video');
Route::get('/video', 'App\Http\Controllers\Video\VideoController@get_video');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/contacts', [ContactController::class, 'getindex'])->middleware(['auth', 'verified'])->name('contacts');

/**
 * Video
 * Video dự án tiêu biểu
 */
Route::get('/dashboard/videos', [VideoController::class, 'getindex'])->middleware(['auth', 'verified'])->name('videos');
Route::get('/dashboard/video/upload', function () {
  return view('backend.video_upload');
})->middleware(['auth', 'verified']);
Route::get('/dashboard/videos/{id}/edit', [VideoController::class, 'get_update'])->middleware(['auth', 'verified']);
Route::post('/dashboard/videos/{id}/edit', [VideoController::class, 'update'])->middleware(['auth', 'verified']);

Route::get('/dashboard/videos/{id}/delete', [VideoController::class, 'delete'])->middleware(['auth', 'verified']);

Route::post('/dashboard/video/upload', [VideoController::class, 'upload'])->middleware(['auth', 'verified']);

/**
 * Photo
 * Hình ảnh khách hàng
 */
Route::get('/dashboard/photos', [PhotoController::class, 'getindex'])->middleware(['auth', 'verified'])->name('photos');
Route::get('/dashboard/photo/upload', function () {
  return view('backend.photo_upload');
})->middleware(['auth', 'verified']);
Route::get('/dashboard/photos/{id}/edit', [PhotoController::class, 'get_update'])->middleware(['auth', 'verified']);
Route::post('/dashboard/photos/{id}/edit', [PhotoController::class, 'update'])->middleware(['auth', 'verified']);

Route::get('/dashboard/photos/{id}/delete', [PhotoController::class, 'delete'])->middleware(['auth', 'verified']);

Route::post('/dashboard/photo/upload', [PhotoController::class, 'upload'])->middleware(['auth', 'verified']);

/**s
 * Setting
 */
Route::get('/dashboard/settings', [SettingController::class, 'index'])->middleware(['auth', 'verified'])->name('settings');
Route::get('/dashboard/settings/{id}/edit', [SettingController::class, 'get_update'])->middleware(['auth', 'verified']);
Route::post('/dashboard/settings/{id}/edit', [SettingController::class, 'update'])->middleware(['auth', 'verified']);



require __DIR__.'/auth.php';
