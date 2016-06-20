<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class webController extends Controller
{

    public function index(){
    	
    	return view('web.landing');
    }
}
