<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    function lapKeuanganPendapatan()
    {
        $data['pendapatan'] = \DB::table('pendapatan')
                            ->leftJoin('komponen_dana','komponen_dana.id','pendapatan.komponen_dana_id')
                            ->orderBy('komponen_dana.kode_komponen','ASC')
                            ->where('tahun',$data['tahun_sekarang'])
                            ->get();
        $data['tahun']      = \DB::select('SELECT DISTINCT(tahun) as tahun FROM pendapatan');
        $data['tahun_sekarang'] = session('tahun')!=null?session('tahun'):date('y');
        return view('frontend.laporan_keuangan_pendapatan',$data);
    }

    function lapKeuanganRealisasi()
    {
        $data['tahun_sekarang'] = session('tahun')!=null?session('tahun'):date('y');
        $data['pendapatan'] = \DB::table('realisasi')
                            ->leftJoin('komponen_dana','komponen_dana.id','realisasi.komponen_dana_id')
                            ->orderBy('komponen_dana.kode_komponen','ASC')
                            ->where('tahun',$data['tahun_sekarang'])
                            ->get();
        $data['tahun']      = \DB::select('SELECT DISTINCT(tahun) as tahun FROM pendapatan');
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
        return view('frontend.pendidikanDalamKK');
    }

    function pekerjaanDalamKK()
    {
        return view('frontend.pekerjaanDalamKK');
    }

    function jkDalamKK()
    {
        return view('frontend.jkDalamKK');
    }

    function umurDalamKK()
    {
        return view('frontend.umurDalamKK');
    }

    function perkawinanDalamKK()
    {
        return view('frontend.perkawinanDalamKK');
    }
}
