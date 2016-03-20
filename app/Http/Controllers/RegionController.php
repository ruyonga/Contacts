<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RegionController extends Controller
{
    //
    public function addRegion(){

        return view('regions.addRegion');
    }
}
