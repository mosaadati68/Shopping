<?php

namespace App\Http\Controllers\Panel;

use App\File;
use App\Notifications\NewMessage;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('panel.products.products', compact('products'));
    }

    public function ProductImagesUpload(Request $request)
    {
        return response($request->get('id'));
        $image = $request->file('file');
        $user = Auth::user();
        $ImageName = $user->id . '_PRODUCT_' . $id . '_' . time() . '.' . $image->getClientOriginalExtension();
        $product = Product::find($id);
        $path = '/images/products/' . $ImageName;
        $product->images()->create([
            'path' => $path
        ]);
        $image->move('images/products/', $ImageName);
        return response(['success' => 'تصویر با موفقیت آپلود گردید.', 'path' => '/images/products/' . $ImageName, 'product_id' => $id]);
    }

    public function getCategoryName($category_name)
    {
        $category = Category::where('name', $category_name)->first();
        return response(['category_id' => $category['id']]);
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
        $product = Product::create([
            'category_id' => $request->get('add_product_category'),
            'sku' => str_slug($request->get('add_product_name')),
            'slug' => str_slug($request->get('add_product_name')),
            'excerpt' => str_limit($request->get('add_product_description'), 50),
            'name' => $request->get('add_product_name'),
            'price' => $request->get('add_price'),
            'currency' => 'تومان',
            'rate' => $request->get('add_product_rate'),
            'featured' => $request->get('add_featured'),
            'stock_status' => 1,
            'description' => $request->get('add_product_description'),
            'stock_count' => $request->get('add_product_stock_count'),
        ]);
        return response()->json(['product' => $product]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', $id)->first();
        return response()->json($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        return response()->json($product);
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
        $product = Product::where('id', $id)->first();
        $productImage = $product->images->values()->last();
        return response($productImage);
//        $product->price = $request->get('form_price');
//        $product->category_id = $request->get('form_product_category');
//        $product->description = $request->get('form_product_description');
//        $product->name = $request->get('form_product_name');
//        $product->rate = $request->get('form_product_rate');
//        $product->stock_count = $request->get('form_product_stock_count');
//        $product->image = $productImage.path;
//        $product->save();
//        return response()->json('محصول با موفقیت آپدیت گردید.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json('محصول با موفقیت حذف گردید.');
    }
}
