
@extends('template') 
@section('content')
<div class='col-md-8 mb20'>
    <h3 class='text-title content-title mt0 mb20'><span>Laporan Realisasi Tahun {{ $tahun_sekarang }} Adalah {{ number_format(hitungTotalUang($tahun_sekarang,'realisasi'),0,',','.')}}</span></h3>
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
<hr>
    <table class="table table-bordered">
        <tr>
                <th>Kode</th>
                <th>Sumber Pendapatan</th>
                <th>Jumlah</th>
            </tr>
    @foreach($komponen as $kp)

    <?php
    $jml = hitungPendapatan($kp->kode_komponen,$tahun_sekarang,'realisasi');
    if($jml>0){
    ?>
    <tr <?php
    if(strlen($kp->kode_komponen)==4)
    {
        echo "class='active'";
    }
    ?>>
        <td>{{ $kp->kode_komponen}}</td>
        <td>{{ $kp->nama_komponen}}</td>
        <td>{{ number_format($jml,0,',','.')}}</td>
    </tr>
    <?php } ?>
    @endforeach
</table>
</div>
@endsection()