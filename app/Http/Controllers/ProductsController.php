<?php

namespace App\Http\Controllers;

use App\Product;
use App\Transaction;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    protected $table = 'products';
     //Display
    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

// Show individually
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
}
