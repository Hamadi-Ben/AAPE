<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    function index() {
        $products = Product::all();
        if (!$products)
        return view('404');
        return view('catalogue', ['products' => $products ]);
    }

    function store(Request $request) {
        $product = new Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->file = $request->file;
        $product->stock = $request->stock;
        $product->price = $request->price;

        $product->save();

        return redirect('/products');
    }

    function show($id) {
        $product = Product::find($id);
        if (!$product)
            return view('404');
        return view('products', ['products' => $product]);
    }

    function update() {

    }

    function destroy() {

    }
}
