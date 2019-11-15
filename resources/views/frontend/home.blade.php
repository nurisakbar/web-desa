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
                        <img src='https://negari.desa.id/desa/upload/artikel/kecil_1573628097_72595457_497197657543417_5679668093714956288_n.jpg' alt='Kegiatan di Kantor Desa Negari (13 November 2019)' />
                    </div>
                </div>
                <div class='artikel-konten'>Rabu, (13/9) Kantor Desa Negari penuh dgn Kegiatan diantaranya : 1. Sosialisasi Desa Layak Anak dari Dinas Sosial P3A Kabupaten Klungkung. 2. Penyusunan Kajian Resiko Bencana Desa dari BPBD Kabupaten Klungkung 3. Penilaian Lomba Desa Terpadu tentang Kelinmasan oleh Sat. Pol PP dan DAMKAR Kabupaten Klungkung. 4. Verifikasi Kelompok SPP Sekar Gadung Banjar Sarimertha dari UPK Kecamatan Banjarangkan. 5. Kedatangan <a href='https://negari.desa.id/index.php/first/artikel/107'>..selengkapnya</a></div>
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