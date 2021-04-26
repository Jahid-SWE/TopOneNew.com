<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    protected $categories=[];
    public function index(){
      $this->categories =  Category::allCategories();
        return view('category.all-category', ['categories'=> $this->categories]);
    }
}
