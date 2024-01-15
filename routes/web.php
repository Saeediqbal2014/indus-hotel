<?php

use App\Http\Controllers\frontend\AccommodationController;
use App\Http\Controllers\Administrator\EquipmentController;
use App\Http\Controllers\Administrator\ExpenseController;
use App\Http\Controllers\Administrator\GymClassController;
use App\Http\Controllers\Administrator\RoleController;
use App\Http\Controllers\Administrator\UserController;
use App\Http\Controllers\frontend\BeautyController;
use App\Http\Controllers\frontend\DiscountController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\DashboardController;
use App\Http\Controllers\frontend\EventController;
use App\Http\Controllers\frontend\FacilityController;
use App\Http\Controllers\frontend\SliderController;
use App\Http\Controllers\frontend\DineinController;
use App\Http\Controllers\frontend\PlaceController;
use App\Http\Controllers\frontend\QueryController;
use App\Http\Controllers\frontend\VideoController;
use App\Http\Controllers\frontend\WelcomeController;
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
Route::get('/meeting-and-event', [App\Http\Controllers\FrontendController::class, 'meet'])->name('meet');
Route::get('/dine-in', [App\Http\Controllers\FrontendController::class, 'dinein'])->name('dinein');
Route::get('/Beauty-and-wellness', [App\Http\Controllers\FrontendController::class, 'beauty'])->name('beauty');
Route::get('/Hyderabad-Attractions', [App\Http\Controllers\FrontendController::class, 'hyderabad_attractions'])->name('hyderabad_attractions');
Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');
Route::get('/deluxe-rooms/{id}', [App\Http\Controllers\FrontendController::class, 'delux'])->name('delux');
Route::get('/rooms/{id}', [App\Http\Controllers\FrontendController::class, 'single_room'])->name('single_room');

Auth::routes(['register' => false]);
Route::controller(ContactController::class)->as('contact.')->group(function () {
    Route::get('/admin/all-messages',  'index')->name('all');
    Route::post('/store-messages',  'store')->name('store');
    Route::get('delete-messages/{id}', 'delete')->name('delete');
});
Route::controller(QueryController::class)->as('query.')->group(function () {
    Route::get('/admin/all-query',  'index')->name('all');
    Route::post('/store-query',  'store')->name('store');
    Route::get('delete-query/{id}', 'delete')->name('delete');
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    //User Controller
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard');
        // Route::get('user-add', 'create')->name('user.add');
        // Route::post('user-save', 'store')->name('user.save');
        // Route::get('user-edit/{id}', 'edit')->name('user.edit');
        // Route::get('user-delete/{id}', 'delete')->name('user.delete');
        //Profile
        Route::get('profile/{id}', 'profile')->name('user.profile');
        Route::get('edit-profile/{id}', 'edit_profile')->name('user.edit_profile');
        Route::post('profile-update', 'profile_update')->name('user.profile_update');
    });
    Route::controller(AccommodationController::class)->as('accommodation.')->group(function () {
        Route::get('/all-accommodation',  'index')->name('all');
        Route::get('/add-accommodation',  'create')->name('add');
        Route::get('edit-accommodation/{id}', 'edit')->name('edit');
        Route::post('/store-accommodation',  'store')->name('store');
        Route::get('delete-accommodation/{id}', 'delete_accommodation')->name('delete_accommodation');
    });

    Route::controller(SliderController::class)->as('slider.')->group(function () {

        Route::get('/all-slider',  'index')->name('all-slider');
        Route::get('/add-slider',  'add_slider')->name('add-slider');
        Route::post('/save-slider',  'store')->name('store_slider');
        Route::get('edit-slider/{id}', 'edit')->name('editslider');
        // Route::post('update-slider/{id}', 'update')->name('updateslider');
        Route::get('delete-slider/{id}', 'deleteslider')->name('deleteslider');
    });

    Route::controller(BeautyController::class)->as('beauty.')->group(function () {

        Route::get('/all-beauty',  'index')->name('all-beauty');
        Route::get('/add-beauty',  'add_beauty')->name('add-beauty');
        Route::post('/save-beauty',  'store')->name('store_beauty');
        Route::get('edit-beauty/{id}', 'edit')->name('editbeauty');
        // Route::post('update-beauty/{id}', 'update')->name('updatebeauty');
        Route::get('delete-beauty/{id}', 'deletebeauty')->name('deletebeauty');
    });

    Route::controller(PlaceController::class)->as('place.')->group(function () {

        Route::get('/all-place',  'index')->name('all-place');
        Route::get('/add-place',  'add_place')->name('add-place');
        Route::post('/save-place',  'store')->name('store_place');
        Route::get('edit-place/{id}', 'edit')->name('editplace');
        // Route::post('update-place/{id}', 'update')->name('updatebeauty');
        Route::get('delete-place/{id}', 'deleteplace')->name('deleteplace');
    });
    Route::controller(WelcomeController::class)->as('welcome.')->group(function () {

        Route::get('/all-welcome',  'index')->name('all-welcome');
        Route::get('/add-welcome',  'add_welcome')->name('add-welcome');
        Route::post('/save-welcome',  'store')->name('store_welcome');
        Route::get('edit-welcome/{id}', 'edit')->name('editwelcome');
        // Route::post('update-welcome/{id}', 'update')->name('updatewelcome');
        Route::get('delete-welcome/{id}', 'deletewelcome')->name('deletewelcome');
    });

    Route::controller(AboutController::class)->as('about.')->group(function () {

        Route::get('/all-about',  'index')->name('all-about');
        Route::get('/add-about',  'add_about')->name('add-about');
        Route::post('/save-about',  'store')->name('store_about');
        Route::get('edit-about/{id}', 'edit')->name('editabout');
        // Route::post('update-welcome/{id}', 'update')->name('updatewelcome');
        Route::get('delete-about/{id}', 'deleteabout')->name('deleteabout');
    });

    Route::controller(FacilityController::class)->as('facility.')->group(function () {

        Route::get('/all-facility',  'index')->name('all-facility');
        Route::get('/add-facility',  'add_facility')->name('add-facility');
        Route::post('/save-facility',  'store')->name('store_facility');
        Route::get('edit-facility/{id}', 'edit')->name('editabout');
        // Route::post('update-welcome/{id}', 'update')->name('updatewelcome');
        Route::get('delete-about/{id}', 'deletefacility')->name('deletefacility');
    });

    Route::controller(DiscountController::class)->as('discount.')->group(function () {

        Route::get('/all-discount',  'index')->name('all-discount');
        Route::get('/add-discount',  'add_discount')->name('add-discount');
        Route::post('/save-discount',  'store')->name('store_discount');
        Route::get('edit-discount/{id}', 'edit')->name('editdiscount');
        // Route::post('update-discount/{id}', 'update')->name('updatewelcome');
        Route::get('delete-about/{id}', 'deletediscount')->name('deletediscount');
    });

    Route::controller(VideoController::class)->as('video.')->group(function () {

        Route::get('/all-video',  'index')->name('all-video');
        Route::get('/add-video',  'add_video')->name('add-video');
        Route::post('/save-video',  'store')->name('store_video');
        Route::get('edit-video/{id}', 'edit')->name('editvideo');
        Route::get('delete-video/{id}', 'deletevideo')->name('deletevideo');
    });

    Route::controller(EventController::class)->as('event.')->group(function () {

        Route::get('/all-event',  'index')->name('all-event');
        Route::get('/add-event',  'add_event')->name('add-event');
        Route::post('/save-event',  'store')->name('store_event');
        Route::get('edit-event/{id}', 'edit')->name('editevent');
        Route::put('update-event/{id}', 'update')->name('update');
        Route::get('delete-event/{id}', 'deleteevent')->name('deleteevent');
    });

    Route::controller(DineinController::class)->as('dinein.')->group(function () {

        Route::get('/all-dinein',  'index')->name('all-dinein');
        Route::get('/add-dinein',  'add_dinein')->name('add-dinein');
        Route::post('/save-dinein',  'store')->name('store_dinein');
        Route::get('edit-dinein/{id}', 'edit')->name('editdinein');
        Route::put('update-dinein/{id}', 'update')->name('update');
        Route::get('delete-dinein/{id}', 'deletedinein')->name('deletedinein');
    });


    //Role Controller

});
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
