<?php

use App\Events\BookingNotificatin;
use App\Events\RealTimeMessage;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutFeatureController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\checkOutController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\ChefSocialmediaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DishSpecialController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventFeatureController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagesResturantController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\MenuCategoryController;
use App\Http\Controllers\MenuItemController;
// use App\Http\Controllers\NotificationController;
use App\Http\Controllers\OurFeatureController;
use App\Http\Controllers\TableController;
use App\Listeners\BookingNotification;
use App\Models\Admin;
use App\Models\Booking;
use App\Models\Notification;
// use App\Models\Notification;
use Illuminate\Support\Facades\Route;

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
//Home
Route::get('/', [HomeController::class, 'index']);

//Booking
Route::post('/booking/store', [BookingController::class, 'booking']);




//login
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [AdminController::class, 'is_login']);


Route::middleware(['auth:admin'])->group(function () {

    Route::get('/dashboard', function () {
        return view('aPanal/index');
    });

    // Admin
    Route::get('/dashboard/admin', [adminController::class, 'index']);
    Route::get('/dashboard/admin/create', [adminController::class, 'create']);
    Route::post('/dashboard/admin/store', [adminController::class, 'store']);
    Route::get('/dashboard/admin/{id}/edit', [adminController::class, 'edit']);
    Route::put('/dashboard/admin/{id}', [adminController::class, 'update']);
    Route::delete('/dashboard/admin/{id}', [adminController::class, 'delete']);

    // Booking
    Route::get('/dashboard/booking', [BookingController::class, 'index']);
    Route::get('/dashboard/booking/{id}/show', [BookingController::class, 'show']);
    Route::delete('/dashboard/booking/{id}', [BookingController::class, 'delete']);

    // Tables 
    Route::get('/dashboard/table', [TableController::class, 'index']);
    Route::get('/dashboard/table/create', [TableController::class, 'create']);
    Route::post('/dashboard/table/store', [TableController::class, 'store']);
    Route::get('/dashboard/table/{id}/edit', [TableController::class, 'edit']);
    Route::put('/dashboard/table/{id}', [TableController::class, 'update']);
    Route::delete('/dashboard/table/{id}', [TableController::class, 'delete']);

    //about
    Route::get('/dashboard/about', [AboutController::class, 'index']);
    Route::put('/dashboard/about/update', [AboutController::class, 'update']);
    Route::get('/dashboard/about/feature', [AboutFeatureController::class, 'index']);
    Route::get('/dashboard/about/feature/create', [AboutFeatureController::class, 'create']);
    Route::post('/dashboard/about/feature/store', [AboutFeatureController::class, 'store']);
    Route::get('/dashboard/about/feature/{id}/edit', [AboutFeatureController::class, 'edit']);
    Route::put('/dashboard/about/feature/{id}', [AboutFeatureController::class, 'update']);
    Route::delete('/dashboard/about/feature/{id}', [AboutFeatureController::class, 'delete']);
    //OurFeature
    Route::get('/dashboard/feature', [OurFeatureController::class, 'index']);
    Route::get('/dashboard/feature/create', [OurFeatureController::class, 'create']);
    Route::post('/dashboard/feature/store', [OurFeatureController::class, 'store']);
    Route::get('/dashboard/feature/{id}/edit', [OurFeatureController::class, 'edit']);
    Route::put('/dashboard/feature/{id}', [OurFeatureController::class, 'update']);
    Route::delete('/dashboard/feature/{id}', [OurFeatureController::class, 'delete']);

    /////////////////// Menu ////////////////
    // Menu Category
    Route::get('/dashboard/menu', [MenuCategoryController::class, 'index']);
    Route::get('/dashboard/menu/create', [MenuCategoryController::class, 'create']);
    Route::post('/dashboard/menu/store', [MenuCategoryController::class, 'store']);
    Route::put('/dashboard/menu/{id}', [MenuCategoryController::class, 'update']);
    Route::delete('/dashboard/menu/{id}', [MenuCategoryController::class, 'delete']);
    // Menu Item
    Route::get('/dashboard/menu/item', [MenuItemController::class, 'index']);
    Route::get('/dashboard/menu/item/create', [MenuItemController::class, 'create']);
    Route::post('/dashboard/menu/item/store', [MenuItemController::class, 'store']);
    Route::get('/dashboard/menu/item/{id}/edit/{category_id}', [MenuItemController::class, 'edit']);
    Route::put('/dashboard/menu/item/{id}', [MenuItemController::class, 'update']);
    Route::delete('/dashboard/menu/item/{id}', [MenuItemController::class, 'delete']);



    // Dish Special
    Route::get('/dashboard/dish', [DishSpecialController::class, 'index']);
    Route::get('/dashboard/dish/create', [DishSpecialController::class, 'create']);
    Route::post('/dashboard/dish/store', [DishSpecialController::class, 'store']);
    Route::get('/dashboard/dish/{id}/edit', [DishSpecialController::class, 'edit']);
    Route::put('/dashboard/dish/{id}', [DishSpecialController::class, 'update']);
    Route::delete('/dashboard/dish/{id}', [DishSpecialController::class, 'delete']);


    //////////////////////////// Events
    //Event 
    Route::get('/dashboard/event', [EventController::class, 'index']);
    Route::get('/dashboard/event/create', [EventController::class, 'create']);
    Route::post('/dashboard/event/store', [EventController::class, 'store']);
    Route::get('/dashboard/event/{id}/edit', [EventController::class, 'edit']);
    Route::put('/dashboard/event/{id}', [EventController::class, 'update']);
    Route::delete('/dashboard/event/{id}', [EventController::class, 'delete']);
    //Feature
    Route::get('/dashboard/event/feature', [EventFeatureController::class, 'index']);
    Route::get('/dashboard/event/feature/{id}/create', [EventFeatureController::class, 'create']);
    Route::post('/dashboard/event/feature/store', [EventFeatureController::class, 'store']);
    Route::get('/dashboard/event/feature/{id}/edit', [EventFeatureController::class, 'edit']);

    Route::put('/dashboard/event/feature/{id}', [EventFeatureController::class, 'update']);
    Route::delete('/dashboard/event/feature/{id}', [EventFeatureController::class, 'delete']);




    //images
    Route::get('/dashboard/images', [ImagesResturantController::class, 'index']);
    Route::get('/dashboard/images/create', [ImagesResturantController::class, 'create']);
    Route::post('/dashboard/images/store', [ImagesResturantController::class, 'store']);
    Route::put('/dashboard/images/{id}', [ImagesResturantController::class, 'update']);
    Route::delete('/dashboard/images/{id}', [ImagesResturantController::class, 'delete']);



    /////////////// Chefs
    //Chef
    Route::get('/dashboard/chef', [ChefController::class, 'index']);
    Route::get('/dashboard/chef/create', [ChefController::class, 'create']);
    Route::post('/dashboard/chef/store', [ChefController::class, 'store']);
    Route::get('/dashboard/chef/{id}/edit', [ChefController::class, 'edit']);
    Route::put('/dashboard/chef/{id}', [ChefController::class, 'update']);
    Route::delete('/dashboard/chef/{id}', [ChefController::class, 'delete']);
    //ChefSocilaMedia
    Route::get('/dashboard/chef/social/{chefId}', [ChefSocialmediaController::class, 'index']);
    Route::get('/dashboard/chef/social/create/{chef_id}', [ChefSocialmediaController::class, 'create']);
    Route::post('/dashboard/chef/social/store', [ChefSocialmediaController::class, 'store']);
    Route::get('/dashboard/chef/social/{id}/edit', [ChefSocialmediaController::class, 'edit']);
    Route::put('/dashboard/chef/social/{id}', [ChefSocialmediaController::class, 'update']);
    Route::delete('/dashboard/chef/social/delete/{id}', [ChefSocialmediaController::class, 'delete']);


    //information
    Route::get('/dashboard/information', [InformationController::class, 'index']);
    Route::get('/dashboard/information/create', [InformationController::class, 'create']);
    Route::post('/dashboard/information/store', [InformationController::class, 'store']);
    Route::put('/dashboard/information/{id}', [InformationController::class, 'update']);
    Route::delete('/dashboard/information/{id}', [InformationController::class, 'delete']);

    // contact
    Route::get('/dashboard/messages', [ContactController::class, 'index']);
    Route::get('/contact/show/{messageId}', [ContactController::class, 'Show']);
    Route::delete('/contact/{messageId}', [ContactController::class, 'delete']);





    // logout
    Route::get('logout', [AdminController::class, 'logout']);
});


//Contact
Route::get('/dashboard/contact', [NotificationController::class, 'index']);
Route::post('/contact/store', [ContactController::class, 'store']);

//checkOut
Route::get('/checkOut/{id}', [checkOutController::class, 'checkOut']);
Route::post('/paiding/{id}', [checkOutController::class, 'paiding']);

//  Route::controller(checkOutController::class)
//     ->prefix('paypal')
//     ->group(function () {
//         Route::view('payment', 'aPanal.payapal.index')->name('create.payment');
//         Route::get('handle-payment', 'handlePayment')->name('make.payment');
//         Route::get('cancel-payment', 'paymentCancel')->name('cancel.payment');
//         Route::get('payment-success', 'paymentSuccess')->name('success.payment');
//     });
Route::get('create-transaction', [checkOutController::class, 'createTransaction'])->name('createTransaction');
Route::get('process-transaction', [checkOutController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [checkOutController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [checkOutController::class, 'cancelTransaction'])->name('cancelTransaction');


Route::get('event', function () {

    $booking = Booking::create([
        'name' => 'said',
        'email' => 'saidsayed9061@gmail.com',
        'phone' => '156155',
        'ofPeople' => '2',
        'message' => 'cacasc',
        'startDateTime' => '2023-08-17 19:09:56',
        'endDateTime' => '2023-08-17 19:09:56',
        'table_id' => '1',
        'new' => 'new'
    ]);
    event(new RealTimeMessage('test'));
    dd('done');
});
// Route::get('notification', function () {

//     $notification = Notification::count();
//     dd($notification);
// });
