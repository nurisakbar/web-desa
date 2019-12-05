@extends('template') 
@section('content')
<div class='col-md-8 mb20'>

    <h1 class='text-title content-title mt0 mb20'>
        <span>Data Penduduk Berdasarkan Jenis Kelamin</span>
    </h1>

    <div style="width: 100%">
        {!! $usersChart->container() !!}
    </div>

    <div class='list-view artikel-daftar'>
        <table class="table table-bordered">
            <tr>
                <th width="10">No</th>
                <th>Kelompok</th>
                <th>Jumlah</th>
            </tr>

            <?php
            $jenis_kelamin = ['laki-laki','perempuan'];
            $no=1;
            foreach($jenis_kelamin as $jk)
            {
                ?>

            <tr>
                <td>{{ $no }}</td>
                <td>{{ $jk}}</td>
                <td>{{ hitungJmlPendudukByGender($jk)}}</td>
            </tr>
                <?php
            $no++;
            }
            ?>
        </table>
        <div class='clearfix mb20'></div>
    </div>
</div>
@endsection()
@push('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>

{!! $usersChart->script() !!}
@endpush