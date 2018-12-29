<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProfile;
use App\Product;
use App\Seller;
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
        $products = Product::Paginate(4);
        $lastProducts = Product::orderBy('created_at', 'DESC')->limit(4)->get();
        return view('home', [
            'products' => $products,
            'wishlist' => $wishlist ? $wishlist->toArray() : $wishlist,
            'lastProducts' => $lastProducts
        ]);
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
