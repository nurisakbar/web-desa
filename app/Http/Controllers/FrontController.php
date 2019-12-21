<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\pendidikan;
use App\Charts\UserChart;
use Fpdf;
class FrontController extends Controller
{
    function lapKeuanganPendapatan()
    {
        $data['tahun']      = \DB::select('SELECT DISTINCT(tahun) as tahun FROM pendapatan');
        $data['tahun_sekarang'] = session('tahun')!=null?session('tahun'):date('Y');
        $data['komponen'] = \DB::select("SELECT * from komponen_dana where keterangan='pendapatan' and left(kode_komponen,2) in(select distinct(left(kode_komponen,2)) as kode_komponen from pendapatan where tahun='".$data['tahun_sekarang']."') order by kode_komponen ASC");
        //dd($data['komponen']);
        return view('frontend.laporan_keuangan_pendapatan',$data);
    }

    function laporankeuangan()
    {
        $data['tahun']      = \DB::select('SELECT DISTINCT(tahun) as tahun FROM pendapatan');
        $data['tahun_sekarang'] = session('tahun')!=null?session('tahun'):date('Y');
        $data['komponen_pendapatan'] = \DB::select("SELECT * from komponen_dana where keterangan='pendapatan' and left(kode_komponen,2) in(select distinct(left(kode_komponen,2)) as kode_komponen from pendapatan where tahun='".$data['tahun_sekarang']."') order by kode_komponen ASC");
        $data['komponen_realisasi'] = \DB::select("SELECT * from komponen_dana where keterangan='realisasi' and left(kode_komponen,2) in(select distinct(left(kode_komponen,2)) as kode_komponen from realisasi where tahun='".$data['tahun_sekarang']."') order by kode_komponen ASC");
        $data['resume_pendapatan'] = \DB::select("SELECT * FROM komponen_dana WHERE keterangan='pendapatan' and kode_komponen in(SELECT DISTINCT left(kode_komponen,2) as kode_komponen FROM pendapatan where tahun='".$data['tahun_sekarang']."')");
        $data['resume_realisasi'] = \DB::select("SELECT * FROM komponen_dana WHERE keterangan='realisasi' and kode_komponen in(SELECT DISTINCT left(kode_komponen,2) as kode_komponen FROM realisasi where tahun='".$data['tahun_sekarang']."')");
        return view('frontend.laporan_keuangan',$data);
    }

    function lapKeuanganRealisasi()
    {
        $data['tahun_sekarang'] = session('tahun')!=null?session('tahun'):date('Y');
        $data['tahun']      = \DB::select('SELECT DISTINCT(tahun) as tahun FROM realisasi');
        $data['komponen'] = \DB::select("SELECT * from komponen_dana where keterangan='realisasi' and left(kode_komponen,2) in(select distinct(left(kode_komponen,2)) as kode_komponen from realisasi where tahun='".$data['tahun_sekarang']."') order by kode_komponen ASC");
        //dd($data['komponen']);
        return view('frontend.laporan_keuangan_realisasi',$data);
    }

    function ubahPeriodeLaporanKeuangan(Request $request)
    {
        session(['tahun'=>$request->tahun]);
        return redirect($request->url);
    }


    function pengurusDesa()
    {
        $data['penjabat'] = \DB::table('penjabat_desa')->leftJoin('penduduk','penduduk.nik','penjabat_desa.nik')->get();
        return view('frontend.pengurus_desa',$data);
    }



    function pendidikanDalamKK()
    {
        $borderColors = [
            "rgba(255, 99, 132, 1.0)",
            "rgba(22,160,133, 1.0)",
            "rgba(255, 205, 86, 1.0)",
            "rgba(51,105,232, 1.0)",
            "rgba(244,67,54, 1.0)",
            "rgba(34,198,246, 1.0)",
            "rgba(153, 102, 255, 1.0)",
            "rgba(255, 159, 64, 1.0)",
            "rgba(233,30,99, 1.0)",
            "rgba(205,220,57, 1.0)"
        ];
        $fillColors = [
            "rgba(255, 99, 132, 0.2)",
            "rgba(22,160,133, 0.2)",
            "rgba(255, 205, 86, 0.2)",
            "rgba(51,105,232, 0.2)",
            "rgba(244,67,54, 0.2)",
            "rgba(34,198,246, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(233,30,99, 0.2)",
            "rgba(205,220,57, 0.2)"

        ];


        $data['pendidikan'] = \DB::table('pendidikan')->get();
        $usersChart = new UserChart;
        $label = collect([]);
        $labelValue = collect([]);

        foreach($data['pendidikan'] as $row)
        {
            $label[] = $row->pendidikan;
            $labelValue[] = \DB::table('penduduk')->where('pendidikan_id',$row->id)->count();
        }
        $usersChart->labels($label);
        $usersChart->dataset('Data Penduduk Berdasarkan Pendidikan', 'pie', $labelValue)
                    ->color($borderColors);  
        $data['usersChart'] = $usersChart;

        $data['jml_penduduk'] = \DB::table('penduduk')->count();
        
        return view('frontend.pendidikanDalamKK',$data);
    }

    function pekerjaanDalamKK()
    {
        $borderColors = [
            "rgba(255, 99, 132, 1.0)",
            "rgba(22,160,133, 1.0)",
            "rgba(255, 205, 86, 1.0)",
            "rgba(51,105,232, 1.0)",
            "rgba(244,67,54, 1.0)",
            "rgba(34,198,246, 1.0)",
            "rgba(153, 102, 255, 1.0)",
            "rgba(255, 159, 64, 1.0)",
            "rgba(233,30,99, 1.0)",
            "rgba(205,220,57, 1.0)"
        ];
        $fillColors = [
            "rgba(255, 99, 132, 0.2)",
            "rgba(22,160,133, 0.2)",
            "rgba(255, 205, 86, 0.2)",
            "rgba(51,105,232, 0.2)",
            "rgba(244,67,54, 0.2)",
            "rgba(34,198,246, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(233,30,99, 0.2)",
            "rgba(205,220,57, 0.2)"

        ];


        $data['pekerjaan'] = \DB::table('pekerjaan')->get();
        $usersChart = new UserChart;
        $label = collect([]);
        $labelValue = collect([]);

        foreach($data['pekerjaan'] as $row)
        {
            $label[] = $row->pekerjaan;
            $labelValue[] = \DB::table('penduduk')->where('jenis_pekerjaan_id',$row->id)->count();
        }
        $usersChart->labels($label);
        $usersChart->dataset('Data Penduduk Berdasarkan Pekerjaan', 'pie', $labelValue)
                    ->color($borderColors);  
        $data['usersChart'] = $usersChart;

        $data['jml_penduduk'] = \DB::table('penduduk')->count();
        $data['pekerjaan'] = \DB::table('pekerjaan')->get();
        return view('frontend.pekerjaanDalamKK',$data);
    }

    function jkDalamKK()
    {
        $borderColors = [
            "rgba(255, 99, 132, 1.0)",
            "rgba(22,160,133, 1.0)",
            "rgba(255, 205, 86, 1.0)",
            "rgba(51,105,232, 1.0)",
            "rgba(244,67,54, 1.0)",
            "rgba(34,198,246, 1.0)",
            "rgba(153, 102, 255, 1.0)",
            "rgba(255, 159, 64, 1.0)",
            "rgba(233,30,99, 1.0)",
            "rgba(205,220,57, 1.0)"
        ];
        $fillColors = [
            "rgba(255, 99, 132, 0.2)",
            "rgba(22,160,133, 0.2)",
            "rgba(255, 205, 86, 0.2)",
            "rgba(51,105,232, 0.2)",
            "rgba(244,67,54, 0.2)",
            "rgba(34,198,246, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(233,30,99, 0.2)",
            "rgba(205,220,57, 0.2)"

        ];


        $data['jk'] = ['laki-laki','perempuan'];
        $usersChart = new UserChart;
        $label = collect([]);
        $labelValue = collect([]);

        foreach($data['jk'] as $row)
        {
            $label[] = $row;
            $labelValue[] = \DB::table('penduduk')->where('jenis_kelamin',$row)->count();
        }
        $usersChart->labels($label);
        $usersChart->dataset('Data Penduduk Berdasarkan Jenis Kelamin', 'pie', $labelValue)
                    ->color($borderColors);  
        $data['usersChart'] = $usersChart;
        return view('frontend.jkDalamKK',$data);
    }

    function umurDalamKK()
    {
        return view('frontend.umurDalamKK');
    }

    function perkawinanDalamKK()
    {
        $borderColors = [
            "rgba(255, 99, 132, 1.0)",
            "rgba(22,160,133, 1.0)",
            "rgba(255, 205, 86, 1.0)",
            "rgba(51,105,232, 1.0)",
            "rgba(244,67,54, 1.0)",
            "rgba(34,198,246, 1.0)",
            "rgba(153, 102, 255, 1.0)",
            "rgba(255, 159, 64, 1.0)",
            "rgba(233,30,99, 1.0)",
            "rgba(205,220,57, 1.0)"
        ];
        $fillColors = [
            "rgba(255, 99, 132, 0.2)",
            "rgba(22,160,133, 0.2)",
            "rgba(255, 205, 86, 0.2)",
            "rgba(51,105,232, 0.2)",
            "rgba(244,67,54, 0.2)",
            "rgba(34,198,246, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(233,30,99, 0.2)",
            "rgba(205,220,57, 0.2)"

        ];


        $data['perkawinan'] = \DB::table('status_kawin')->get();
        $usersChart = new UserChart;
        $label = collect([]);
        $labelValue = collect([]);

        foreach($data['perkawinan'] as $row)
        {
            $label[] = $row->status_kawin;
            $labelValue[] = \DB::table('penduduk')->where('status_kawin_id',$row->id)->count();
        }
        $usersChart->labels($label);
        $usersChart->dataset('Data Penduduk Berdasarkan Status Kawin', 'pie', $labelValue)
                    ->color($borderColors);  
        $data['usersChart'] = $usersChart;

        $data['jml_penduduk'] = \DB::table('penduduk')->count();
        $data['status_kawin'] = \DB::table('status_kawin')->get();
        return view('frontend.perkawinanDalamKK',$data);
    }

    function laporankeuanganPdf()
    {
        $data['tahun_sekarang'] = session('tahun')!=null?session('tahun'):date('Y');
        $data['komponen_pendapatan'] = \DB::select("SELECT * from komponen_dana where keterangan='pendapatan' and left(kode_komponen,2) in(select distinct(left(kode_komponen,2)) as kode_komponen from pendapatan where tahun='".$data['tahun_sekarang']."') order by kode_komponen ASC");
        $data['komponen_realisasi'] = \DB::select("SELECT * from komponen_dana where keterangan='realisasi' and left(kode_komponen,2) in(select distinct(left(kode_komponen,2)) as kode_komponen from realisasi where tahun='".$data['tahun_sekarang']."') order by kode_komponen ASC");
        $data['resume_pendapatan'] = \DB::select("SELECT * FROM komponen_dana WHERE keterangan='pendapatan' and kode_komponen in(SELECT DISTINCT left(kode_komponen,2) as kode_komponen FROM pendapatan where tahun='".$data['tahun_sekarang']."')");
        $data['resume_realisasi'] = \DB::select("SELECT * FROM komponen_dana WHERE keterangan='realisasi' and kode_komponen in(SELECT DISTINCT left(kode_komponen,2) as kode_komponen FROM realisasi where tahun='".$data['tahun_sekarang']."')");
        Fpdf::AddPage('P','A4');
    
        Fpdf::SetFont('Arial', 'B', 9);
        Fpdf::Cell(40, 5, 'Laporan Keuangan '.$data['tahun_sekarang'],0,1);
        Fpdf::Cell(40, 5, 'Gampong',0,0);
        Fpdf::Cell(40, 5, ': '.setting()->village_name,0,1);
        Fpdf::Cell(40, 5, 'Kecamatan',0,0);
        Fpdf::Cell(40, 5, ': '.setting()->district_name,0,1);
        Fpdf::Cell(40, 5, 'Kabupaten',0,0);
        Fpdf::Cell(40, 5, ': '.setting()->regency_name,0,1);
        Fpdf::Cell(40, 5, 'Provinsi',0,0);
        Fpdf::Cell(40, 5, ': Aceh',0,1);
        Fpdf::Cell(40, 3, '',0,1);

        Fpdf::Cell(198, 5, 'Pendapatan',1,1);
        Fpdf::Cell(198, 5, 'Detail Pendapatan',1,1);
        Fpdf::Cell(18, 5, 'Kode',1);
        Fpdf::Cell(158, 5, 'Sumber Pendapatan',1);
        Fpdf::Cell(22, 5, 'Jumlah',1,1);
        Fpdf::SetFont('Arial', '', 9);

        foreach($data['komponen_pendapatan'] as $pendapatan)
        {
            
            
            $jumlahP = hitungPendapatan($pendapatan->kode_komponen,$data['tahun_sekarang'],'pendapatan');
            if($jumlahP>0)
            {
                Fpdf::Cell(18, 5, $pendapatan->kode_komponen,1,0,'R');
                Fpdf::Cell(158, 5, $pendapatan->nama_komponen,1);
                Fpdf::Cell(22, 5, formatRupiah($jumlahP),1,1,'R');
            }
        }

        Fpdf::Cell(198, 10, '',0,1);
        Fpdf::Cell(198, 5, 'Pengeluaran',1,1);
        Fpdf::Cell(198, 5, 'Detail Pengeluaran',1,1);
        Fpdf::Cell(18, 5, 'Kode',1);
        Fpdf::Cell(158, 5, 'Sumber Pendapatan',1);
        Fpdf::Cell(22, 5, 'Jumlah',1,1);
        foreach($data['komponen_realisasi'] as $realisasi)
        {
            
            
            $jumlahP = hitungPendapatan($realisasi->kode_komponen,$data['tahun_sekarang'],'realisasi');
            if($jumlahP>0)
            {
                Fpdf::Cell(18, 5, $realisasi->kode_komponen,1,0,'R');
                Fpdf::Cell(158, 5, $realisasi->nama_komponen,1);
                Fpdf::Cell(22, 5, formatRupiah($jumlahP),1,1,'R');
            }
        }

        Fpdf::Cell(198, 10, '',0,1);
        Fpdf::Cell(176, 5, 'Sumber Pendapatan',1);
        Fpdf::Cell(22, 5, 'Jumlah',1,1);
        $jumlahPendapatan = 0;
        foreach($data['resume_pendapatan'] as $rp)
        {
            $jumlahP = hitungPendapatan($rp->kode_komponen,$data['tahun_sekarang'],'pendapatan');
            $jumlahPendapatan = $jumlahPendapatan+$jumlahP;
            if($jumlahP>0)
            {
                Fpdf::Cell(176, 5, $rp->nama_komponen,1);
                Fpdf::Cell(22, 5, formatRupiah($jumlahP),1,1,'R');
            }
        }
        Fpdf::Cell(176, 5, 'Jumlah Pendapatan',1);
        Fpdf::Cell(22, 5, formatRupiah($jumlahPendapatan),1,1,'R');

        Fpdf::Cell(198, 5, '',0,1);
        Fpdf::Cell(176, 5, 'Sumber Pengeluaran',1);
        Fpdf::Cell(22, 5, 'Jumlah',1,1);
        $jumlahPengeluaran = 0;
        foreach($data['resume_realisasi'] as $rr)
        {
            $jumlahP = hitungPendapatan($rr->kode_komponen,$data['tahun_sekarang'],'realisasi');
            $jumlahPengeluaran = $jumlahPengeluaran+$jumlahP;
            if($jumlahP>0)
            {
                Fpdf::Cell(176, 5, $rr->nama_komponen,1);
                Fpdf::Cell(22, 5, formatRupiah($jumlahP),1,1,'R');
            }
        }

        Fpdf::Cell(176, 5, 'Jumlah Pengeluaran',1);
        Fpdf::Cell(22, 5, formatRupiah($jumlahPengeluaran),1,1,'R');

        Fpdf::Cell(100,5,'',0,1);
        Fpdf::Cell(176, 5, 'Jumlah Pendapatan',1);
        Fpdf::Cell(22, 5, formatRupiah($jumlahPendapatan),1,1,'R');
        Fpdf::Cell(176, 5, 'Jumlah Pengeluaran',1);
        Fpdf::Cell(22, 5, formatRupiah($jumlahPengeluaran),1,1,'R');
        Fpdf::Cell(176, 5, 'Surplus/ Devisit',1);
        Fpdf::Cell(22, 5, formatRupiah($jumlahPendapatan- $jumlahPengeluaran),1,1,'R');

        Fpdf::Cell(198, 5, '',0,1);
        Fpdf::Cell(138, 5, '',0,0);
        Fpdf::Cell(38, 5, setting()->village_name.', '.date('d-m-Y'),0,1);

        Fpdf::Cell(138, 5, '',0,0);
        Fpdf::Cell(38, 5, 'Mengetahui Keusyik',0,1,1);
        Fpdf::Cell(138, 5, '',0,0);
        Fpdf::Cell(38, 5, setting()->village_name,0,1);

        Fpdf::Cell(198, 10, '',0,1);
        Fpdf::Cell(138, 5, '',0,0);
        Fpdf::Cell(38, 5, penjabatDesa(),0);

        Fpdf::Output();
        exit;
    }
}
