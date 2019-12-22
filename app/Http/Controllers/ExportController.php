<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\KartuKeluarga;

class ExportController extends Controller
{
    function pdf()
    {
         $data['penduduk'] = Penduduk::all();

    	$pdf = \PDF::loadView('export.pdf',$data);
    	// return $pdf->download('invoice.pdf');
    	return $pdf->stream();
    }
}
