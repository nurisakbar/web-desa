<?php

namespace App\Http\Controllers;
use App\Models\PenjabatDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PenjabatDesaController extends Controller
{
    public function index()
    {
        $data['penjabatDesa'] = PenjabatDesa::all();
        return view('penjabatdesa.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('PenjabatDesa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PenjabatDesa::create($request->all());
        return redirect('admin/penjabatdesa')->with('message','A New Article With Title '.$request->name.' Has Created');
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
        $data['penjabatDesa'] = PenjabatDesa::find($id);
        return view('penjabatdesa.edit',$data);
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
        $PenjabatDesa            = PenjabatDesa::find($id);
        $PenjabatDesa->update($request->all());

        return redirect('admin/penjabatdesa')->with('message','Penjabat Desa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $PenjabatDesa = PenjabatDesa::find($id);

        $PenjabatDesa->delete();
        
        return redirect('admin/penjabatdesa')->with('message','Data Penjabat Desa Berhasil Dihapus');
    }
}
