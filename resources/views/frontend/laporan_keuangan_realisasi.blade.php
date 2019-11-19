
@extends('template') 
@section('content')
<div class='col-md-8 mb20'>
    <h1 class='text-title content-title mt0 mb20'><span>Laporan Realisasi Tahun {{ $tahun_sekarang }}</span></h1>
    {{ Form::open(['url'=>'ubah-periode-laporan-keuangan'])}}
    {{ Form::hidden('url','laporan-keuangan-realisasi')}}
    <table class="table table-bordered">
        <tr>
            <td>Pilih Tahun</td>
            <td>
                <select class="form-control" name="tahun">
                    @foreach($tahun as $t)
                        <option value="{!!$t->tahun!!}">{!! $t->tahun!!}</option>
                    @endforeach
                </select>
            </td>
            <td>{{ Form::submit('Tampilkan',['class'=>'btn btn-info'])}}</td>
        </tr>
    </table>
    {{ Form::close()}}
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