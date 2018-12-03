<?php

namespace App\Providers;

use App\Observers\OrderObserver;
use App\Order;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Breadcrumbs::for('home', function ($trail) {
            $trail->push('صفحه اصلی', route('home'));
        });
        Breadcrumbs::for('contact', function ($trail) {
            $trail->parent('home');
            $trail->push('تماس با ما', route('contact'));
        });
        Breadcrumbs::for('cart', function ($trail) {
            $trail->parent('home');
            $trail->push('سبد خرید', route('cart'));
        });
        Breadcrumbs::for('product', function ($trail, $product) {
            $trail->parent('home');
            $trail->push($product->slug, route('product.show', $product));
        });

        //Panel Breadcrumbs

        Breadcrumbs::for('dashboard', function ($trail) {
            $trail->push('پنل کاربری', route('dashboard'));
        });
        Breadcrumbs::for('addresses', function ($trail) {
            $trail->parent('dashboard');
            $trail->push('آدرس ها', route('addresses'));
        });
        Breadcrumbs::for('orders', function ($trail) {
            $trail->parent('dashboard');
            $trail->push('همه سفارش ها', route('orders'));
        });

        $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
