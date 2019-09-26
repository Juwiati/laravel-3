<?php

 

namespace App\Http\Controllers;

 

use Illuminate\Http\Request;

use App\Artikel;

 

class artikel_controller extends Controller

{

    public function index(){

   	$artikel=Artikel::all();

 

   	return view('artikel.index',compact('artikel'));

}

	}

