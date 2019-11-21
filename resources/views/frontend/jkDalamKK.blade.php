@extends('template') 
@section('content')
<div class='col-md-8 mb20'>

    <h1 class='text-title content-title mt0 mb20'>
        <span>Data Penduduk Berdasarkan Perkawinan</span>
    </h1>

    <div class='list-view artikel-daftar'>
        <table class="table table-bordered">
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Kelompok</th>
                <th colspan="2">Jumlah</th>
                <th colspan="2">Laki Laki</th>
                <th colspan="2">Perempuan</th>
            </tr>
            <tr>
                <th>n</th>
                <th>%</th>
                <th>n</th>
                <th>%</th>
                <th>n</th>
                <th>%</th>
            </tr>
        </table>
        <div class='clearfix mb20'></div>
    </div>
</div>
@endsection()