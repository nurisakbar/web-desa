<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['articles'] = Artikel::all();
        return view('artikel.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input          = $request->all();
        $gambar         = $request->file('gambar');
        $file_gambar    = $gambar->getClientOriginalName();

        $destinationPath = 'img_artikel';
        $gambar->move($destinationPath,$file_gambar);

        $input['slug']      = Str::slug($request->title, '-');
        $input['gambar']    = $file_gambar;

        Artikel::create($input);
        return redirect('admin/artikel')->with('message','A New Article With Title '.$request->name.' Has Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['artikel'] = Artikel::find($id);
        return view('artikel.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $input              = $request->all();

        if ($request->hasFile('gambar')) {
            $gambar         = $request->file('gambar');
            $file_gambar    = $gambar->getClientOriginalName();
            $destinationPath = 'img_artikel';
            $gambar->move($destinationPath,$file_gambar);
            $input['gambar']    = $file_gambar;
        }
        
        $input['slug']      = Str::slug($request->title, '-');
        $artikel            = Artikel::find($id);
        $artikel->update($input);

        return redirect('admin/artikel')->with('message','A Article With Title '.$request->name.' Has Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::find($id);

        $artikel->delete();
        
        return redirect('admin/artikel')->with('message','A Article Has Deleted');
    }
}
