<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 function ShowHome(){

    $NewHeasLine="<script> alert('attack'); </script>";

   // return view('Home', ['NewHeasLineKey'=>'$NewHeasLine']);

     return view('Home')->with('User',$NewHeasLine);
 }
}
