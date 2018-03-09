<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function index($name,$nickname=null){
    	$name = ucfirst($name);
    	if($nickname){
       return "bienvenido {$name}, tu apodo es {$nickname}";
   }else{
       return "bienvenido {$name}, no tienes apodo";
   }
    }
}
