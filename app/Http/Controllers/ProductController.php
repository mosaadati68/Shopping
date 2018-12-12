<?php

namespace App\Http\Controllers;

use App\Product;
use App\Rate;
use function Couchbase\defaultDecoder;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /*
     * Rating Product
     */
    public function ratingProduct(Request $request)
    {
        $UserProduct = Rate::where('product_id', $request->productId)
            ->where('user_id', Auth::user()->id)->exists();
        if ($UserProduct) {
            $product = Product::find($request->productId);
            $rateing = Rate::where('product_id', $request->productId)
                ->where('user_id', Auth::user()->id)->first();
            $rateing = Rate::find($rateing->id);
            $rateing->rate = $request->rate + 1;
            $rateing->save();
            $avg = Rate::where('product_id', $request->productId)->pluck('rate')->avg();
            $product->rate = $avg;
            $product->save();
        } else {
            $rate = new Rate();
            $rate->rate = $request->rate + 1;
            $rate->product_id = $request->productId;
            $rate->user_id = Auth::user()->id;
            $rate->save();
        }
        $products = Product::paginate(12);
        $wishlist = Auth::user()->wishlist()->pluck('product_id');

        $productlist = view('partials.productlist',[
            'products' => $products,
            'wishlist' => $wishlist ? $wishlist->toArray() : $wishlist
        ])->render();

        return response(                    [
            'message' => 'رتبه شما ثبت گردید.',
            'isLogin' => true,
            'productlist'=>$productlist,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($slug)
    {
//        Session::flush();
        $product = Product::findBySlug($slug);
        if (Session::exists('interestedProduct')) {
            $getSessionProduct = Session::get('interestedProduct');
            if (!$getSessionProduct->contains($product)) {
                $getSessionProduct->push($product);
            }
        } else {
            $interestedProduct = Collection::make([$product]);
            Session::put('interestedProduct', $interestedProduct);
        }
        $interested = Session::get('interestedProduct');//
        return view('product', ['product' => $product, 'interested' => $interested]);
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
