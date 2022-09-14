<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 function ShowHome(){

   // $NewHeasLine="<script> alert('attack'); </script>";

   // return view('Home', ['NewHeasLineKey'=>'$NewHeasLine']);

   $Data=array("Bangladesh","India","Canada","America");
      return view('Home')->with(['DataKey'=>$Data]);

     
    //return view('Home', ['DataKey'=>'$Data']);
 }
}
