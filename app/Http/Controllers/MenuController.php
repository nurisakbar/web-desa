<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

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

    public function Home(Request $request)
    {
        if($request->has('cari')){
            $data['artikels'] = Artikel::where('judul','LIKE','%' .$request->cari. '%')->paginate(4);
            if($data['artikels']->isEmpty()){
                $data['artikels'] = Artikel::latest()->paginate(4);
            }
            }else{
                $data['artikels'] = Artikel::latest()->paginate(4);
            
        }
        
        return view('welcome',$data);
    }

    public function DetailArtikel($id)
    {
        $data['artikels'] = Artikel::all();
        $data['artikels'] = Artikel::findOrFail($id);
        return view('detail-artikel',$data);
    }
}
