<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentDashboardController;
use App\Http\Controllers\ContentMenuMethodologyController;
use App\Http\Controllers\ContentMethodologyController;
use App\Http\Controllers\ContentGuideController;
use App\Http\Controllers\ContentOtherController;
use App\Http\Controllers\ContentProfileController;
use App\Http\Controllers\ContentEntryMeetController;
use App\Http\Controllers\ContentReportController;
use App\Http\Controllers\ContentWorkLetterController;
use App\Http\Controllers\ContentMasterUserController;


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
Route::get('/menu-methodology',[ContentMenuMethodologyController::class,'index'])->name('content-menu-methodology');

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
Route::get('/entry-meet/edit-entry-meet/{id}',[ContentEntryMeetController::class,'edit'])->name('edit-content-entry-meet');
Route::put('/entry-meet/update-entry-meet/{id}',[ContentEntryMeetController::class,'update'])->name('update-content-entry-meet');


// bagian menu report
Route::get('/report',[ContentReportController::class,'index'])->name('content-report');
Route::post('/report',[ContentReportController::class,'save_report'])->name('save-report');
Route::get('/reports/{id}/download', [ContentReportController::class, 'download'])->name('content-report.download');
Route::get('/reports/{id}/preview', [ContentReportController::class, 'preview'])->name('content-report.preview');
Route::delete('/reports/{id}/delete', [ContentReportController::class, 'delete_report'])->name('content-report.delete');
Route::get('/report/edit-report/{id}',[ContentReportController::class,'edit'])->name('edit-content-report');
Route::put('/report/update-report/{id}',[ContentReportController::class,'update'])->name('update-content-report');

// bagian menu surat tugas 
Route::get('/work-letter',[ContentWorkLetterController::class,'index'])->name('content-work-letter');
Route::post('/work-letter',[ContentWorkLetterController::class,'save_letters'])->name('save-work-letter');
Route::get('/work-letters/{id}/download', [ContentWorkLetterController::class, 'download'])->name('content-work-letter.download');
Route::get('/work-letters/{id}/preview', [ContentWorkLetterController::class, 'preview'])->name('content-work-letter.preview');
Route::delete('/work-letters/{id}/delete', [ContentWorkLetterController::class, 'delete_letter'])->name('content-work-letter.delete');
Route::get('/work-letter/edit-work-letter/{id}',[ContentWorkLetterController::class,'edit'])->name('edit-content-work-letter');
Route::put('/work-letter/update-work-letter/{id}',[ContentWorkLetterController::class,'update'])->name('update-content-work-letter');

// bagian menu master user
Route::get('/user',[ContentMasterUserController::class,'index'])->name('content-master-user');
Route::post('/user',[ContentMasterUserController::class,'save_user'])->name('save-user');





