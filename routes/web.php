<?php


use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Artisan;

Route::get('/clear', function () {
    \Artisan::call('optimize:clear');
    echo "Ok";

});


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
Route::get('/sign-in', 'Front\HomeController@signIn');
Route::get('/sign-up', 'Front\HomeController@signUp');
Route::get('/', 'Front\HomeController@index');

Route::get('/terms-condition', 'Front\HomeController@terms');
Route::get('/privacy-policy', 'Front\HomeController@privacy');
Route::get('/how-it-work', 'Front\HomeController@howItWork');

Route::get('/donate', 'Front\HomeController@donate');
Route::post('/donateSubmit', 'DonationController@donateSubmit')->name('donateSubmit');
Route::post('stripe', 'DonationController@stripePost')->name('stripe.post');
Route::get('paypal/success', 'DonationController@paypalSuccess')->name('paypalSuccess');
Route::get('paypal/failed', 'DonationController@paypalFailed')->name('paypalFailed');


Route::get('/product', 'Front\HomeController@product');
Route::get('/product-details', 'Front\HomeController@productDetails');
Route::get('/product-cart', 'Front\HomeController@productCart');
Route::get('/marketplace', 'Front\HomeController@marketPlace');
Route::get('/marketplace/product', 'Front\HomeController@marketPlaceProduct');

Route::get('/brand-advocate', 'Front\OtherController@brandAdvocate');
Route::get('/job-oppertunities', 'Front\OtherController@jobOppertunities');
Route::get('/referral-code', 'Front\OtherController@referral');
Route::get('/membership-plan', 'Front\OtherController@membershipPlan');

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group.!
|
*/

Route::group(
    ['prefix' => 'jobs'],
    function () {
        Route::view('/', 'jobs.index')->name('jobs.index');
        Route::view('/saved', 'jobs.saved')->name('jobs.saved');
        Route::view('/general_info', 'jobs.general_info')->name('jobs.general_info');
        Route::view('/assessment', 'jobs.assessment')->name('jobs.assessment');
        Route::view('/connects', 'jobs.connects')->name('jobs.connects');
    });


Route::prefix('admin-panel')->name('admin.')->group(function () {

    Route::resource('services', 'ServiceController');
});


Route::group(['prefix' => 'admin-panel'], function () {

    Route::view('/', 'admin.index')->name('admin.index');
    Route::view('/payments', 'admin.payments')->name('admin.payments');
    Route::view('/account', 'admin.account')->name('admin.account');
    Route::view('/connects', 'admin.connects')->name('admin.connects');
    Route::view('/products', 'admin.products')->name('admin.products');


    Route::view('/reports', 'admin.reports')->name('admin.reports');
    Route::view('/bookings', 'admin.bookings')->name('admin.bookings');

    Route::view('/edit-profile', 'admin.pages.edit-profile')->name('admin.edit.profile');
    Route::view('/bookings/add-payment', 'admin.pages.add-payment')->name('admin.payment.add');
    Route::view('/bookings/show-event', 'admin.pages.show_event')->name('admin.event.show');
    Route::view('/products/add-product', 'admin.pages.add-product')->name('admin.add.product');
    Route::view('/products/products-page-with-products', 'admin.pages.products-page-with-products')->name('admin.products.page.with.products');
});

Route::group(['prefix' => 'customer'], function () {

    Route::view('/', 'customer.index')->name('customer.index');
    Route::view('/payments', 'customer.payments')->name('customer.payments');
    Route::view('/account', 'customer.account')->name('customer.account');
    Route::view('/connects', 'customer.connects')->name('customer.connects');
    Route::view('/products', 'customer.products')->name('customer.products');
    Route::view('/services', 'customer.services')->name('customer.services');
    Route::view('/reports', 'customer.reports')->name('customer.reports');
    Route::view('/bookings', 'customer.bookings')->name('customer.bookings');
    Route::view('/add-services', 'customer.pages.add-service')->name('customer.add.service');
    Route::view('/edit-profile', 'customer.pages.edit-profile')->name('customer.edit.profile');
    Route::view('/bookings/add-payment', 'customer.pages.add-payment')->name('customer.payment.add');
    Route::view('/bookings/show-event', 'customer.pages.show_event')->name('customer.event.show');
    Route::view('/products/add-product', 'customer.pages.add-product')->name('customer.customer.add.product');
    Route::view('/products/products-page-with-products', 'customer.pages.products-page-with-products')->name('products.page.with.products');
});


Route::get('message', 'MessageController@index');
