<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;

class PendudukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data['penduduk'] = Penduduk::all();
        return view('penduduk.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['pendidikan']     = \App\Models\Pendidikan::pluck('pendidikan','id');
        $data['pekerjaan']      = \App\Models\Pekerjaan::pluck('pekerjaan','id');
        $data['agama']          = \App\Models\Agama::pluck('agama','id');
        $data['statusKawin']    = \App\Models\StatusKawin::pluck('status_kawin','id');
        return view('penduduk.create',$data);
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
        return view('penduduk.edit',$data);
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
