<?php

namespace App\Http\Controllers;
use App\Model\Artikel;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {   
    	$artikel = Artikel::all(); 
    	return view('layout.front',compact(['artikel']));
    }
}
