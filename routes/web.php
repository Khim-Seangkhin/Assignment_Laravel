<?php

use App\Http\Controllers\AttendaceReportController;
use App\Http\Controllers\AttendaceSheet;
use App\Http\Controllers\AttendaceSheetController;
use App\Http\Controllers\ItDapartmentController;
use App\Http\Controllers\SaleDepartmentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['register' => false]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(UserController::class)->group(function() {
    Route::get('/user', 'index')->name('user.index');
    Route::get('/user/create', 'create')->name('user.create');
    Route::post('/user/store', 'store')->name('user.store');
    Route::get('/user/edit/{id}', 'edit')->name('user.edit');
    Route::post('/user/update/{id}', 'update')->name('user.update');
    Route::get('/user/logout', 'logout')->name('user.logout');
    Route::get('/user/mission_approve', 'mission_approve');
    Route::get('/user/mission_reject', 'mission_reject');
    Route::get('/user/leave_approve', 'leave_approve');
    Route::get('/user/leave_reject', 'leave_reject');
});

Route::controller(AttendaceSheetController::class)->group(function() {
    Route::get('/attendace_sheet', 'index')->name('attendace_sheet.index');
    Route::get('/attendace_sheet/create', 'create')->name('attendace_sheet.create');
    Route::post('/attendace_sheet/store', 'store')->name('attendace_sheet.store');
    Route::get('/attendace_sheet/mission_request', 'mission_request')->name('attendace_sheet.mission_request');
    Route::get('/attendace_sheet/leave_request', 'leave_request')->name('attendace_sheet.leave_request');
});

Route::controller(AttendaceReportController::class)->group(function() {
    Route::get('/attendace_report', 'index')->name('attendace_report.index');
    
});

Route::controller(ItDapartmentController::class)->group(function() {
    Route::get('/it_department', 'index')->name('it_department.index');
});

Route::controller(SaleDepartmentController::class)->group(function() {
    Route::get('/sale_department', 'index')->name('sale_department.index');
    
});
