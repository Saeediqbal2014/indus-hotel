<?php

use App\Http\Controllers\Administrator\EquipmentController;
use App\Http\Controllers\Administrator\ExpenseController;
use App\Http\Controllers\Administrator\GymClassController;
use App\Http\Controllers\Administrator\RoleController;
use App\Http\Controllers\Administrator\UserController;
use App\Http\Controllers\Administrator\MemberController;
use App\Http\Controllers\Administrator\FitnessAssessmentController;
use App\Http\Controllers\Administrator\MemberPaymentController;
use App\Http\Controllers\Administrator\MemberShipController;
use App\Http\Controllers\Administrator\ReportController;
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

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('/accommodation', [App\Http\Controllers\FrontendController::class, 'accommodation'])->name('accommodation');

Auth::routes(['register' => false]);

Route::prefix('admin')->middleware(['auth'])->group(function () {
    //User Controller
    Route::controller(UserController::class)->group(function () {
        Route::get('user-index', 'index')->name('user.index');
        Route::get('user-add', 'create')->name('user.add');
        Route::post('user-save', 'store')->name('user.save');
        Route::get('user-edit/{id}', 'edit')->name('user.edit');
        Route::get('user-delete/{id}', 'delete')->name('user.delete');
        //Profile
        Route::get('profile/{id}', 'profile')->name('user.profile');
        Route::get('edit-profile/{id}', 'edit_profile')->name('user.edit_profile');
        Route::post('profile-update', 'profile_update')->name('user.profile_update');
    });
    //Role Controller

});
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
