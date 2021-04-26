<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    protected $products=[];
    public function index(){
        $this->products = Product::allProducts();

        return view('product.all', ['products' => $this->products]);
    }
}
