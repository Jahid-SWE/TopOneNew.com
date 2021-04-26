<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
      protected static  $products=[];

      public static function allProducts(){
          self::$products =[
              0 => [
                  'id'   => 1,
                  'name'   => 'Product one',
                  'price'   => '1000',
                  'description'   => 'Product One Description',
               ],
              1 => [
                  'id'   => 2,
                  'name'   => 'Product two',
                  'price'   => '200',
                  'description'   => 'Product two Description',
              ],
              2 => [
                  'id'   => 3,
                  'name'   => 'Product three',
                  'price'   => '3000',
                  'description'   => 'Product three Description',
              ],

          ];
          return self::$products ;

      }
}
