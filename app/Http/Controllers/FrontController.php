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
                            ->get();
        return view('laporan_keuangan_pendapatan',$data);
    }

    function lapKeuanganRealisasi()
    {
        $data['pendapatan'] = \DB::table('realisasi')
                            ->leftJoin('komponen_dana','komponen_dana.id','realisasi.komponen_dana_id')
                            ->orderBy('komponen_dana.kode_komponen','ASC')
                            ->get();
        return view('laporan_keuangan_realisasi',$data);
    }


    function pengurusDesa()
    {
        $data['penjabat'] = \DB::table('penjabat_desa')->leftJoin('penduduk','penduduk.nik','penjabat_desa.nik')->get();
        return view('pengurus_desa',$data);
    }
}
