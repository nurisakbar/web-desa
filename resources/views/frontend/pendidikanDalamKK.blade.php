@extends('template') 
@section('content')
<div class='col-md-8 mb20'>

    <h1 class='text-title content-title mt0 mb20'>
        <span>Data Penduduk Berdasarkan Pendidikan</span>
    </h1>

    <div style="width: 100%">
            {!! $usersChart->container() !!}
        </div>


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
            <?php 
            $no=1;
            $totalLaki = 0;
            $totalPerempuan = 0;
            ?>
            @foreach($pendidikan as $p)
            <?php
            $totalLaki = $totalLaki+hitungJmlPendudukByPendidikan($p->id,'laki-laki');
            $totalPerempuan = $totalPerempuan+hitungJmlPendudukByPendidikan($p->id,'perempuan');
            ?>
            <tr>
                <td>{{ $no}}</td>
                <td>{{ $p->pendidikan }}</td>
                <td>{{ hitungJmlPendudukByPendidikan($p->id) }}</td>
                <td>{{ ceil((hitungJmlPendudukByPendidikan($p->id)/$jml_penduduk)*100)}} %</td>
                <td>{{ hitungJmlPendudukByPendidikan($p->id,'laki-laki') }}</td>
                <td>{{ ceil((hitungJmlPendudukByPendidikan($p->id,'laki-laki')/$jml_penduduk)*100)}} %</td>
                <td>{{ hitungJmlPendudukByPendidikan($p->id,'perempuan') }}</td>
                <td>{{ ceil((hitungJmlPendudukByPendidikan($p->id,'perempuan')/$jml_penduduk)*100)}} %</td>
            </tr>
            <?php $no++?>
            @endforeach
            {{-- <tr>
                    <td></td>
                    <td>Total</td>
                    <td>{{ $totalLaki}}</td>
                    <td></td>
                    <td>{{ $totalPerempuan }}</td>
                    <td></td>
                    <td></td>
                </tr> --}}
        </table>
        <div class='clearfix mb20'></div>
    </div>
</div>
@endsection()
@push('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>

{!! $usersChart->script() !!}
@endpush