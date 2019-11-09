<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\KartuKeluarga;

class PendudukController extends Controller
{
    public $statusHubungan;

    public function __construct()
    {
        $this->middleware('auth');
        $this->statusHubungan = ['ayah'=>'Ayah','ibu'=>'Ibu','anak'=>'Anak'];
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
        $data['kartu_keluarga'] = \DB::table('kartu_keluarga')->select('nomor_kk','nama_kk')->get();
        $data['pendidikan']     = \App\Models\Pendidikan::pluck('pendidikan','id');
        $data['pekerjaan']      = \App\Models\Pekerjaan::pluck('pekerjaan','id');
        $data['agama']          = \App\Models\Agama::pluck('agama','id');
        $data['statusKawin']    = \App\Models\StatusKawin::pluck('status_kawin','id');
        $data['statusHubungan'] = $this->statusHubungan;
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

          $message = [
            'required' => 'Data :attribute Tidak Boleh Ada Yang Kosong',
        ];

        $request->validate([
            'nik'                   => 'required',
             'no_kk'                => 'required',
             'nama'                 => 'required',
             'nama_ayah'            => 'required',
             'nama_ibu'             => 'required',
             'jenis_kelamin'        => 'required',
             'tempat_lahir'         => 'required',
             'tanggal_lahir'        => 'required',
             'agama_id'             => 'required',
             'pendidikan_id'        => 'required',
             'jenis_pekerjaan_id'   => 'required',
             'status_kawin_id'      => 'required',
             //'no_passport'          => 'required',
             //'no_kitab'             => 'required',
        ],$message);

        $input = $request->all();
        $input['village_id'] = '3204191001';
        $input['no_kk'] = trim(explode('|',$request->no_kk)[0]);

        // validasi apakah nomor kk ada di tabel kartu keluarga atau tidak
        if(\DB::table('kartu_keluarga')->where('nomor_kk',$input['no_kk'])->first()==null)
        {
            return \Redirect::back()->withInput($request->all())->with('message','Data KK Yang Anda Input Tidak Terdata');
        }else
        {
            Penduduk::create($input);
            return redirect('admin/penduduk')->with('message','Data Penduduk Berhasil Disimpan');
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
        $data['kartu_keluarga'] = \DB::table('kartu_keluarga')->select('nomor_kk','nama_kk')->get();
        $data['penduduk'] = Penduduk::where('nik',$id)->first();
        $data['pendidikan']     = \App\Models\Pendidikan::pluck('pendidikan','id');
        $data['pekerjaan']      = \App\Models\Pekerjaan::pluck('pekerjaan','id');
        $data['agama']          = \App\Models\Agama::pluck('agama','id');
        $data['statusKawin']    = \App\Models\StatusKawin::pluck('status_kawin','id');
        $data['statusHubungan'] = $this->statusHubungan;
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

          $message = [
            'required' => 'Data :attribute Tidak Boleh Ada Yang Kosong',
        ];

        $request->validate([
            'nik'                   => 'required',
             'no_kk'                => 'required',
             'nama'                 => 'required',
             'nama_ayah'            => 'required',
             'nama_ibu'             => 'required',
             'jenis_kelamin'        => 'required',
             'tempat_lahir'         => 'required',
             'tanggal_lahir'        => 'required',
             'agama_id'             => 'required',
             'pendidikan_id'        => 'required',
             'jenis_pekerjaan_id'   => 'required',
             'status_kawin_id'      => 'required',
             'no_passport'          => 'required',
             'no_kitab'             => 'required',
        ],$message);

        $input = $request->all();
        $input['village_id'] = '3204191001';
        $penduduk = Penduduk::where('nik',$id)->first();
        $penduduk->update($input);
        
        return redirect('admin/penduduk')->with('message','A Penduduk With Title '.$request->name.' Has Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penduduk = Penduduk::where('nik',$id)->first();
        $penduduk->delete();

        
        return redirect('admin/penduduk')->with('message','Data Penduduk Berhasil Dihapus');
    }
}
