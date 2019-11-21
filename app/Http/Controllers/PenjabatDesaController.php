<?php

namespace App\Http\Controllers;
use App\Models\PenjabatDesa;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PenjabatDesaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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
        $data['penduduk'] = \DB::table('penduduk')->select('nik','nama')->get();
        return view('PenjabatDesa.create',$data);
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
             'nik'     => 'required',
             'jabatan' => 'required',
        ],$message);

        //dd($request->all());

       $nik = explode('|',$request->input('nik'))[0];

       $penduduk = Penduduk::where('nik',$nik)->first();

       if($penduduk){
            $input = $request->all();
            $input['nik'] = $nik;
            PenjabatDesa::create($input);
        return redirect('admin/penjabatdesa')->with('message','A New Article With Title '.$request->name.' Has Created');
    
       }else{
           return redirect('admin/penjabatdesa/create')->with('message','Nik yang anda input'.$request->name.' tidak terdata');
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
         $message = [
            'required' => 'Data :attribute Tidak Boleh Ada Yang Kosong',
        ];

        $request->validate([
             'nik'     => 'required',
             'jabatan' => 'required',
        ],$message);

        $nik = $request->input('nik');

       $penduduk = Penduduk::where('nik',$nik)->first();

       if($penduduk){
            $PenjabatDesa         = PenjabatDesa::find($id);
        $PenjabatDesa->update($request->all());

        return redirect('admin/penjabatdesa')->with('message','Penjabat Desa Berhasil Diubah');
       }else{
           return redirect('/admin/penjabatdesa')->with('message','Nik yang anda input tidak terdata');
       }
        
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
