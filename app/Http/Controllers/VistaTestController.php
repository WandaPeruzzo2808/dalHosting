<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistaTestController extends Controller
   {
     public function vista()
        {
           return view('test');
        }

    }

