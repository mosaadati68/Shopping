<?php

namespace App\Http\Controllers;

use Cart;
use App\Product;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $items = Cart::content();
        $tax = Cart::tax();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        $count = Cart::content()->count();
        return view('cart', compact('items', $items, 'tax', $tax, 'total', $total, 'subtotal', $subtotal, 'count', $count));
    }

    public function add(Request $request)
    {
        $product = Product::find($request->id);
        $cart = [];
        $cart['id'] = $product->id;
        $cart['name'] = $product->name;
        $cart['qty'] = 1;
        $cart['price'] = $product->price;
        $cart['options'] = ['image' => $product->image];
        $cartItem = Cart::add($cart);
        $items = Cart::content();
        $tax = Cart::tax();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        $count = Cart::content()->count();
        return response()->json([
            'cart' =>
                [
                    'items' => $items,
                    'count' => $count
                ],
            'message' => 'محصول به سبد خرید افزوده گردید'
        ], 200);
    }

    public function update(Request $request)
    {
        $result = Cart::update($request->rowId, $request->qty);
        $items = Cart::content();
        $tax = Cart::tax();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        $count = Cart::count();
        return response()->view('partials.cart',
            [
                'items' => $items,
                'tax' => $tax,
                'total' => $total,
                'subtotal' => $subtotal,
                'count' => $count
            ]);
    }

    public function delete(Request $request)
    {
        Cart::remove($request->rowId);
        $items = Cart::content();
        $tax = Cart::tax();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        $count = Cart::count();
        return response()->view('partials.cart',
            [
                'items' => $items,
                'tax' => $tax,
                'total' => $total,
                'subtotal' => $subtotal,
                'count' => $count
            ]);
    }
}