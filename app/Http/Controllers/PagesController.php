<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Got to index
     */
    public function home(){

        $status  = Auth::check();

        return view('pages.home', compact('status'));
    }

      /*
       * Go to about
       */
    public function about(){
        return view('pages.aboutus');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Go to help page
     */
    public function help(){
        return view('pages.help');
    }
}
