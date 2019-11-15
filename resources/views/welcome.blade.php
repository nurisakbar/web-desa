<!DOCTYPE html>
<html>
<head>

    <meta content="utf-8" http-equiv="encoding">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <meta name='google' content='notranslate' />
    <meta name='theme' content='batudaa' />
    <meta name='theme:version' content='1.1.1' />
    <meta name='theme:url' content='http://github.com/batudaa/batudaa-theme' />
    <meta name='keywords' content="sid, sistem informasi desa, web, blog, informasi, website, batudaa, desa, kecamatan, kabupaten, indonesia, kampung, Negari, Banjarangkan, Klungkung" />
    <meta property="og:site_name" content="{{ setting()->village_name }}" />
    <meta property="og:type" content="article" />
    <title>Website Resmi Desa {{ setting()->village_name }}</title>
    <meta name='description' content="Website Resmi Desa {{ setting()->village_name }}" />
    <meta property="og:title" content="{{ setting()->village_name }}" />
    <meta property='og:description' content="Website Resmi Desa {{ setting()->village_name }}" />
    <meta property='og:url' content="https://negari.desa.id/index.php/first" />
    <link rel="shortcut icon" href="https://negari.desa.id/favicon.ico" />
    <link type='text/css' href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel='stylesheet' />
    <link type='text/css' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel='stylesheet' />
    <link type='text/css' href='{{ asset('batudaa/vendor/fancybox/jquery.fancybox.css')}}' rel='stylesheet' />
    <link type='text/css' href='{{ asset('batudaa/assets/css/batudaa.css')}}' rel='stylesheet' />
    <script language='javascript' src="{{ asset('js/app.js')}}"></script>
    <script language='javascript' src="{{ asset('/bootstrap/js/bootstrap.js')}}"></script>
    <script language='javascript' src='{{ asset('batudaa/vendor/fancybox/jquery.fancybox.js')}}'></script>
    <script language='javascript' src="https://negari.desa.id/assets/js/jquery.cycle2.min.js"></script>
    <script language='javascript' src="https://negari.desa.id/assets/js/jquery.cycle2.carousel.js"></script>
    <script language='javascript' src='{{ asset('batudaa/assets/js/batudaa.js')}}'></script>
</head>

<body>

    <div class='navbar navbar-default navbar-fixed-top'>
        <div class='container'>

            <div class='navbar-header'>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="https://negari.desa.id/index.php/first"><img src="https://negari.desa.id/desa/logo/negari_logo__sid__abw639r.png" class='hidden-xs'></a>
                <a class='navbar-brand with-subbrand' href="https://negari.desa.id/index.php/first">
                    <div>
                        <div class='title hidden-sm'><span class='hidden-xs web-title-desa'>Desa </span>{{ setting()->village_name }}</div>
                        <div class='sub-title hidden-xs hidden-sm'><span class='web-title-kabupaten'>KABUPATEN </span>{{ setting()->district_name}}, {{ setting()->province_name}}</div>
                    </div>
                </a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <div class="navbar-form ">
                    <form id='formSearch' method='get' action="https://negari.desa.id/index.php/first">
                        <div class="form-group">
                            <div class="input-group">
                                <input type='text' class='form-control' placeholder="Pencarian..." name='cari' value="">
                                <span class="input-group-btn">
								<button type='submit' class='btn btn-default'><i class='fa fa-search'></i></button>
							</span>
                            </div>
                        </div>
                    </form>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="https://negari.desa.id/index.php/first/artikel/32">Profil Desa <i class='fa fa-angle-down'></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="https://negari.desa.id/index.php/first/artikel/99">Sejarah Desa</a></li>
                            <li><a href="https://negari.desa.id/index.php/first/artikel/98">Profil Wilayah Desa</a></li>
                            <li><a href="https://negari.desa.id/index.php/first/artikel/7">Arti Lambang Desa</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="https://negari.desa.id/index.php/first/artikel/85">Pemerintahan Desa <i class='fa fa-angle-down'></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="https://negari.desa.id/index.php/first/artikel/93">Visi dan Misi</a></li>
                            <li><a href="https://negari.desa.id/index.php/first/artikel/92">Pemerintah Desa</a></li>
                            <li><a href="https://negari.desa.id/index.php/first/artikel/37">Badan Permusyawaratan Desa</a></li>
                        </ul>
                    </li>
                    <li class='$item[status]'><a href="https://drive.google.com/open?id=1vG1Dh51GZd9bo0vlG4h2YrGFzE5R2FnX">PPID</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="https://negari.desa.id/index.php/first/">SIG <i class='fa fa-angle-down'></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="https://negari.desa.id/index.php/first/artikel/99">Lokasi Balai Banjar </a></li>
                            <li><a href="https://negari.desa.id/index.php/first/artikel/99">Lokasi Pura</a></li>
                            <li><a href="https://negari.desa.id/index.php/first/artikel/99">Lokasi Rumah Tangga Miskin</a></li>
                        </ul>
                    </li>
                    <li class='$item[status]'><a href="https://negari.desa.id/online/">Surat Online</a></li>
                    <li class='$item[status]'><a href="https://negari.desa.id/index.php/first/kategori/24">Transparansi Keuangan</a></li>
                    <li class='hidden-xs'><a href='javascript:void(0)' id='btnSearch' class=""><i class='fa fa-search'></i></a></li>
                </ul>

            </div>
            <!-- #navbar -->

        </div>
        <!-- .container -->
    </div>

    <div id='lunggongo'></div>
    <div class="luncuran-box">
        <div>
            <div>
                <div id=luncuran class='carousel slide'>
                    <!-- Indicators -->
                    <ol class='carousel-indicators'>
                        <li data-target='#luncuran' data-slide-to="0" class='active'></li>
                        <li data-target='#luncuran' data-slide-to="1"></li>
                        <li data-target='#luncuran' data-slide-to="2"></li>
                        <li data-target='#luncuran' data-slide-to="3"></li>
                        <li data-target='#luncuran' data-slide-to="4"></li>
                        <li data-target='#luncuran' data-slide-to="5"></li>
                        <li data-target='#luncuran' data-slide-to="6"></li>
                        <li data-target='#luncuran' data-slide-to="7"></li>
                        <li data-target='#luncuran' data-slide-to="8"></li>
                        <li data-target='#luncuran' data-slide-to="9"></li>
                    </ol>
                    <div class='carousel-inner'>

                        <div class='item active'>
                            <img src="https://negari.desa.id/desa/upload/artikel/sedang_1573628097_72595457_497197657543417_5679668093714956288_n.jpg" />
                            <div class='luncuran-caption'>
                                <div class='luncuran-body'>
                                    <h2>Kegiatan di Kantor Desa Negari (13 November 2019)</h2>
                                    <div class='hidden-xs'><a href='https://negari.desa.id/index.php/first/artikel/107' class='btn btn-success btn-lg'><i class='fa fa-newspaper-o'></i> Baca Artikel</a></div>
                                </div>
                            </div>
                        </div>
                        <div class='item '>
                            <img src="https://negari.desa.id/desa/upload/artikel/sedang_1572604506_APBDes+2019.jpg" />
                            <div class='luncuran-caption'>
                                <div class='luncuran-body'>
                                    <h2>APBDes Negari Tahun 2019</h2>
                                    <div class='hidden-xs'><a href='https://negari.desa.id/index.php/first/artikel/106' class='btn btn-success btn-lg'><i class='fa fa-newspaper-o'></i> Baca Artikel</a></div>
                                </div>
                            </div>
                        </div>
                        <div class='item '>
                            <img src="https://negari.desa.id/desa/upload/artikel/sedang_1572600684_1a.jpg" />
                            <div class='luncuran-caption'>
                                <div class='luncuran-body'>
                                    <h2>Pemberian Bantuan Kepada anak Yatim Piatu Desa Negari</h2>
                                    <div class='hidden-xs'><a href='https://negari.desa.id/index.php/first/artikel/105' class='btn btn-success btn-lg'><i class='fa fa-newspaper-o'></i> Baca Artikel</a></div>
                                </div>
                            </div>
                        </div>
                        <div class='item '>
                            <img src="https://negari.desa.id/desa/upload/artikel/sedang_1572317107_bumdes_20170903_135819.jpg" />
                            <div class='luncuran-caption'>
                                <div class='luncuran-body'>
                                    <h2>BADAN USAHA MILIK DESA (BUMDES) TRI ARTA GUNA DESA NEGARI</h2>
                                    <div class='hidden-xs'><a href='https://negari.desa.id/index.php/first/artikel/104' class='btn btn-success btn-lg'><i class='fa fa-newspaper-o'></i> Baca Artikel</a></div>
                                </div>
                            </div>
                        </div>
                        <div class='item '>
                            <img src="https://negari.desa.id/desa/upload/artikel/sedang_1572317547_lpm.png" />
                            <div class='luncuran-caption'>
                                <div class='luncuran-body'>
                                    <h2>LPM</h2>
                                    <div class='hidden-xs'><a href='https://negari.desa.id/index.php/first/artikel/62' class='btn btn-success btn-lg'><i class='fa fa-newspaper-o'></i> Baca Artikel</a></div>
                                </div>
                            </div>
                        </div>
                        <div class='item '>
                            <img src="https://negari.desa.id/desa/upload/artikel/sedang_1572317748_karang+taruna.jpg" />
                            <div class='luncuran-caption'>
                                <div class='luncuran-body'>
                                    <h2>Karang Taruna</h2>
                                    <div class='hidden-xs'><a href='https://negari.desa.id/index.php/first/artikel/64' class='btn btn-success btn-lg'><i class='fa fa-newspaper-o'></i> Baca Artikel</a></div>
                                </div>
                            </div>
                        </div>
                        <div class='item '>
                            <img src="https://negari.desa.id/desa/upload/artikel/sedang_1555905938_WhatsApp+Image+2019-04-21+at+9.04.38+PM.jpeg" />
                            <div class='luncuran-caption'>
                                <div class='luncuran-body'>
                                    <h2>Sejarah Desa Negari</h2>
                                    <div class='hidden-xs'><a href='https://negari.desa.id/index.php/first/artikel/99' class='btn btn-success btn-lg'><i class='fa fa-newspaper-o'></i> Baca Artikel</a></div>
                                </div>
                            </div>
                        </div>
                        <div class='item '>
                            <img src="https://negari.desa.id/desa/upload/artikel/sedang_1572069863_sudah+di+edit+2.jpg" />
                            <div class='luncuran-caption'>
                                <div class='luncuran-body'>
                                    <h2>Penyerahan Bantuan Sembako untuk penyandang Disabilitas Desa Negari</h2>
                                    <div class='hidden-xs'><a href='https://negari.desa.id/index.php/first/artikel/103' class='btn btn-success btn-lg'><i class='fa fa-newspaper-o'></i> Baca Artikel</a></div>
                                </div>
                            </div>
                        </div>
                        <div class='item '>
                            <img src="https://negari.desa.id/desa/upload/artikel/sedang_1569459942_WhatsApp+Image+2019-09-25+at+14.00.55.jpeg" />
                            <div class='luncuran-caption'>
                                <div class='luncuran-body'>
                                    <h2>MUSRENBANGDES NEGARI</h2>
                                    <div class='hidden-xs'><a href='https://negari.desa.id/index.php/first/artikel/102' class='btn btn-success btn-lg'><i class='fa fa-newspaper-o'></i> Baca Artikel</a></div>
                                </div>
                            </div>
                        </div>
                        <div class='item '>
                            <img src="https://negari.desa.id/desa/upload/artikel/sedang_1567399882_69297682_452096992053484_8771161802206609408_o.jpg" />
                            <div class='luncuran-caption'>
                                <div class='luncuran-body'>
                                    <h2>Kantor Desa Negari</h2>
                                    <div class='hidden-xs'><a href='https://negari.desa.id/index.php/first/artikel/101' class='btn btn-success btn-lg'><i class='fa fa-newspaper-o'></i> Baca Artikel</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#luncuran" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#luncuran" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#marquee').on('cycle-initialized', function(event, opts) {
                $('div.marquee-box').removeClass('hide');
            });
            $('#marquee').cycle({
                fx: 'carousel',
                speed: 20000,
                timeout: '10',
                easing: 'linear',
                pauseOnHover: true,
                slides: '> span',
                throttleSpeed: true
            });
        });
    </script>

    <div class='marquee-box hide'>
        <div id="marquee">
            <span>Selamat Datang di Website Resmi Desa Negari , Kecamatan Banjarangkan, Kabupaten Klungkung. Media komunikasi dan transparansi Pemerintah Desa Negari untuk seluruh masyarakat.</span>
            <span>&nbsp;</span>
        </div>
    </div>
    <script language='javascript'>
        $(document).ready(function() {
            $('.carousel').carousel({
                interval: 10000, // 10 detik
            });
        });
    </script>

    <div id='batanga'>
        <div class='container'>
            <div class='row mt20'>
                <div class='col-md-8 mb20'>

                    <h1 class='text-title content-title mt0 mb20'><span>Artikel Terkini</span></h1>

                    <div class='list-view artikel-daftar'>
                        <div class='btd-card btd-card-top mb20'>
                            <h3 class='artikel-judul title mt0'><a href='https://negari.desa.id/index.php/first/artikel/107'>Kegiatan di Kantor Desa Negari (13 November 2019)</a></h3>
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

                        <div class='clearfix mb20'></div>
                        <div class='btd-card btd-card-top mb20'>
                            <h3 class='artikel-judul title mt0'><a href='https://negari.desa.id/index.php/first/artikel/106'>APBDes Negari Tahun 2019</a></h3>
                            <div class='artikel-waktu text-muted'>

                                <span class='mr10'><i class='fa fa-user'></i>  ADMIN DESA NEGARI</span> <span><i class='fa fa-tag'></i> <a href='https://negari.desa.id/index.php/first/kategori/24'>Transparansi Keuangan</a></span>
                            </div>
                            <div class='clearfix mt20'>
                                <div class='artikel-gambar-kecil'>
                                    <div class='artikel-opensid-img'>
                                        <img src='https://negari.desa.id/desa/upload/artikel/kecil_1572604506_APBDes+2019.jpg' alt='APBDes Negari Tahun 2019' />
                                    </div>
                                </div>
                                <div class='artikel-konten'>Anggaran Pendapatan dan Belanja Desa Negari, Kecamatan Banjarangkan, Kabupaten Klungkung. <a href='https://negari.desa.id/index.php/first/artikel/106'>..selengkapnya</a></div>
                            </div>
                        </div>

                        <div class='clearfix mb20'></div>
                        <div class='btd-card btd-card-top mb20'>
                            <h3 class='artikel-judul title mt0'><a href='https://negari.desa.id/index.php/first/artikel/105'>Pemberian Bantuan Kepada anak Yatim Piatu Desa Negari</a></h3>
                            <div class='artikel-waktu text-muted'>

                                <span class='mr10'><i class='fa fa-user'></i>  ADMIN DESA NEGARI</span> <span><i class='fa fa-tag'></i> <a href='https://negari.desa.id/index.php/first/kategori/1'>Berita Desa</a></span>
                            </div>
                            <div class='clearfix mt20'>
                                <div class='artikel-gambar-kecil'>
                                    <div class='artikel-opensid-img'>
                                        <img src='https://negari.desa.id/desa/upload/artikel/kecil_1572600684_1a.jpg' alt='Pemberian Bantuan Kepada anak Yatim Piatu Desa Negari' />
                                    </div>
                                </div>
                                <div class='artikel-konten'>Pemberian bantuan kepada anak yatim piatu Desa Negari berjalan dengan lancar (01 November 2019) bertempat di Ruang Rapat Tri Satya Mandala Kantor Desa Negari bantuan tersebut berupa sarana sekolah. diharapkan bantuan ini dapat bermanfaat bagi penerima. Bantuan tersebut diserahkan oleh BKAD Kecamatan "I Ketut Murtika", Sekretaris Desa "I Wayan Kesumalara" didampingi oleh Kasi Kesejahteraan "I Ketut Darta", Perangkat <a href='https://negari.desa.id/index.php/first/artikel/105'>..selengkapnya</a></div>
                            </div>
                        </div>

                        <div class='clearfix mb20'></div>
                        <div class='btd-card btd-card-top mb20'>
                            <h3 class='artikel-judul title mt0'><a href='https://negari.desa.id/index.php/first/artikel/104'>BADAN USAHA MILIK DESA (BUMDES) TRI ARTA GUNA DESA NEGARI</a></h3>
                            <div class='artikel-waktu text-muted'>

                                <span class='mr10'><i class='fa fa-user'></i>  ADMIN DESA NEGARI</span>
                            </div>
                            <div class='clearfix mt20'>
                                <div class='artikel-gambar-kecil'>
                                    <div class='artikel-opensid-img'>
                                        <img src='https://negari.desa.id/desa/upload/artikel/kecil_1572317107_bumdes_20170903_135819.jpg' alt='BADAN USAHA MILIK DESA (BUMDES) TRI ARTA GUNA DESA NEGARI' />
                                    </div>
                                </div>
                                <div class='artikel-konten'>SUSUNAN KEPENGURUSAN&nbsp; BADAN USAHA MILIK DESA (BUM DESA) "TRI ARTA GUNA" SK PERBEKEL , NOMOR : 6 TAHUN 2017 &nbsp; PENANGGUNG JAWAB "PERBEKEL DESA NEGARI" BADAN PENGURUS : KETUA : I MADE SUARYANA SEKRETARIS : NI NENGAH SUMARTINI BENDAHARA : NI KETUT MENTIKAWATI ANGGOTA : I WAYAN SURADNYA, I WAYAN PASEK &nbsp; BADAN PENGAWAS DAN PEMERIKSA : KETUA : I GUSTI NGURAH BAGUS MAHENDRA ANGGOTA : I <a href='https://negari.desa.id/index.php/first/artikel/104'>..selengkapnya</a></div>
                            </div>
                        </div>

                        <div class='clearfix mb20'></div>
                        <div class='btd-card btd-card-top mb20'>
                            <h3 class='artikel-judul title mt0'><a href='https://negari.desa.id/index.php/first/artikel/62'>LPM</a></h3>
                            <div class='artikel-waktu text-muted'>

                                <span class='mr10'><i class='fa fa-user'></i>  ADMIN DESA NEGARI</span>
                            </div>
                            <div class='clearfix mt20'>
                                <div class='artikel-gambar-kecil'>
                                    <div class='artikel-opensid-img'>
                                        <img src='https://negari.desa.id/desa/upload/artikel/kecil_1572317547_lpm.png' alt='LPM' />
                                    </div>
                                </div>
                                <div class='artikel-konten'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Lembaga Pemberdayaan Masyarakat (LPM) adalah salah satu lembaga kemasyaratan yang berada di desa. Lembaga Pemberdayaan Masyarakat mempunyai tugas menyusun rencana pembangunan secara partisipatif, menggerakkan swadaya gotong royong masyarakat, melaksanakan dan mengendalikan pembangunan. FUNGSI LPM penampungan dan penyaluran aspirasi masyarakat dalam pembangunan; penanaman <a href='https://negari.desa.id/index.php/first/artikel/62'>..selengkapnya</a></div>
                            </div>
                        </div>

                        <div class='clearfix mb20'></div>
                        <div class='btd-card btd-card-top mb20'>
                            <h3 class='artikel-judul title mt0'><a href='https://negari.desa.id/index.php/first/artikel/64'>Karang Taruna</a></h3>
                            <div class='artikel-waktu text-muted'>

                                <span class='mr10'><i class='fa fa-user'></i>  ADMIN DESA NEGARI</span>
                            </div>
                            <div class='clearfix mt20'>
                                <div class='artikel-gambar-kecil'>
                                    <div class='artikel-opensid-img'>
                                        <img src='https://negari.desa.id/desa/upload/artikel/kecil_1572317748_karang+taruna.jpg' alt='Karang Taruna' />
                                    </div>
                                </div>
                                <div class='artikel-konten'>TUGAS &nbsp;KARANGTARUNA &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; menanggulangi berbagai masalah kesejahteraan sosial terutama yang dihadapi generasi muda, baik yang bersifat preventif, rehabilitatif, maupun pengembangan potensi generasi muda di lingkungannya FUNGSI KARANGTARUNA penyelenggara usaha kesejahteraan sosial; penyelenggara pendidikan dan pelatihan bagi masyarakat; penyelenggara <a href='https://negari.desa.id/index.php/first/artikel/64'>..selengkapnya</a></div>
                            </div>
                        </div>

                        <div class='clearfix mb20'></div>
                        <div class='btd-card btd-card-top mb20'>
                            <h3 class='artikel-judul title mt0'><a href='https://negari.desa.id/index.php/first/artikel/99'>Sejarah Desa Negari</a></h3>
                            <div class='artikel-waktu text-muted'>

                                <span class='mr10'><i class='fa fa-user'></i>  ADMIN DESA NEGARI</span>
                            </div>
                            <div class='clearfix mt20'>
                                <div class='artikel-gambar-kecil'>
                                    <div class='artikel-opensid-img'>
                                        <img src='https://negari.desa.id/desa/upload/artikel/kecil_1555905938_WhatsApp+Image+2019-04-21+at+9.04.38+PM.jpeg' alt='Sejarah Desa Negari' />
                                    </div>
                                </div>
                                <div class='artikel-konten'>&nbsp;&nbsp;&nbsp;&nbsp; Berdasarkan sumber babad bendesa bahwa Desa Negari tergolong desa tua yang dibangun sesudah tahun caka 1541 (tahun 1619 Masehi) oleh sekelompok masyarakat yang berasal dari Sarimertha, Negari dan Tegal besar. &nbsp;&nbsp;&nbsp;&nbsp; Desa Negari berasal dari kata Negarin dan asal usul Desa Negari adalah mawang Singapadu/Gianyar sebagai utusan negari menjadi pacek/benteng wilayah Gianyar. <a href='https://negari.desa.id/index.php/first/artikel/99'>..selengkapnya</a></div>
                            </div>
                        </div>

                        <div class='clearfix mb20'></div>
                        <div class='btd-card btd-card-top mb20'>
                            <h3 class='artikel-judul title mt0'><a href='https://negari.desa.id/index.php/first/artikel/103'>Penyerahan Bantuan Sembako untuk penyandang Disabilitas Desa Negari</a></h3>
                            <div class='artikel-waktu text-muted'>

                                <span class='mr10'><i class='fa fa-user'></i>  ADMIN DESA NEGARI</span> <span><i class='fa fa-tag'></i> <a href='https://negari.desa.id/index.php/first/kategori/1'>Berita Desa</a></span>
                            </div>
                            <div class='clearfix mt20'>
                                <div class='artikel-gambar-kecil'>
                                    <div class='artikel-opensid-img'>
                                        <img src='https://negari.desa.id/desa/upload/artikel/kecil_1572069863_sudah+di+edit+2.jpg' alt='Penyerahan Bantuan Sembako untuk penyandang Disabilitas Desa Negari' />
                                    </div>
                                </div>
                                <div class='artikel-konten'>Jumat, 25 Oktober 2019 betempat di Kantor Desa Negari, Penyerahan Bantuan Sembako untuk penyandang Disabilitas Desa Negari yang diserahkan langsung oleh Sekretaris Desa "I Wayan Kesumalara"&nbsp;. Pemberian bantuan sembako ini berupa beras, telor dan susu. <a href='https://negari.desa.id/index.php/first/artikel/103'>..selengkapnya</a></div>
                            </div>
                        </div>

                        <div class='clearfix mb20'></div>
                    </div>
                    <!-- .list-view -->
                    <div>
                        <ul class='pagination'>
                            <li><a href="https://negari.desa.id/index.php/first/index/1" title='Halaman Pertama'>&laquo;</a></li>
                            <li class='active'><a href="https://negari.desa.id/index.php/first/index/1" title='Halaman 1'>1</a></li>
                            <li><a href="https://negari.desa.id/index.php/first/index/2" title='Halaman 2'>2</a></li>
                            <li><a href="https://negari.desa.id/index.php/first/index/3" title='Halaman 3'>3</a></li>
                            <li><a href="https://negari.desa.id/index.php/first/index/4" title='Halaman 4'>4</a></li>
                            <li><a href="https://negari.desa.id/index.php/first/index/5" title='Halaman 5'>5</a></li>
                            <li><a href="https://negari.desa.id/index.php/first/index/2" title='Halaman Selanjutnya'>&rarr;</a></li>
                            <li><a href="https://negari.desa.id/index.php/first/index/5" title='Halaman Terakhir'>&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                <div class='col-md-4'>

                    <!-- Daftar Widget disebelah kanan -->

                    <div class='btd-right-menu'>
                        <div class='row'>
                            <div class='col-sm-6 col-md-12'>
                                <div class='list-frame'>
                                    <div class='list-view'>
                                        <h1 class='title'><span>Pengaduan Online</span></h1>
                                        <div>
                                            <a href="https://wa.me/628561333111?text=Saya mau .........">
                                                <img src="https://aan.desa.id/wa.jpg" alt="Pengaduan Online" style="width:42px;height:42px;border:0;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class='mb20'></div>
                            </div>
                            <div class='col-sm-6 col-md-12'>
                                <div class='list-frame'>
                                    <div class='list-view'>
                                        <h1 class='title'><span>Peta Desa</span></h1>
                                        <div>
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15781.33166144278!2d115.36686522718249!3d-8.563951401508003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd21407275927c7:0x5030bfbca832130!2sNegari,+Banjarangkan,+Klungkung+Regency,+Bali!5e0!3m2!1sen!2sid!4v1546483850806" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class='mb20'></div>
                            </div>
                            <div class='clearfix visible-sm'></div>
                            <div class='col-sm-6 col-md-12'>
                                <!-- widget Layanan Mandiri -->
                                <div class="box box-primary box-solid">
                                    <div class="box-header">
                                        <h3 class="box-title"><i class="fa fa-user"></i> Layanan Mandiri</h3>
                                        <br /> Silakan datang atau hubungi operator desa untuk mendapatkan kode PIN anda.
                                    </div>
                                    <div class="box-body">
                                        <h4>Masukan NIK dan PIN</h4>
                                        <form action="https://negari.desa.id/index.php/first/auth" method="post">
                                            <input name="nik" type="text" placeholder="NIK" style="margin-left:0px" value="" required>
                                            <input name="pin" type="password" placeholder="PIN" style="margin-left:0px" value="" required>
                                            <button type="submit" id="but" style="margin-left:0px">Masuk</button>
                                        </form>
                                    </div>
                                </div>

                                <div class='mb20'></div>
                            </div>
                            <div class='col-sm-6 col-md-12'>
                                <!-- widget Statistik -->

                                <div class="box box-info box-solid">
                                    <div class="box-header">
                                        <h3 class="box-title"><a href="https://negari.desa.id/index.php/first/statistik/1"><i class="fa fa-bar-chart"></i> Statistik Negari</a></h3>
                                    </div>
                                    <div class="box-body">
                                        <script type="text/javascript">
                                            $(function() {
                                                var chart_widget;
                                                $(document).ready(function() {
                                                    // Build the chart
                                                    chart_widget = new Highcharts.Chart({
                                                        chart: {
                                                            renderTo: 'container_widget',
                                                            plotBackgroundColor: null,
                                                            plotBorderWidth: null,
                                                            plotShadow: false
                                                        },
                                                        title: {
                                                            text: 'Statistik Penduduk'
                                                        },
                                                        yAxis: {
                                                            title: {
                                                                text: 'Jumlah'
                                                            }
                                                        },
                                                        legend: {
                                                            enabled: false
                                                        },
                                                        plotOptions: {
                                                            series: {
                                                                colorByPoint: true
                                                            },
                                                            column: {
                                                                pointPadding: 0,
                                                                borderWidth: 0
                                                            }
                                                        },
                                                        series: [{
                                                            type: 'column',
                                                            name: 'Populasi',
                                                            data: [
                                                                ['LAKI-LAKI', 1521],
                                                                ['PEREMPUAN', 1509],
                                                                ['TOTAL', 3030],
                                                            ]
                                                        }]
                                                    });
                                                });

                                            });
                                        </script>
                                        <script src="https://negari.desa.id//assets/js/highcharts/highcharts.js"></script>
                                        <div id="container_widget" style="width: 100%; height: 150px; margin: 0 auto"></div>
                                    </div>
                                </div>

                                <div class='mb20'></div>
                            </div>
                            <div class='clearfix visible-sm'></div>
                            <div class='col-sm-6 col-md-12'>
                                <!-- widget Sinergi Program-->

                                <style>
                                    #sinergi_program {
                                        text-align: center;
                                    }
                                    
                                    #sinergi_program table {
                                        margin: auto;
                                    }
                                    
                                    #sinergi_program img {
                                        max-width: 100%;
                                        max-height: 100%;
                                        transition: all 0.5s;
                                        -o-transition: all 0.5s;
                                        -moz-transition: all 0.5s;
                                        -webkit-transition: all 0.5s;
                                    }
                                    
                                    #sinergi_program img:hover {
                                        transition: all 0.3s;
                                        -o-transition: all 0.3s;
                                        -moz-transition: all 0.3s;
                                        -webkit-transition: all 0.3s;
                                        transform: scale(1.5);
                                        -moz-transform: scale(1.5);
                                        -o-transform: scale(1.5);
                                        -webkit-transform: scale(1.5);
                                        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.5);
                                    }
                                </style>
                                <div class="box box-warning box-solid">
                                    <div class="box-header">
                                        <h3 class="box-title"><i class="fa fa-external-link"></i> Sinergi Program</h3>
                                    </div>
                                    <div id="sinergi_program" class="box-body">
                                        <table>
                                            <tr>
                                                <td>
                                                    <span style="display: inline-block; width: 48%">
                <a href="http://prodeskel.binapemdes.kemendagri.go.id/mpublik/" target="_blank"><img src="https://negari.desa.id/desa/upload/widget/1539351074_prodeskel.JPG" alt="Prodeskel" /></a>
              </span>
                                                    <span style="display: inline-block; width: 48%">
                <a href="https://sse3.pajak.go.id/" target="_blank"><img src="https://negari.desa.id/desa/upload/widget/1539351074_sse.jpg" alt="Pajak Online" /></a>
              </span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class='mb20'></div>
                            </div>
                            <div class='col-sm-6 col-md-12'>
                                <link type='text/css' href="https://negari.desa.id/assets/css/slider.css" rel='Stylesheet' />
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#aparatur_desa').cycle({
                                            pauseOnHover: true,
                                            // Untuk menghilangkan titik-titik di cycle pager
                                            pagerTemplate: '<span></span>'
                                        });
                                    });
                                </script>
                                <style type="text/css">
                                    #aparatur_desa img {
                                        width: 100%;
                                    }
                                    
                                    #aparatur_desa .cycle-pager span {
                                        height: 7px;
                                        width: 7px;
                                        margin: 0 3px;
                                    }
                                </style>

                                <!-- widget Aparatur Desa -->
                                <div class="box box-warning box-solid">
                                    <div class="box-header">
                                        <h3 class="box-title"><i class="fa fa-user"></i> Aparatur Desa</h3>
                                    </div>
                                    <div class="box-body">

                                        <div id="aparatur_desa">
                                            <span class="cycle-pager"></span>
                                            <!-- Untuk membuat tanda bulat atau link pada slider -->
                                            <img src="https://negari.desa.id/desa/upload/user_pict/NvmRsO_WhatsApp+Image+2019-04-08+at+6.31.03+PM.jpeg" alt="Perbekel Desa">
                                            <img src="https://negari.desa.id/desa/upload/user_pict/pIQFaY_WhatsApp+Image+2019-10-22+at+14.38.58.jpg" alt="Sekretaris Desa">
                                            <img src="https://negari.desa.id/desa/upload/user_pict/LqQA94_astin.jpg" alt="Kaur Tata Usaha dan Umum">
                                            <img src="https://negari.desa.id/desa/upload/user_pict/NFRgnj_landri.jpg" alt="Kasi Pemerintahan">
                                            <img src="https://negari.desa.id/desa/upload/user_pict/Uvc5ns_gst+ngr+nurada.jpg" alt="Kaur Keuangan">
                                            <img src="https://negari.desa.id/desa/upload/user_pict/zk6Ki8_masning.jpg" alt="Kaur Perencanaan">
                                            <img src="https://negari.desa.id/desa/upload/user_pict/iTjNME_darta.jpg" alt="Kasi Kesejahteraan">
                                            <img src="https://negari.desa.id/desa/upload/user_pict/pHBiOj_nirmala.jpg" alt="Kasi Pelayanan">
                                            <img src="https://negari.desa.id/desa/upload/user_pict/Dqf3U7_buk+mentik.jpg" alt="Kelihan Banjar Dinas Tegal Besar">
                                            <img src="https://negari.desa.id/desa/upload/user_pict/A0YIic_suradnya.jpg" alt="Kelihan Banjar Dinas Negari">
                                            <img src="https://negari.desa.id/desa/upload/user_pict/mokCR6_pasek.jpg" alt="Kelihan Banjar Dinas Sarimertha">
                                            <img src="https://negari.desa.id/desa/upload/user_pict/qr8UCD_IMG20190225231656.jpg" alt="Staf Perangkat Desa">
                                            <img src="https://negari.desa.id/desa/upload/user_pict/meJwEK_received_278624969636036.jpg" alt="Staf Perangkat Desa">
                                        </div>
                                    </div>
                                </div>
                                <div class='mb20'></div>
                            </div>
                            <div class='clearfix visible-sm'></div>
                            <div class='col-sm-6 col-md-12'>
                                <!-- widget SocMed -->

                                <div class="box box-default">
                                    <div class="box-header">
                                        <h3 class="box-title"><i class="fa fa-globe"></i> Info Media Sosial</h3>
                                    </div>
                                    <div class="box-body">
                                    </div>
                                </div>

                                <div class='mb20'></div>
                            </div>
                            <div class='col-sm-6 col-md-12'>
                                <!-- widget Menu-->

                                <div class="box box-primary box-solid">
                                    <div class="box-header">
                                        <h3 class="box-title"><i class="fa fa-bars"></i> Kategori</h3>
                                    </div>
                                    <div class="box-body">
                                        <ul id="ul-menu" class="main">
                                            <li><a href="https://negari.desa.id/index.php/first/kategori/1">Berita Desa</a>
                                            </li>
                                            <li><a href="https://negari.desa.id/index.php/first/kategori/4">Agenda Desa</a>
                                            </li>
                                            <li><a href="https://negari.desa.id/index.php/first/kategori/5">Peraturan Desa</a>
                                            </li>
                                            <li><a href="https://negari.desa.id/index.php/first/kategori/23">Perpustakaan Desa</a>
                                            </li>
                                            <li><a href="https://negari.desa.id/index.php/first/kategori/24">Transparansi Keuangan</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class='mb20'></div>
                            </div>
                            <div class='clearfix visible-sm'></div>
                            <div class='col-sm-6 col-md-12'>
                                <!-- widget Arsip Artikel -->

                                <div class="box box-primary box-solid">
                                    <div class="box-header">
                                        <h3 class="box-title"><a href="https://negari.desa.id/index.php/first/arsip"><i class="fa fa-archive"></i> Arsip Artikel</a></h3>
                                    </div>
                                    <div class="box-body">
                                        <ul id="ul-menu">
                                            <li><a href="https://negari.desa.id/index.php/first/artikel/107">Kegiatan di Kantor Desa Negari (13 November 2019)</a></li>
                                            <li><a href="https://negari.desa.id/index.php/first/artikel/106">APBDes Negari Tahun 2019</a></li>
                                            <li><a href="https://negari.desa.id/index.php/first/artikel/105">Pemberian Bantuan Kepada anak Yatim Piatu Desa Negari</a></li>
                                            <li><a href="https://negari.desa.id/index.php/first/artikel/104">BADAN USAHA MILIK DESA (BUMDES) TRI ARTA GUNA DESA NEGARI</a></li>
                                            <li><a href="https://negari.desa.id/index.php/first/artikel/62">LPM</a></li>
                                            <li><a href="https://negari.desa.id/index.php/first/artikel/64">Karang Taruna</a></li>
                                            <li><a href="https://negari.desa.id/index.php/first/artikel/99">Sejarah Desa Negari</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class='mb20'></div>
                            </div>
                            <div class='col-sm-6 col-md-12'>
                                <!-- Widget Agenda -->

                                <div class='mb20'></div>
                            </div>
                            <div class='clearfix visible-sm'></div>
                            <div class='col-sm-6 col-md-12'>
                                <!-- widget Galeri-->
                                <div class="box box-warning box-solid">
                                    <div class="box-header">
                                        <h3 class="box-title"><a href="https://negari.desa.id/index.php/first/gallery"><i class="fa fa-camera"></i> Galeri Foto</a></h3>
                                    </div>
                                    <div class="box-body">
                                        <ul id="li-komentar" class="sidebar-latest">
                                        </ul>
                                    </div>
                                </div>

                                <div class='mb20'></div>
                            </div>
                            <div class='col-sm-6 col-md-12'>
                                <!-- widget Statistik Pengunjung -->

                                <div class="box box-success">
                                    <div class="box-header">
                                        <h3 class="box-title"><i class="fa fa-bar-chart-o"></i> Statistik Pengunjung</h3>
                                    </div>
                                    <div class="box-body">
                                        <div id="container" align="center">
                                            <table cellpadding="0" cellspacing="0" class="counter">
                                                <tr>
                                                    <td> Hari ini</td>
                                                    <td><img src="https://negari.desa.id//assets/images/counter/0.gif" align="absmiddle" /><img src="https://negari.desa.id//assets/images/counter/0.gif" align="absmiddle" /><img src="https://negari.desa.id//assets/images/counter/0.gif" align="absmiddle" /><img src="https://negari.desa.id//assets/images/counter/0.gif" align="absmiddle" /><img src="https://negari.desa.id//assets/images/counter/animasi/7.gif" align="absmiddle" /></td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" height="20">Kemarin </td>
                                                    <td valign="middle"><img src="https://negari.desa.id//assets/images/counter/0.gif" align="absmiddle" /><img src="https://negari.desa.id//assets/images/counter/0.gif" align="absmiddle" /><img src="https://negari.desa.id//assets/images/counter/0.gif" align="absmiddle" /><img src="https://negari.desa.id//assets/images/counter/7.gif" align="absmiddle" /><img src="https://negari.desa.id//assets/images/counter/animasi/9.gif" align="absmiddle" /></td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" height="20">Jumlah pengunjung</td>
                                                    <td valign="middle"><img src="https://negari.desa.id//assets/images/counter/1.gif" align="absmiddle" /><img src="https://negari.desa.id//assets/images/counter/6.gif" align="absmiddle" /><img src="https://negari.desa.id//assets/images/counter/6.gif" align="absmiddle" /><img src="https://negari.desa.id//assets/images/counter/3.gif" align="absmiddle" /><img src="https://negari.desa.id//assets/images/counter/animasi/8.gif" align="absmiddle" /></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class='mb20'></div>
                            </div>
                            <div class='clearfix visible-sm'></div>
                            <div class='col-sm-6 col-md-12'>
                                <!-- widget Komentar-->
                                <div class="box box-primary box-solid">
                                    <div class="box-header">
                                        <h3 class="box-title"><i class="fa fa-comments"></i> Komentar Terkini</h3>
                                    </div>
                                    <div class="box-body">
                                        <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" direction="up" width="100%" height="100" align="center" behavior=”alternate”>
                                            <ul class="sidebar-latest" id="li-komentar">
                                            </ul>
                                        </marquee>
                                    </div>
                                </div>
                                <div class='mb20'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="footer">
        <div class='container'>
            <div class='row'>
                <div class='col-md-6 col-xs-3 lang'>
                    <a href='#' class='btn btn-warning'><i class='fa fa-arrow-up'></i></a>
                </div>
                <div class='col-md-6 col-xs-9 text-right'>
                    <div class='footer-copyleft'><a href="https://www.facebook.com/groups/opensid/" target='_new' title='Forum'>Komunitas</a> <a href="https://negari.desa.id/index.php/siteman" target='_new' title='Login'>OpenSID</a> <a href="https://sid.my.id/" target='_new' title='SID'>Klungkung</a> &copy; 2019</div>
                    <div>Content by &reg; Desa Negari Kec. Banjarangkan, Kab. Klungkung
                        <br />
                    </div>
                    <i class="fa fa-phone-square"></i>0366 25935 - <a href="mailto:info@negari.desa.id"><i class="fa fa-envelope"></i>info@negari.desa.id</a>
                    <br />
                    <a href="http://negari.desa.id"><i class="fa fa-globe"></i>http://negari.desa.id</a>
                    <div>
                        <a href="" target="_blank"><i class="fa fa-facebook-square fa-lg"></i></a>
                        <a href="" target="_blank"><i class="fa fa-twitter-square fa-lg"></i></a>
                        <a href="" target="_blank"><i class="fa fa-youtube-square fa-lg"></i></a>
                        <a href="" target="_blank"><i class="fa fa-google-plus-square fa-lg"></i></a>
                        <a href="" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>