@extends('template') 
@section('content')
<div class='col-md-8 mb20'>

    <h1 class='text-title content-title mt0 mb20'><span>Artikel Terkini</span></h1>

    <div class='list-view artikel-daftar'>
        @foreach($artikels as $artikel)
        <div class='btd-card btd-card-top mb20'>
            <h3 class='artikel-judul title mt0'>{{ link_to('/artikel/'.$artikel->slug,$artikel->judul)}}</h3>
            <div class='artikel-waktu text-muted'>

                <span class='mr10'><i class='fa fa-user'></i>  ADMIN DESA NEGARI</span> <span><i class='fa fa-tag'></i> <a href='https://negari.desa.id/index.php/first/kategori/1'>Berita Desa</a></span>
            </div>
            
            <div class='clearfix mt20'>
                <div class='artikel-gambar-kecil'>
                    <div class='artikel-opensid-img'>
                        <img src="{{ asset('img_artikel/'.$artikel->gambar)}}" alt="{{ $artikel->judul }}" />
                    </div>
                </div>
                <div class='artikel-konten'>{!! $artikel->artikel !!}</div>
            </div>
        </div>
        @endforeach
        <div class='clearfix mb20'></div>
    </div>
    <!-- .list-view -->
    <div>
        {{ $artikels->links()}}
    </div>
</div>
@endsection()