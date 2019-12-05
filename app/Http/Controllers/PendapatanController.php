<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendapatan;
use Redirect;
use Illuminate\Support\Facades\Input;

class PendapatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pendapatan'] = \DB::table('pendapatan as r')
                                ->select('r.*','k.nama_komponen')
                                ->leftJoin('komponen_dana as k','k.kode_komponen','r.kode_komponen')
                                ->where('k.keterangan','pendapatan')
                                ->get();
        return view('pendapatan.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['komponenDana'] = \App\Models\KomponenDana::where('keterangan','pendapatan')
                                ->whereRaw('length(kode_komponen)>4')
                                ->where('kode_komponen','00')
                                ->get();
        return view('pendapatan.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'required' => 'Data :attribute Tidak Boleh Ada Yang Kosong',
        ];

        $request->validate([
             'komponen_dana_id' => 'required',
             'nilai' => 'required',
             //'keterangan'        => 'required'
        ],$message);

        $input = $request->all();
        if($request->komponen_dana_id=='Silpa /Kas Tahun Lalu')
        {
            $input['kode_komponen'] = "00";
        }else
        {
            $input['kode_komponen']=\App\Models\KomponenDana::where('nama_komponen',$request->komponen_dana_id)
            ->whereRaw('length(kode_komponen)>4')
            ->first()['kode_komponen'];
        }
        if(Pendapatan::where('tahun',$request->tahun)->where('kode_komponen',$input['kode_komponen'])->count()>0)
        {
            return Redirect::back()->withInput(Input::all())->with('message','komponen '.$request->komponen_dana_id.' untuk tahun '.$request->tahun.'sudah ada');
            //return redirect('/admin/pendapatan/create')->with('message','komponen '.$request->komponen_dana_id.' untuk tahun '.$request->tahun.'sudah ada');
        }else
        {
            Pendapatan::create($input);
            return redirect('admin/pendapatan')->with('message','Laporan Pemasukan Berhasil Disimpan');
        }

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
        $data['pendapatan'] = Pendapatan::find($id);
        return view('pendapatan.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $message = [
            'required' => 'Data :attribute Tidak Boleh Ada Yang Kosong',
        ];

        $request->validate([
             'nama_komponen' => 'required',
             'kode_komponen' => 'required',
             'keterangan'        => 'required'
        ],$message);

        $pendapatan = Pendapatan::find($id);
        $pendapatan->update($request->all());
        return redirect('admin/pendapatan')->with('message','Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data['pendapatan'] = Pendapatan::find($id);
        $data['pendapatan']->delete();  
        return redirect('admin/pendapatan')->with('message','A pendapatan Has Deleted');
    }
}
