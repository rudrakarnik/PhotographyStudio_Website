<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class assignController extends Controller
{
    function index()
   {
       return view('assign.home');
   }

   function about()
   {
       return view('assign.about');
   }

   function service()
   {
       return view('assign.service');
   }

   function contact()
   {
       return view('assign.contact');
   }
   
}
