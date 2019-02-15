<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class destinationController extends Controller
{
    public function index($action){

    	return view('body.destination')->with('action',$action);


    }
}
