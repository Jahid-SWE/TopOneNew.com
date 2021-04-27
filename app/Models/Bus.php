<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected static $buss=[];
    public static function busInfo(){
        self::$buss = [
           0=> [
               'type'=>'car',
               'size'=>'medium'
           ],
            0=> [
                'type'=>'car',
                'size'=>'medium'
            ],
        ];
        return self::$buss;
    }
}
