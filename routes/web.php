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
    Route::controller(RoleController::class)->group(function () {
        Route::get('role-index', 'index')->name('role.index');
        Route::get('role-add', 'create')->name('role.add');
        Route::post('role-save', 'store')->name('role.save');
        Route::get('role-edit/{id}', 'edit')->name('role.edit');
        Route::get('role-delete/{id}', 'delete')->name('role.delete');
        //Permission 
        Route::get('role-permission/{id}', 'permission')->name('role.permission');
        Route::get('role-permission_change', 'permission_change')->name('role.permission_change');
    });
    Route::controller(MemberController::class)->as('member.')->group(function () {
        Route::get('member-all', 'index')->name('all');
        Route::get('member-register', 'create')->name('register');
        Route::post('member-save', 'store')->name('save');
        Route::get('member-edit/{id}', 'edit')->name('edit');
        Route::get('member-delete/{id}', 'delete')->name('delete');
        //Member Profile
        Route::get('member-profile/{id}', 'profile')->name('profile');
    });
    Route::controller(GymClassController::class)->as('class.')->group(function () {
        Route::get('class-all', 'index')->name('all');
        Route::get('class-add', 'create')->name('add');
        Route::post('class-save', 'store')->name('save');
        Route::get('class-edit/{id}', 'edit')->name('edit');
        Route::get('class-delete/{id}', 'delete')->name('delete');
        //Shedule 
        Route::get('schedule-all', 'all_schedule')->name('schedule');
        Route::get('schedule-add', 'add_schedule')->name('schedule_add');
        Route::post('schedule-save', 'save_schedule')->name('schedule_save');
        Route::get('schedule-edit/{id}', 'edit_schedule')->name('schedule_edit');
        Route::get('schedule-delete/{id}', 'delete_schedule')->name('schedule_delete');

        //Enrollment
        Route::get('enrollment-all', 'all_enrollment')->name('enrollment');
        Route::get('enrollment-add', 'add_enrollment')->name('enrollment_add');
        Route::post('enrollment-save', 'save_enrollment')->name('enrollment_save');
        Route::get('enrollment-class/{id}', 'view_enrollment_classes')->name('enrollment_class');
        Route::get('enrollment-edit/{id}', 'edit_enrollment')->name('enrollment_edit');
        Route::get('enrollment-delete/{id}', 'delete_enrollment')->name('enrollment_delete');
    });
    Route::controller(EquipmentController::class)->as('equipmet.')->group(function () {
        Route::get('equipmet-all', 'index')->name('all');
        Route::get('equipmet-add', 'create')->name('add');
        Route::post('equipmet-save', 'save')->name('save');
        Route::get('equipmet-edit/{id}', 'edit')->name('edit');
        Route::get('equipmet-delete/{id}', 'delete_equipmet')->name('delete');
        //	Maintenance
        Route::get('maintenance-all', 'maintenance')->name('maintenance_all');
        Route::get('maintenance-add', 'maintenance_add')->name('maintenance_add');
        Route::post('maintenance-save', 'maintenance_save')->name('maintenance_save');
        Route::get('maintenance-edit/{id}', 'maintenance_edit')->name('maintenance_edit');
    });
    Route::controller(FitnessAssessmentController::class)->as('fitness_assessment.')->group(function () {
        Route::get('fitness-assessment-members', 'index')->name('all');
        Route::get('fitness-assessment/{id}', 'fitness_assessment')->name('all_fitness_assessment');
        Route::get('fitness-assessment-add', 'create')->name('add');
        Route::post('fitness-assessment-save', 'store')->name('save');
        Route::get('fitness-assessment-edit/{id}', 'edit')->name('edit');
        Route::get('fitness-assessment-delete/{id}', 'delete')->name('delete');

        // Goal 
        Route::get('goal-assessment', 'goal')->name('goal');
    });
    Route::controller(MemberShipController::class)->as('member_ship.')->group(function () {
        Route::get('membership-plans', 'membership_plan')->name('plans');
        Route::get('membership-create', 'membership_create')->name('plans_create');
        Route::get('membership-edit/{id}', 'membership_edit')->name('plans_edit');
        Route::post('membership-save', 'membership_save')->name('plans_save');
        Route::get('membership-delete/{id}', 'membership_delete')->name('plans_delete');
    });

    Route::controller(GymClassController::class)->as('class.')->group(function () {
        Route::get('class-all', 'index')->name('all');
        Route::get('class-add', 'create')->name('add');
        Route::post('class-save', 'store')->name('save');
        Route::get('class-edit/{id}', 'edit')->name('edit');
        Route::get('class-delete/{id}', 'delete')->name('delete');
        //Shedule 
        Route::get('schedule-all', 'all_schedule')->name('schedule');
        Route::get('schedule-add', 'add_schedule')->name('schedule_add');
        Route::post('schedule-save', 'save_schedule')->name('schedule_save');
        Route::get('schedule-edit/{id}', 'edit_schedule')->name('schedule_edit');
        Route::get('schedule-delete/{id}', 'delete_schedule')->name('schedule_delete');

        //Enrollment
        Route::get('enrollment-all', 'all_enrollment')->name('enrollment');
        Route::get('enrollment-add', 'add_enrollment')->name('enrollment_add');
        Route::post('enrollment-save', 'save_enrollment')->name('enrollment_save');
        Route::get('enrollment-class/{id}', 'view_enrollment_classes')->name('enrollment_class');
        Route::get('enrollment-edit/{id}', 'edit_enrollment')->name('enrollment_edit');
        Route::get('enrollment-delete/{id}', 'delete_enrollment')->name('enrollment_delete');
    });

    Route::controller(EquipmentController::class)->as('equipmet.')->group(function () {
        Route::get('equipmet-all', 'index')->name('all');
        Route::get('equipmet-add', 'create')->name('add');
        Route::post('equipmet-save', 'save')->name('save');
        Route::get('equipmet-edit/{id}', 'edit')->name('edit');
        Route::get('equipmet-delete/{id}', 'delete_equipmet')->name('delete');

        //	Maintenance

        Route::get('maintenance-all', 'maintenance')->name('maintenance_all');
        Route::get('maintenance-add', 'maintenance_add')->name('maintenance_add');
        Route::post('maintenance-save', 'maintenance_save')->name('maintenance_save');
        Route::get('maintenance-edit/{id}', 'maintenance_edit')->name('maintenance_edit');
    });
    Route::controller(FitnessAssessmentController::class)->as('fitness_assessment.')->group(function () {
        Route::get('fitness-assessment-members', 'index')->name('all');
        Route::get('fitness-assessment/{id}', 'fitness_assessment')->name('all_fitness_assessment');
        Route::get('fitness-assessment-add', 'create')->name('add');
        Route::post('fitness-assessment-save', 'store')->name('save');
        Route::get('fitness-assessment-edit/{id}', 'edit')->name('edit');
        // Goal 
        Route::get('goal', 'goal')->name('goal');
        Route::get('goal-all/{id}', 'all_goal')->name('all_goal');
        Route::get('goal-add', 'add_goal')->name('add_goal');
        Route::post('goal-save', 'save_goal')->name('save_goal');
        Route::get('goal-edit/{id}', 'edit_goal')->name('edit_goal');
        Route::get('goal-delete/{id}', 'delete_goal')->name('delete_goal');
    });
    Route::controller(MemberPaymentController::class)->as('payment.')->group(function () {
        Route::get('member-payment', 'create')->name('add');
        Route::post('member-payment-save', 'store')->name('save');
        //select box 
        Route::get('all-members', 'get_all_members')->name('get_all_members');
        Route::get('class-member', 'get_members')->name('get_members');
        Route::get('get-member', 'get_member')->name('get_member');
        Route::get('get-payments', 'get_payments')->name('get_payments');
    });
    Route::controller(ReportController::class)->as('report.')->group(function () {
        Route::get('get-day-report', 'day_report')->name('day_report');
        Route::post('get-day-report', 'day_report')->name('get_day_report');
        Route::get('get-monthly-report', 'monthly_report')->name('monthly_report');
        Route::post('get-monthly-report', 'monthly_report')->name('get_monthly_report');
    });
    Route::controller(ExpenseController::class)->as('expenses.')->group(function () {
        Route::get('expenses','gernal')->name('gernal');
        Route::post('expenses-date','gernal')->name('gernal_date');
        Route::get('expenses-add','gernal_add')->name('gernal_add');
        Route::post('expenses-save','gernal_save')->name('save');
        Route::get('expence-category','category')->name('category');
        Route::post('expence-add_category','add_category')->name('add_category');
        Route::post('expence-add_category','add_category')->name('add_category');
        Route::get('expence-category-delete/{id}','category_delete')->name('delete_category');
    });
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
