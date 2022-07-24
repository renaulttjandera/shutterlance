<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function landing() {
        return view("landing");
    }
}
