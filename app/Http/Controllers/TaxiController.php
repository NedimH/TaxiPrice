<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Taxi;

class TaxiController extends Controller
{
    public function trazi($drzava, $grad)
    {
        $izlaz = taxi::where('COUNTRY',$drzava)->where('CITY_NAME_ANSI', $grad)->first();

        return view('taxi.showtaxi')->with('podaci',$izlaz);
    }
}
