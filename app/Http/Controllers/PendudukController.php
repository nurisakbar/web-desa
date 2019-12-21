<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\KartuKeluarga;
use Fpdf;

use App\Exports\PendudukExport;
use Maatwebsite\Excel\Facades\Excel;

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
        $data['dusun']          = \App\Models\Dusun::pluck('nama_dusun','id');
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
        $data['dusun']          = \App\Models\Dusun::pluck('nama_dusun','id');
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
            //  'no_passport'          => 'required',
            //  'no_kitab'             => 'required',
        ],$message);

        $input                  = $request->all();       
        $input['village_id'] = setting()->id;
        if ($request->hasFile('foto')) {
            $foto                   = $request->file('foto');
            $file_gambar            = $foto->getClientOriginalName();
            $destinationPath = 'foto_penduduk';
            $foto->move($destinationPath,$file_gambar);
    
            $input['foto']    = $file_gambar;
        }else
        {
            $input['foto'] = null;
        }

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
    public function cari()
    {
        $keyword = $_GET['term'];

        $penduduk = \App\Models\Penduduk::where('nama','like',"%$keyword%")->get();
        foreach($penduduk as $row){
            $data[] = $row->nama;
        }
        return json_encode($data);
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
        $data['dusun']          = \App\Models\Dusun::pluck('nama_dusun','id');
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
            // 'nik'                   => 'required',
            //  'no_kk'                => 'required',
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
            //  'no_passport'          => 'required',
            //  'no_kitab'             => 'required',
        ],$message);

        $input = $request->all();

       if ($request->hasFile('foto')) {
            $foto                   = $request->file('foto');
            $file_gambar            = $foto->getClientOriginalName();
            $destinationPath = 'foto_penduduk';
            $foto->move($destinationPath,$file_gambar);

            $input['foto']    = $file_gambar;
        }

        //$input['village_id'] = '3204191001';
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

    function pdf()
    {
        if(isset($_GET['dusun_id']))
        {
            $penduduk = Penduduk::where('dusun_id',$_GET['dusun_id'])->get();
            $dusun    = \DB::table('dusun')->where('id',$_GET['dusun_id'])->first();
        }else
        {
            $penduduk = Penduduk::all();
        }

        Fpdf::AddPage('L','A4');
        Fpdf::SetFont('Arial', 'B', 10);
        if(isset($_GET['dusun_id']))
        {
            Fpdf::Cell(40, 5, 'Dusun',0,0);
            Fpdf::Cell(40, 5, ': '.$dusun->nama_dusun,0,1);
        }
        Fpdf::Cell(40, 5, 'Gampong',0,0);
        Fpdf::Cell(40, 5, ': '.setting()->village_name,0,1);
        Fpdf::Cell(40, 5, 'Kecamatan',0,0);
        Fpdf::Cell(40, 5, ': '.setting()->district_name,0,1);
        Fpdf::Cell(40, 5, 'Kabupaten',0,0);
        Fpdf::Cell(40, 5, ': '.setting()->regency_name,0,1);
        Fpdf::Cell(40, 5, 'Provinsi',0,0);
        Fpdf::Cell(40, 5, ': Aceh',0,1);
        Fpdf::Cell(40, 7, '',0,1);

        
        Fpdf::Cell(35, 5, 'Nomor KK',1);
        Fpdf::Cell(35, 5, 'NIK',1);
        Fpdf::Cell(70, 5, 'Nama',1);
        Fpdf::Cell(40, 5, 'Tempat, Tgl Lahir',1);
        Fpdf::Cell(15, 5, 'Agama',1);
        // Fpdf::Cell(50, 5, 'Pendidikan',1);
        Fpdf::Cell(30, 5, 'Jenis Kelamin',1);
        Fpdf::Cell(30, 5, 'Dusun',1,1);

        Fpdf::SetFont('Arial', '', 10);
        
        $number = 0;
        foreach($penduduk as $p)
        {
            Fpdf::Cell(35, 5, $p->no_kk,1);
            Fpdf::Cell(35, 5, $p->nik,1);
            Fpdf::Cell(70, 5, $p->nama,1);
            Fpdf::Cell(40, 5, $p->tempat_lahir.','.$p->tanggal_lahir,1);
            Fpdf::Cell(15, 5, $p->agama->agama,1);
            // Fpdf::Cell(50, 5, $p->pendidikan->pendidikan,1);
            Fpdf::Cell(30, 5, $p->jenis_kelamin,1);
            Fpdf::Cell(30, 5, $p->dusun->nama_dusun,1,1);
            $number++;
        }

        Fpdf::Output();
        exit;
    }

    function excel()
    {
        if(isset($_GET['dusun_id']))
        {
            return Excel::download(new PendudukExport($_GET['dusun_id']), 'penduduk.xlsx');
        }else
        {
            return Excel::download(new PendudukExport, 'penduduk.xlsx');
        }
        
    }
}
