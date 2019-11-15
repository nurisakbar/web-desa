@extends('template') 
@section('content')
<div class='col-md-8 mb20'>
    <div class='list-view artikel-daftar'>
        <div class='btd-card btd-card-top mb20'>
            <h3 class='artikel-judul title mt0'>{{ link_to('/artikel/'.$artikel->slug,$artikel->judul)}}</h3>
            <div class='artikel-waktu text-muted'>

                <span class='mr10'><i class='fa fa-user'></i>  ADMIN DESA NEGARI</span> <span><i class='fa fa-tag'></i> <a href='https://negari.desa.id/index.php/first/kategori/1'>Berita Desa</a></span>
            </div>
            
            <div class='clearfix mt20'>
                <div class='artikel-gambar-kecil'>
                    <div class='artikel-opensid-img'>
                        <img src='https://negari.desa.id/desa/upload/artikel/kecil_1573628097_72595457_497197657543417_5679668093714956288_n.jpg' alt='Kegiatan di Kantor Desa Negari (13 November 2019)' />
                    </div>
                </div>
                <div class='artikel-konten'>{{ $artikel->artikel}}</div>
            </div>
        </div>
        <div class='clearfix mb20'></div>
    </div>
</div>
@endsection()