<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentDashboardController;
use App\Http\Controllers\ContentMethodologyController;
use App\Http\Controllers\ContentGuideController;
use App\Http\Controllers\ContentOtherController;
use App\Http\Controllers\ContentProfileController;
use App\Http\Controllers\ContentEntryMeetController;
use App\Http\Controllers\ContentReportController;

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


// bagian dashboard
Route::get('/',[ContentDashboardController::class,'index'])->name('content-dashboard');

// bagian menu profile
Route::get('/profile',[ContentProfileController::class,'index'])->name('content-profile');

// bagian memanggil menu metodologi
Route::get('/methodology',[ContentMethodologyController::class,'index'])->name('content-methodology');
Route::post('/methodology/save-methodology',[ContentMethodologyController::class,'save_method'])->name('save-method');
Route::put('/methodology/update-methodology/{id}',[ContentMethodologyController::class,'update_method'])->name('update-method');
Route::get('/methodology/delete-methodology/{id}',[ContentMethodologyController::class,'delete_method'])->name('delete-method');

// bagian menu guide
Route::get('/guide',[ContentGuideController::class,'index'])->name('content-guide');
Route::post('/guide/save-guide',[ContentGuideController::class,'save_guide'])->name('save-guide');
Route::put('/guide/update-guide/{id}',[ContentGuideController::class,'update_guide'])->name('update-guide');
Route::get('/guide/delete-guide/{id}',[ContentGuideController::class,'delete_guide'])->name('delete-guide');

// bagian menu other
Route::get('/other',[ContentOtherController::class,'index'])->name('content-other');
Route::post('/other/save-other',[ContentOtherController::class,'save_other'])->name('save-other');
Route::put('/other/update-other/{id}',[ContentOtherController::class,'update_other'])->name('update-other');
Route::get('/other/delete-other/{id}',[ContentOtherController::class,'delete_other'])->name('delete-other');

// bagian menu meet
Route::get('/entry-meet',[ContentEntryMeetController::class,'index'])->name('content-entry-meet');
Route::post('/entry-meet',[ContentEntryMeetController::class,'save_meet'])->name('save-meet');


// bagian menu report
Route::get('/report',[ContentReportController::class,'index'])->name('content-report');
Route::post('/report',[ContentReportController::class,'save_report'])->name('save-report');





