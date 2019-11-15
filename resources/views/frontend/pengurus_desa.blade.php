@extends('template') 
@section('content')
<div class='col-md-8 mb20'>
    <h1 class='text-title content-title mt0 mb20'><span>Perangkat Desa</span></h1>
    <div class="row">
        @foreach($penjabat as $row)
            <div class="col-md-3">
                <img src="http://images.clipartpanda.com/male-black-hair-clipart-male_user_icon_clip_art.jpg" class="img-thumbnail" width="200">
                <hr>
                {{ $row->nama }}<br>{{ $row->jabatan }}
            </div>
        @endforeach
    </div>
</div>
@endsection()