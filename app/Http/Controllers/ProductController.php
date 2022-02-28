<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    public function show()
    {
        $products = Product::all();
        return view('pages.products', compact('products'));
    }

    public function insert(Request $request)
    {
        $product = new Product;
        $product->title = request('title');
        $product->quantity = request('quantity');
        $product->accounting_type = request('accounting_type');
        $product->tax = request('tax');
        $product->buying_price = request('buying_price');
        $product->gain_rate = request('gain_rate');
        $product->gain_rate = request('selling_price');
        $product->buying_price = request('retail_price');
        $product->description = request('description');
        $product->save();
        return back();
    }

    public function update(Request $request, Product $product)
    {
        $product->title = request('title');
        $product->quantity = request('quantity');
        $product->accounting_type = request('accounting_type');
        $product->tax = request('tax');
        $product->buying_price = request('buying_price');
        $product->gain_rate = request('gain_rate');
        $product->selling_price = request('selling_price');
        $product->retail_price = request('retail_price');
        $product->description = request('description');
        $product->save();
        return back();
    }

    public function delete(Request $request, Product $product)
    {
        $product->delete();
        return back();
    }
}
