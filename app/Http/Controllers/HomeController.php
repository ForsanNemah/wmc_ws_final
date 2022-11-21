<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HomeController extends Controller
{
    function index(){
    
        return view("index");
     }
     
     function changeLang($langcode){
      
        App::setLocale($langcode);
        session()->put("lang_code",$langcode);
        return redirect()->back();
    }  
}
