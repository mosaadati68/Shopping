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
Route::get('/cart', 'CartController@index')->name('cart');
Route::post('/cart/add', 'CartController@add')->name('cart.add');
Route::post('/cart/update', 'CartController@update')->name('cart.update');
Route::post('/cart/delete', 'CartController@delete')->name('cart.delete');
Route::post('/cart/destroy', 'CartController@destroy')->name('cart.destroy');

Route::get('/getCity/{province_id}', 'Panel\DashboardController@getCity')->name('getCity');
Route::post('/address', 'Panel\DashboardController@saveAddress')->name('save.address');

Route::post('/newsletter', 'NewsletterController@store');

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

Route::group(['middleware' => 'auth:web'], function () {
    $this->get('/shipping', 'Order\OrderController@shipping')->name('shipping.order');
    $this->post('/checkout', 'Order\OrderController@checkout')->name('checkout.order');
    $this->get('/payment', 'Order\OrderController@show_payment')->name('payment');

});

$this::get('/panel', 'Panel\DashboardController@index')->name('dashboard');


Route::get('/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::get('/location', function () {
//    $location = GeoIP::getLocation('10.56.90.98');
//    dd($location);
    $cartItem = [];
    $carts = Cart::content();
});

//Route::get('search', 'SearchController@index')->name('search');
Route::post('search', 'SearchController@search')->name('searchProduct');
Route::get('autocomplete', 'SearchController@autocomplete')->name('autocomplete');


Route::get('test', 'HomeController@test')->name('test');

Route::get('invoice', function () {
//    require_once 'C:\xampp\htdocs\Shopping\public\fonts\IRANSansWeb_Num\ttf';
    $defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
    $fontDirs = $defaultConfig['fontDir'];

    $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
    $fontData = $defaultFontConfig['fontdata'];

    $mpdf = new \Mpdf\Mpdf([
        'fontDir' => array_merge($fontDirs, [
            'C:\xampp\htdocs\Shopping\public\fonts\IRANSansWeb_Num\ttf',
        ]),
        'fontdata' => $fontData + [
                "IRANSans" => [
                    'R' => "IRANSansWeb.otf",
                    'useOTL' => 0xFF,
                ]
            ],
        'default_font' => 'IRANSans'
    ]);
    $mpdf->WriteHTML(Illuminate\Support\Facades\View::make('invoices.invoice')->render());
    $output = $mpdf->Output();

//    $pdf = new \App\invoice\Invoice();
//    $output = $pdf->generate();
    \Illuminate\Support\Facades\Storage::put('invoice.pdf', $output);
});

//Route::get('test', function () {
//    event(new App\Events\StatusLiked('Someone'));
//    return "Event has been sent!";
//    $product = \App\Product::where('id',1)->first();
//    Notification::send(\App\User::all(), new \App\Notifications\NewMessage($product));
//    $role = \Spatie\Permission\Models\Role::create(['name' => 'admin']);
//    $permission = \Spatie\Permission\Models\Permission::create(['name' => 'create products']);
//    $permission = \Spatie\Permission\Models\Permission::create(['name' => 'delete products']);
//    $permission = \Spatie\Permission\Models\Permission::create(['name' => 'update products'])
//    $permissions = $user->getAllPermissions();
//    $role->syncPermissions($permissions);
//});
Route::get('pusher', function () {
    $product = App\Product::find(1);
    $image = $product->images;
    dd($image);
});
