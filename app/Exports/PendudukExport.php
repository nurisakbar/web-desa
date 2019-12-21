<?php

namespace App\Exports;

use App\Models\Penduduk;
//use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PendudukExport implements FromView
{
    public $dusun_id;


    function __construct($dusun_id=null)
    {
        $this->dusun_id = $dusun_id;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Penduduk::all();
    // }

    public function view(): View
    {
        if($this->dusun_id==null)
        {
            $data['penduduk'] = Penduduk::all();
        }else
        {
            $data['penduduk'] = Penduduk::where('dusun_id',$this->dusun_id)->get();
        }
        return view('penduduk.excel',$data);
    }
}
