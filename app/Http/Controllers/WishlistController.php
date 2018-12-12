<?php

namespace App\Http\Controllers;

use App\Wishlist;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addWishlist(Request $request, $id)
    {
        if (Auth::check()) {
            $product = Product::find($id);
            $findWishlist = Wishlist::findById($id);
            if ($findWishlist) {
                $findWishlist->delete();
                $products = Product::paginate(12);
                $wishlist = Auth::user()->wishlist()->pluck('product_id');
                $productlist = view('partials.productlist',[
                    'products' => $products,
                    'wishlist' => $wishlist ? $wishlist->toArray() : $wishlist
                ])->render();

                return response(                    [
                    'message' => 'محصول از لیست علاقه مندی حذف گردید.',
                    'status' => false,
                    'isLogin' => true,
                    'productlist'=>$productlist
                ]);

            } else {
                $wishlist = new Wishlist;
                $wishlist->user_id = Auth::user()->id;
                $wishlist->product_id = $product->id;
                $wishlist->save();
                $products = Product::paginate(12);
                $wishlist = Auth::user()->wishlist()->pluck('product_id');
                $productlist = view('partials.productlist',[
                    'products' => $products,
                    'wishlist' => $wishlist ? $wishlist->toArray() : $wishlist
                ])->render();

                return response(                    [
                        'message' => 'محصول از لیست علاقه مندی حذف گردید.',
                        'status' => true,
                        'isLogin' => true,
                        'productlist'=>$productlist
                    ]);
            }
        } else {
            return response(['isLogin' => false]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
