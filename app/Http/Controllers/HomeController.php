<?php

namespace App\Http\Controllers;

use App\Product;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            $wishlist = Auth::user()->wishlist()->pluck('product_id');
        } else {
            $wishlist = Collection::make();
        }
        $products = Product::paginate(12);
        return view('home', ['products' => $products, 'wishlist' => $wishlist ? $wishlist->toArray() : $wishlist]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function test()
    {
        $user = \Illuminate\Support\Facades\Auth::user();
        $user->givePermissionTo('edit products');
//        $user->syncRoles(['admin']);
    }
}
