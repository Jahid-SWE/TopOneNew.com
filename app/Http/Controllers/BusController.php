<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    protected $bus=[];
    public  function busInfo(){
        $this->bus=Bus::busInfo();
        return view('bus.bus', ['bus'=>$this->bus]);

    }
}
