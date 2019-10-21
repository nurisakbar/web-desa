<?php

namespace App\Http\Controllers;
use App\Models\KartuKeluarga;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KartuKeluargaController extends Controller
{
    public function index()
    {
        $data['kartuKeluarga'] = KartuKeluarga::all();
        return view('kartukeluarga.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kartukeluarga.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['village_id'] = '3204191001';
        KartuKeluarga::create($input);
        return redirect('admin/kartukeluarga')->with('message','A New Data Has Created');
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
        $data['kartuKeluarga'] = KartuKeluarga::find($id);
        return view('kartukeluarga.edit',$data);
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
        $input = $request->all();
        $input['village_id'] = '3204191001';
        $kartuKeluarga = KartuKeluarga::find($id);
        $kartuKeluarga->update($input);
        return redirect('admin/kartukeluarga')->with('message','A Article With Title '.$request->name.' Has Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kk = KartuKeluarga::where('nomor_kk',$id)->first();
        $kk->delete();

        
        return redirect('admin/kartukeluarga')->with('message','Data Kartu Keluarga Berhasil Dihapus');
    }
}
