@extends('template') 
@section('content')
<div class='col-md-8 mb20'>
    <h3 class='text-title content-title mt0 mb20'><span>Laporan Pendapatan & Realisasi Tahun {{ $tahun_sekarang }}</span></h3> {{ Form::open(['url'=>'ubah-periode-laporan-keuangan'])}} {{ Form::hidden('url','laporan-keuangan-pendapatan')}}
    {{ Form::open(['url'=>'ubah-periode-laporan-keuangan'])}}
    {{ Form::hidden('url','laporan-keuangan')}}

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
                    <th colspan="2">Jumlah Pendapatan</th>
                    <th>{{ number_format(hitungTotalUang($tahun_sekarang,'pendapatan'),0,',','.')}}</th>
                </tr>
                <tr>
                    <th colspan="3">Detail Realisasi</th>
                </tr>
        <tr>
            <th width="80">Kode</th>
            <th>Sumber Pendapatan</th>
            <th width="100">Jumlah</th>
        </tr>
        @foreach($komponen_pendapatan as $kp)

        <?php
        $jml = hitungPendapatan($kp->kode_komponen,$tahun_sekarang,'pendapatan');
        if($jml>0){
        ?>
            <tr <?php if(strlen($kp->kode_komponen)==4) { echo "class='active'"; } ?>>
                <td align="right">{{ $kp->kode_komponen}}</td>
                <td>{{ $kp->nama_komponen}}</td>
                <td align="right">{{ number_format($jml,0,',','.')}}</td>
            </tr>
            <?php } ?>
        @endforeach
    </table>
    <hr>
    <table class="table table-bordered">
        <tr>
            <th colspan="2">Jumlah Realisasi</th>
            <th>{{ number_format(hitungTotalUang($tahun_sekarang,'realisasi'),0,',','.')}}</th>
        </tr>
        <tr>
            <th colspan="3">Detail Realisasi</th>
        </tr>
        <tr>
            <th width="80">Kode</th>
            <th>Sumber Pendapatan</th>
            <th width="100">Jumlah</th>
        </tr>
        @foreach($komponen_realisasi as $kp)
    
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
            <td  align="right">{{ $kp->kode_komponen}}</td>
            <td>{{ $kp->nama_komponen}}</td>
            <td align="right">{{ number_format($jml,0,',','.')}}</td>
        </tr>
        <?php } ?>
        @endforeach
    </table>

    <hr>

    <?php
    $totalPendapatan = 0;
    $totalPengeluaran=0;
    ?>
    <table class="table table-bordered">
        <tr><th>Pendapatan</th><th width="100">Jumlah</th></tr>
        @foreach($resume_pendapatan as $rp)
        <?php
        $rpi = hitungPendapatan($rp->kode_komponen,$tahun_sekarang,'pendapatan');
        $totalPendapatan = $totalPendapatan+$rpi;
        ?>
        <tr>
            <td>{{ $rp->nama_komponen}}</td>
            <td align="right">{{ formatRupiah($rpi)}}</td>
        </tr>
        @endforeach
        <tr>
            <td>Jumlah Pendapatan</td>
            <td align="right">{{ formatRupiah($totalPendapatan)}}</td>
        </tr>
    </table>

    <table class="table table-bordered">
        <tr><th>Realisasi</th><th width="100" align="right">Jumlah</th></tr>
        @foreach($resume_realisasi as $rr)
        <?php
        $rpi = hitungPendapatan($rr->kode_komponen,$tahun_sekarang,'realisasi');
        $totalPengeluaran = $totalPengeluaran + $rpi;
        ?>
        <tr>
            <td>{{ $rr->nama_komponen}}</td>
            <td align="right">{{ formatRupiah($rpi)}}</td>
        </tr>
        @endforeach
        <tr>
            <td>Jumlah Pengeluaran</td>
            <td align="right">{{ formatRupiah($totalPengeluaran)}}</td>
        </tr>
        <tr>
            <th>Surplus / Devisit Tahun Ini</th>
            <th align="right">{{ formatRupiah($totalPendapatan - $totalPengeluaran)}}</th>
        </tr>
    </table>

    <div style="margin-left:450px">
        {{ setting()->village_name }}, {{ date('m d Y')}}<br>
        Mengetahui,<br>
        Keusyik Gampong {{ setting()->village_name }}
        <br><br><br>
        {{ penjabatDesa()}}
        <br>
        {{ link_to('laporan-keuangan-pdf','Laporan PDF',['class'=>'btn btn-danger'])}}
    </div>

</div>
@endsection()