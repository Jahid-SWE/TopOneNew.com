<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected static $students=[];
    public  static function studentInfo(){
        self::$students =[
            0=>[
                'name'=>'jahid',
                'id'=>1,
                'course'=>'bangla'
            ],
            1=>[
                'name'=>'binto',
                'id'=>2,
                'course'=>'english'
            ]
        ];
        return self::$students;
    }
}
