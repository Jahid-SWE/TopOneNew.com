<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected static $categories=[];
    public static function allCategories(){
        self::$categories=[

           0 => [
               'categoryName' => 'Food',
               'categoryDescription' => 'Food colour and quality'
           ],
            1 => [
               'categoryName' => 'Food',
               'categoryDescription' => 'Food colour and quality'
           ],
            2 => [
               'categoryName' => 'Food',
               'categoryDescription' => 'Food colour and quality'
           ]
        ];
        return self::$categories;
    }
}
