<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    protected $items=[];
    public function index(){
       $this->items= Item::allItems();
        return view('item.item', ['items' => $this->items]);
    }
}
