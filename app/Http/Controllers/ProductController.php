<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all()->sortBy('id');

        return view('product.index', [
            'products' => $products
        ]);
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('product.show', [
            'product' => $product,
        ]);
    }

    public function getProductsByCategory($categoryId)
    {
        $products = Product::where('category_id', $categoryId)->get();
        $category = Category::find($categoryId);

        return view('product.product_by_category', [
            'products' => $products,
            'category' => $category,
        ]);
    }
}
