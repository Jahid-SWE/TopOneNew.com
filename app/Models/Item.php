<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected static $items=[];
    public static function allItems(){
        self::$items = [
            0 => [
                'itemId'=> 1,
                'itemName'=>'Clothes',
                'itemQuantity'=>2
            ],

            1 => [
                'itemId'=> 2,
                'itemName'=>'Clothes',
                'itemQuantity'=>3
            ],

        ];
        return self::$items;
    }
}
