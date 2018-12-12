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

    public function add($id)
    {
        $product = Product::find($id);
        $cart = [];
        $cart['id'] = $product->id;
        $cart['name'] = $product->name;
        $cart['qty'] = 1;
        $cart['price'] = $product->price;
        $cart['options'] = ['image' => $product->image, 'color' => 'سفید'];
        $cartItem = Cart::add($cart);
        $items = Cart::content();
        $tax = Cart::tax();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        $count = Cart::content()->count();
        $cartMenu = view('partials.cartMenu')->render();
        return response(
            [
                'count' => $count,
                'cartMenu' => $cartMenu,
                'message' => 'محصول به سبد خرید افزوده گردید'
            ]
        );
    }

    public function update(Request $request)
    {
        $result = Cart::update($request->rowId, $request->qty);
        $cart = view('partials.cart')->render();
        $cartMenu = view('partials.cartMenu')->render();
        return response(
            [
                'cart' => $cart,
                'cartMenu'=>$cartMenu,
                'message' => 'تغییرات با موفقیت ثبت گردید.'
            ]
        );
    }

    public function delete(Request $request)
    {
        Cart::remove($request->rowId);
        $cart = view('partials.cart')->render();
        return response(
            [
                'cart' => $cart,
                'message' => 'تغییرات با موفقیت ثبت گردید.'
            ]
        );
    }
}