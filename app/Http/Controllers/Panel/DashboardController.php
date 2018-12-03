<?php

namespace App\Http\Controllers\Panel;

use App\Address;
use App\City;
use App\Order;
use App\Profile;
use App\Province;
use App\User;
use App\Wishlist;
use App\Product;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('panel.dashboard');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function profile()
    {
        $profile = Profile::where('user_id', Auth::id())->first();
        $orders = Order::where('user_id', Auth::id())->orderBy('id', 'desc')->take(2)->get();
        DB::table('users')
            ->latest()
            ->first();
        $lastWishlists = Wishlist::where('user_id', Auth::id())->get();
        $wishlists = Collection::make([]);
        foreach ($lastWishlists as $lastWishlist) {
            $product = Product::where('id', $lastWishlist->product_id)->get();
            $wishlists->push($product);
        }
        return view('panel.profile', ['profile' => $profile, 'wishlists' => $wishlists, 'orders' => $orders]);
    }

    public function addresses()
    {
        $addresses = Address::where('user_id', Auth::id())->orderBy('address', 'ASC')->get();
        $provinces = Province::all();
        return view('panel.addresses', compact('addresses', 'provinces'));
    }

    public function saveAddress(Request $request)
    {
        $city = City::where('id', $request->get('city'))->get();
        $provice = Province::where('id', $request->get('state_province'))->get();
        $address = new Address();
        $address->user_id = Auth::id();
        $address->full_name_transferee = $request->get('full_name_transferee');
        $address->contact_no = $request->get('contact_no');
        $address->state_province = $provice[0]->name;
        $address->city = $city[0]->name;
        $address->country = 'ایران';
        $address->address = $request->get('address');
        $address->zip_code = $request->get('zip_code');
        $address->save();
        return response()->json($address);
    }

    public function getCity($province)
    {
        $cities = City::where('province_id', $province)->orderBy('name', 'ASC')->get();
        $city = new City();
        $city->id = 0;
        $city->province_id = 0;
        $city->name = 'شهر مورد نظر خود را انتخاب نمایید...';
        $cities = $cities->toArray();
        array_unshift($cities, $city);
        return response()->json($cities);
    }

    public function comments()
    {
        return view('panel.comments');
    }

    public function favorites()
    {
        $getWishlists = Wishlist::where('user_id', Auth::id())->get();
        $wishlists = Collection::make([]);
        foreach ($getWishlists as $wishlist) {
            $product = Product::where('id', $wishlist->product_id)->get();
            $wishlists->push($product);
        }
//        dd($wishlists);
        return view('panel.favorites', compact('wishlists'));
    }

    public function giftcards()
    {
        return view('panel.giftcards');
    }

    public function notification()
    {
        return view('panel.notification');
    }

    public function notifierlist()
    {
        return view('panel.notifierlist');
    }

    public function orders()
    {
        $orders = DB::table('orders')
            ->where('user_id', Auth::id())->get();
        return view('panel.orders', compact('orders'));
    }

//    public function getOrders()
//    {
//        $orders = DB::table('orders')
//            ->where('user_id', Auth::id())->get();
//        return view('panel.orders'$orders);
//    }

    public function getOrder($order_number)
    {
        $orders = DB::table('orders')
            ->where('order_number', $order_number)
            ->select('cart')
            ->get();
        return response()->json($orders->toArray(), 200);
    }

    public function orders_return()
    {
        return view('panel.orders-return');
    }

    public function personal_info()
    {
        return view('panel.personal-info');
    }

    public function thank_you()
    {
        return view('ThankYou');
    }
}
