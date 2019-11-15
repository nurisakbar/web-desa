
@extends('template') 
@section('content')
<div class='col-md-8 mb20'>
    <h1 class='text-title content-title mt0 mb20'><span>Laporan Realisasi Tahun 2019</span></h1>
    <table class="table table-bordered">
        <tr>
            <th>Kode</th>
            <th>Sumber Pendapatan</th>
            <th>Jumlah</th>
        </tr>
        @foreach($pendapatan as $p)
        <tr>
            <td>{{ $p->kode_komponen}}</td>
            <td>{{ $p->nama_komponen}}</td>
            <td>{{ $p->nilai}}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection()