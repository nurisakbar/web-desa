@extends('template') 
@section('content')
<div class='col-md-8 mb20'>
    <div class='list-view artikel-daftar'>
        <div class='btd-card btd-card-top mb20'>
            <h3 class='artikel-judul title mt0'>{{ link_to('/artikel/'.$artikel->slug,$artikel->judul)}}</h3>
            <div class='artikel-waktu text-muted'>

                <span class='mr10'><i class='fa fa-user'></i>  ADMIN DESA</span> <span><i class='fa fa-tag'></i> <a href='#'>Berita Desa</a></span>
            </div>
            
            <div class='clearfix mt20'>
                <div class='artikel-gambar-kecil'>
                    <div class='artikel-opensid-img'>
                        <img src="{{ asset('img_artikel/'.$artikel->gambar)}}" alt='Kegiatan di Kantor Desa Negari (13 November 2019)' />
                    </div>
                </div>
                <div class='artikel-konten'>{{ $artikel->artikel}}</div>
            </div>
        </div>
        <div class='clearfix mb20'></div>
    </div>
</div>
@endsection()