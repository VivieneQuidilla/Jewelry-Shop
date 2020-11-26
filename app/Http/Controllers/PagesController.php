<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Product;
use App\Transaction;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	$products = Product::all();

     return view('welcome', compact('products'));    	
    }
}
