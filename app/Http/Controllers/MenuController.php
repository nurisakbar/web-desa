<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function DataDesa()
    {
    	return view('data-desa');
    }

    public function Tranparansi()
    {
    	return view('tranparansi');
    }
}
