<?php

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

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/product/{slug}', 'ProductController@show')->name('product.show');
Route::post('/ratingProduct', 'ProductController@ratingProduct')->name('product.rating');
Route::get('/addWishlist/{id}', 'WishlistController@addWishlist')->name('wishlist.store');
Route::post('/newsletter', 'NewsletterController@store');
//Cart Routes
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/cart/add/{id}', 'CartController@add')->name('cart.add');
Route::post('/cart/update', 'CartController@update')->name('cart.update');
Route::post('/cart/delete', 'CartController@delete')->name('cart.delete');
Route::post('/cart/destroy', 'CartController@destroy')->name('cart.destroy');

Route::get('/getCity/{province_id}', 'Panel\DashboardController@getCity')->name('getCity');
Route::post('/address', 'Panel\DashboardController@saveAddress')->name('save.address');

Route::group(['middleware' => 'auth:web'], function () {
    $this->get('/shipping', 'Order\OrderController@shipping')->name('shipping.order');
    $this->post('/checkout', 'Order\OrderController@checkout')->name('checkout.order');
    $this->get('/payment', 'Order\OrderController@show_payment')->name('payment');

});

Route::get('/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
//Route::get('search', 'SearchController@index')->name('search');
Route::post('search', 'SearchController@search')->name('searchProduct');
Route::get('autocomplete', 'SearchController@autocomplete')->name('autocomplete');

Route::group(['prefix' => 'panel','middleware' => 'auth:web'], function () {
    $this->post('/checkout', 'Order\OrderController@checkout')->name('checkout');
//    $this->get('/payment/order/{order_id}', 'Order\OrderController@payment')->name('payment.order');
    $this->get('/payment/checker', 'Order\OrderController@checker')->name('checker');

    $this->get('/orders/delete', 'Order\OrderController@delete')->name('delete.order');
    $this::get('/profile/edit', 'ProfileController@editProfile')->name('edit.profile');
    $this::post('/profile/save', 'ProfileController@saveProfile')->name('save.profile');
    $this::post('/uploadAvatar', 'ProfileController@uploadAvatar')->name('uploadAvatar');

    $this::get('/profile', 'Panel\DashboardController@profile')->name('profile');
    $this::get('/addresses', 'Panel\DashboardController@addresses')->name('addresses');
    $this::get('/comments', 'Panel\DashboardController@comments')->name('comments');
    $this::get('/favorites', 'Panel\DashboardController@favorites')->name('favorites');
    $this::get('/giftcards', 'Panel\DashboardController@giftcards')->name('giftcards');
    $this::get('/notification', 'Panel\DashboardController@notification')->name('notification');
    $this::get('/notifierlist', 'Panel\DashboardController@notifierlist')->name('notifierlist');
    $this::get('/orders', 'Panel\DashboardController@orders')->name('orders');
    $this::get('/getOrders', 'Panel\DashboardController@getOrders')->name('getOrders');
    $this::get('/getOrder/{order_id}', 'Panel\DashboardController@getOrder')->name('getOrder');
    $this::get('/orders_return', 'Panel\DashboardController@orders_return')->name('orders_return');
    $this::get('/personal-info', 'Panel\DashboardController@personal_info')->name('personal_info');
    $this::get('/thank-you', 'Panel\DashboardController@thank_you')->name('thank_you');

//    Product Routes
    $this::Resource('/products', 'Panel\ProductController');
    $this::post('/ProductImagesUpload', 'Panel\ProductController@ProductImagesUpload')->name('ProductImagesUpload');
    $this::get('/getCategoryName/{category_name}', 'Panel\ProductController@getCategoryName')->name('getCategoryName');

});
