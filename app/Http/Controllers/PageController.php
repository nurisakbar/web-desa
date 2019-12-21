<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
class PageController extends Controller
{

    public function Home(Request $request)
    {
        if($request->has('cari')){
            $data['artikels'] = Artikel::where('judul','LIKE','%' .$request->cari. '%')->paginate(4);
            if($data['artikels']->isEmpty()){
                $data['artikels'] = Artikel::latest()->paginate(8);
            }
            }else{
                $data['artikels'] = Artikel::latest()->paginate(8);
            
        }
        
        return view('frontend.home',$data);
    }

    public function DetailArtikel($slug)
    {
        //$data['artikels'] = Artikel::all();
        $data['artikel'] = Artikel::where('slug',$slug)->first();
        return view('frontend.detail-artikel',$data);
    }

    function artikelByCategory($slug)
    {
        $kategory = \DB::table('kategoris')->where('slug',$slug)->first();
        $data['artikels'] = Artikel::where('id_kategori',$kategory->id)->paginate(8);
        $data['kategori'] = $kategory;
        return view('frontend.home',$data);
    }
}
