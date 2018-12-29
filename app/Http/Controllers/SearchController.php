<?php

namespace App\Http\Controllers;

use App\Product;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    {
        $data = Product::search($request->q)
            ->get();
        return response()->json($data);
    }

    public function search(Request $request)
    {
        if (Auth::check()) {
            $wishlist = Auth::user()->wishlist()->pluck('product_id');
            if ($request->has('q')) {
                $products = Product::search($request->q)->paginate(4);
                $lastProducts = Product::orderBy('created_at', 'DESC')->limit(4)->get();
            } else {
                $products = Product::paginate(4);
                $lastProducts = Product::orderBy('created_at', 'DESC')->limit(4)->get();
            }
        } else {
            if ($request->has('q')) {
                $products = Product::search($request->q)->paginate(4);
                $lastProducts = Product::orderBy('created_at', 'DESC')->limit(4)->get();
            } else {
                $products = Product::paginate(4);
                $lastProducts = Product::orderBy('created_at', 'DESC')->limit(4)->get();
            }
            $wishlist = Collection::make();
        }
        return view('search', [
            'products' => $products,
            'wishlist' => $wishlist ? $wishlist->toArray() : $wishlist,
            'lastProducts' => $lastProducts
        ]);
    }
}
