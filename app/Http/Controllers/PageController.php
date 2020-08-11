<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homefun($value=''){
    		return view('homepage');
    }
      public function aboutfun($value=''){
    	return view('aboutpage');
    }
      public function contactfun($value=''){
    	return view('contactpage');
    }
     public function postfun($value=''){
    	return view('postpage');
    }
}
