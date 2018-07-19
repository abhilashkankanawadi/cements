<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaySaleController extends Controller
{
    public function create(){
    	return view('daySale.newsale');
    }
}
