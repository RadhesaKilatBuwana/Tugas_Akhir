<!-- <div class="container">
    <?php
    $blog = $posts;
    $blog_cat = $categories;
    $blogs_chunk = array_chunk($blog, 2);
    $badge_class = ["badge-primary", "badge-secondary", "badge-success", "badge-danger", "badge-warning", "badge-info", "badge-dark"];
    ?>
    <?php if ($blog === null) : ?>
    <div class="row mb-2">
        <h2>No blogs are present </h2>
    </div>
    <?php else : ?>
        <?php foreach ($blogs_chunk as $key => $items) : ?>
            <div class="row mb-2">
                <?php foreach ($items as $key => $value) : ?>
                    <div class="col-md-6">
                        <div class="card mb-3">
                            <div class="row no-gutters border rounded overflow-hidden flex-md-row">
                                <div class="card-body">
                                    <?php $temp_array = $blog_cat[$value['blog_id']]; ?>
                                    <?php foreach ($temp_array as $key => $catg) : ?>
                                        <?php $single_badge = array_rand($badge_class, 1); ?>
                                        <a href="/category/<?= $catg ?>" class="d-inline-block mb-2 badge <?=$badge_class[$single_badge]?>"><?= $catg ?></a>
                                    <?php endforeach; ?>
                                    <h2 class="card-title mb-0"><?= $value['blog_title'] ?></h2>
                                    <p class="card-text mb-1"><small class="text-muted"><?=$value['blog_created_time'] ?></small></p>
                                    <p class="card-text"><?= strip_tags(htmlspecialchars_decode(word_limiter($value['blog_body'], 19)), ENT_HTML5)?></p>
                                    <a href="/posts/<?= $value['blog_id'] ?>" class="stretched-link">Continue reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div> -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Include Revolution Slider CSS and JS files -->
    <link rel="stylesheet" type="text/css" href="path/to/revolution/css/settings.css">
    <script type="text/javascript" src="path/to/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="path/to/revolution/js/jquery.themepunch.revolution.min.js"></script>
</head>

<div class="main-content">
    <section id="benar" class="divider">
    </section>

    <<section>
        <div class="container pt-0 pb-50">
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="border-left-2px border-theme-colored mt-60 pl-15">
                            <h2 class="text-theme-colored font-36 mt-0 mb-0">Sejarah RSUD Ciamis</h2>
                            <p class="text-gray font-24 m-5">
                                Rumah Sakit Umum Daerah Ciamis berdiri sejak tahun 1942 dengan luas 19.305 m2, terletak di Jalan Rumah Sakit Nomor 76 Desa Ciamis, Kecamatan Ciamis, Kabupaten Ciamis, di bawah kepemimpinan Dr. M. Suwarto, yang juga menjabat sebagai Kepala Dinas Kesehatan Rakyat Kabupaten Ciamis. Pada awalnya, kapasitas tempat tidur terbatas, hanya 40 tempat tidur yang terdiri dari Ruang Rawat Inap kelas I dan Ruang Rawat Inap kelas II, dengan tenaga kerja sebanyak 55 orang.
                            </p>
                            <p class="text-gray font-24 m-5">
                                Perkembangan RSUD Ciamis pada tahun 1958-1965 terhambat oleh krisis politik dan ekonomi. Krisis ini menyebabkan penurunan jumlah kunjungan dan pendapatan rumah sakit, serta mempengaruhi kelancaran operasional dan pengembangannya. Pada periode ini, terjadi pergantian kepemimpinan dari dr. M. Suwarto ke dr. Supandi, yang juga menjabat sebagai Kepala Dinas Kesehatan Rakyat Kabupaten Ciamis. Pada tahun 1978, melalui surat keputusan Bupati, RSUD Ciamis berubah status menjadi Rumah Sakit Kelas D, dan dr. Supandi digantikan oleh dr. Hj. Hasanah sebagai Direktur hingga tahun 1989.
                            </p>
                            <p class="text-gray font-24 m-5">
                                Pada periode 1990-1995, pelayanan kesehatan di RSUD Ciamis mengalami peningkatan signifikan. Rumah sakit menjadi sarana rujukan yang sangat dibutuhkan oleh masyarakat, baik dari kota maupun daerah terpencil. Selain peningkatan sarana dan prasarana, RSUD Ciamis mulai dilengkapi dengan Prosedur Kerja Tetap (Protap) sebagai panduan bagi karyawan. Melalui surat keputusan Menteri Kesehatan pada tahun 1994, status RSUD Ciamis naik dari Kelas D menjadi Kelas C, dan peraturan daerah Kabupaten Daerah Tingkat II Ciamis menyesuaikan status tersebut.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-lighter"> 
        <div class="container">
            <div class="row">
                <div class="col-md-7 wow fadeInLeft animation-delay1">
                    <h4 class="font-playfair text-uppercase mt-0">Layanan Kami</h4>
                    <p>Beberapa layanan unggulan kami yang siap kami .</p>
                    <div class="row mt-20 mb-sm-30">
                        <div class="col-sm-6">
                            <div class="service-icon-box"> <a href="#" class="pull-left mr-20"><i class="icon-ambulance14"></i></a>
                                <div class="mt-5">
                                    <h6 class="mt-5">IGD/UGD</h6>
                                    <p class="font-11"><em>Pelayanan Gawat Darurat 24 Jam</em></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-icon-box"> <a href="#" class="pull-left mr-20"><i class="icon-illness"></i></a>
                                <div class="">
                                    <h6 class="mt-5">Tes Kesehatan</h6>
                                    <p class="font-11"><em>Fasilitas Cek dan Lab Kesehatan untuk CPNS/P3K, Pendidikan dan lainnya</em></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-icon-box"> <a href="#" class="pull-left mr-20"><i class="icon-stethoscope10"></i></a>
                                <div class="">
                                    <h6 class="mt-5">Poliklinik Hemodialisa</h6>
                                    <p class="font-11"><em>Lorem ipsum</em></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-icon-box"> <a href="#" class="pull-left mr-20"><i class="icon-medical51"></i></a>
                                <div class="">
                                    <h6 class="mt-5">Poliklinik Penyakit Dalam</h6>
                                    <p class="font-11"><em></em></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-icon-box"> <a href="#" class="pull-left mr-20"><i class="icon-hospital35"></i></a>
                                <div class="">
                                    <h6 class="mt-5">Mobil Ambulan</h6>
                                    <p class="font-11"><em>Layanan Mobil Ambulan 24 Jam</em></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-icon-box"> <a href="#" class="pull-left mr-20"><i class="icon-tablets9"></i></a>
                                <div class="">
                                    <h6 class="mt-5">Farmasi</h6>
                                    <p class="font-11"><em>Fasilitas Farmasi yang Lengkap</em></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 wow fadeInRight animation-delay1">
                    <div class="thumb">
                        <img alt="" src="assets/images/photos/4.jpg" class="img-fullwidth">
                    </div>
                    <h4 class="mt-20">Why Choose Us?</h4>
                    <div class="panel-group accordion style2 mb-0 mt-20" id="accordion2">
                        <div class="panel">
                            <div class="panel-title"> <a href="#accordion21" data-toggle="collapse" data-parent="#accordion2"> <span class="open-sub"></span> Best Case Strategy </a> </div>
                            <div class="panel-collapse collapse" id="accordion21">
                                <div class="panel-content">
                                    <p>Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum leo massa mollis estiegittis miristum nulla.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title"> <a href="#accordion22" data-toggle="collapse" data-parent="#accordion2"> <span class="open-sub"></span> Review your Case Documents </a> </div>
                            <div class="panel-collapse collapse" id="accordion22">
                                <div class="panel-content">
                                    <p>Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum leo massa mollis estiegittis miristum nulla.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title"> <a href="#accordion23" data-toggle="collapse" data-parent="#accordion2"> <span class="open-sub"></span> Fight for Justice </a> </div>
                            <div class="panel-collapse collapse" id="accordion23">
                                <div class="panel-content">
                                    <p>Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum leo massa mollis estiegittis miristum nulla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bg-img="assets/images/pattern/p4.png">
        <div class="container pb-80">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h2 class="text-uppercase mt-0">Visi & Misi</h2>
                        <div class="title-icon">
                            <img class="mb-10" src="assets/images/title-icon.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="services-tab border-10px bg-white-light">
                            <ul class="nav nav-tabs">
                                <li class="active nav-item"><a href="#tab11" data-toggle="tab" class="nav-link active"><i class="icon-xray2"></i>Visi</a></li>
                                <li class="nav-item"><a href="#tab12" data-toggle="tab" class="nav-link"><i class="icon-vision"></i>Misi</a></li>
                            </ul>
                            <div class="tab-content">
                                <!-- Tab 1: Visi -->
                                <div class="tab-pane fade in active" id="tab11">
                                    <h3 class="sub-title mb-0 mt-30">Visi</h3>
                                    <p>Visi Poliklinik Spesialis adalah menjadi penyedia layanan kesehatan terkemuka dengan fokus pada pelayanan ortopedi yang berkualitas dan terjangkau.</p>
                                </div>
                                <!-- Tab 2: Misi -->
                                <div class="tab-pane fade" id="tab12">
                                    <h3 class="sub-title mb-0 mt-30">Misi</h3>
                                    <p>Misi kami adalah memberikan pelayanan medis yang holistik, inovatif, dan berorientasi pada pasien. Kami berkomitmen untuk meningkatkan kesehatan dan kesejahteraan masyarakat dengan standar tertinggi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 



    <section>
        <div class="container pb-30">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h2 class="text-uppercase mt-0">Informasi Pelayanan</h2>
                        <div class="title-icon">
                            <img class="mb-10" src="assets/images/title-icon.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 wow fadeInLeft animation-delay4">
                    <div class="border-10px p-30">
                        <h5><i class="fa fa-money text-theme-colored"></i> Tarif Ruangan</h5>
                        <div class="opening-hourse text-left">
                            <ul class="list-unstyled">
                                <li class="clearfix line-height-1"> <span> Kelas III </span>
                                    <div class="value"> Rp. 120.000 </div>
                                </li>
                                <li class="clearfix line-height-1"> <span> Kelas II </span>
                                    <div class="value"> Rp. 175.000 </div>
                                </li>
                                <li class="clearfix line-height-1"> <span> Kelas I </span>
                                    <div class="value"> Rp. 225.000 </div>
                                </li>
                                <li class="clearfix line-height-1"> <span> VIP </span>
                                    <div class="value"> Rp. 425.000 </div>
                                </li>
                            </ul>
                        </div>
                        <h5 class="mt-30"><i class="fa fa-bed text-theme-colored"></i> Info Bed</h5>
                        <p class="mt-0">Cari dan Pantau Ketersediaan Kamar serta Informasi Bed lainnya</p>
                        <a class="btn btn-colored btn-theme-colored text-uppercase" href="#">Lihat Selengkapnya</a>
                    </div>
                </div>
                <div class="col-md-8 wow fadeInUp animation-delay4">
                    <h3 class="text-gray-silver font-playfair mt-10 mt-sm-30 mb-0">Jadwal</h3>
                    <h2 class="text-gray font-playfair mt-0">Poliklinik & Dokter Spesialis</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="text-center success">
                                    <td>POLIKLINIK</td>
                                    <td>DOKTER</td>
                                    <td>SENIN</td>
                                    <td>SELASA</td>
                                    <td>RABU</td>
                                    <td>KAMIS</td>
                                    <td>JUMAT</td>
                                    <td>SABTU</td>
                                </tr>
                            </thead>
                            <tbody class="table-striped">
                                <tr>
                                    <td>Poli Dalam 1</td>
                                    <td>dr. Primahati RR., Sp.PD</td>
                                    <td>Buka</td>
                                    <td>Buka</td>
                                    <td>Buka</td>
                                    <td>-</td>
                                    <td>Buka</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Poli Dalam 2</td>
                                    <td>dr. Setyo Raharjo, Sp.PD</td>
                                    <td>Buka</td>
                                    <td>Buka</td>
                                    <td>Buka</td>
                                    <td>Buka</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>dr. Irvan Nugraha, Sp.PD</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Buka</td>
                                    <td>Buka</td>
                                </tr>
                                <tr>
                                    <td>Geriatri</td>
                                    <td>dr. Irvan Nugraha, Sp.PD</td>
                                    <td>Buka</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>dr. Setyo Raharjo, Sp.PD</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Buka</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a class="btn btn-colored btn-theme-colored text-uppercase" href="#">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>

    <section class="divider parallax layer-overlay overlay-light" data-stellar-background-ratio="0.5" data-bg-img="assets/images/all_karyawan_5.jpg">
        <div class="container pt-120 pb-120">
            <div class="section-content">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <h2 class="text-uppercase mt-0">Karyawan Kami</h2>
                            <div class="title-icon">
                                <img class="mb-10" src="assets/images/title-icon.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center"> 
                            <a href="#"> <i class="fa fa-user-md text-theme-colored font-60"></i></a>
                            <h5 class="number text-theme-colored font-32">19100+</h5>
                            <h6 class="title text-gray font-16">Dokter</h6>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center"> 
                            <a href="#"> <i class="icon-medical51 text-theme-colored font-60"></i></a>
                            <h5 class="number text-theme-colored font-32">129</h5>
                            <h6 class="title text-gray font-16">Perawat</h6>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center"> 
                            <a href="#"> <i class="icon_building text-theme-colored font-60"></i></a>
                            <h5 class="number text-theme-colored font-32">850+</h5>
                            <h6 class="title text-gray font-16">Clinic Rooms</h6>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center"> 
                            <a href="#"> <i class="icon_gift_alt text-theme-colored font-60"></i></a>
                            <h5 class="number text-theme-colored font-32">456</h5>
                            <h6 class="title text-gray font-16">Awards Won</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h2 class="text-uppercase mt-0">Unit Kerja</h2>
                        <div class="title-icon">
                            <img class="mb-10" src="assets/images/title-icon.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row multi-row-clearfix">
                    <div class="col-md-12">
                        <div class="team-carousel-4col">
                            <!-- Unit EDP -->
                            <div class="item">
                                <div class="team border-1px sm-text-center maxwidth400">
                                    <div class="thumb"><img class="img-fullwidth" src="assets/images/team/team1.jpg" alt="EDP"></div>
                                    <div class="content p-15 bg-white-light">
                                        <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">EDP</a></h4>
                                        <p class="mb-30">Unit EDP bertanggung jawab untuk pengembangan dan pemeliharaan sistem informasi di organisasi.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Unit Rekam Medis -->
                            <div class="item">
                                <div class="team border-1px sm-text-center maxwidth400">
                                    <div class="thumb"><img class="img-fullwidth" src="assets/images/team/team2.jpg" alt="Rekam Medis"></div>
                                    <div class="content p-15 bg-white-light">
                                        <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">Rekam Medis</a></h4>
                                        <p class="mb-30">Unit Rekam Medis bertanggung jawab untuk pengelolaan dan pemeliharaan catatan medis pasien.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Unit Keuangan -->
                            <div class="item">
                                <div class="team border-1px sm-text-center maxwidth400">
                                    <div class="thumb"><img class="img-fullwidth" src="assets/images/team/team3.jpg" alt="Keuangan"></div>
                                    <div class="content p-15 bg-white-light">
                                        <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">Keuangan</a></h4>
                                        <p class="mb-30">Unit Keuangan bertanggung jawab untuk manajemen keuangan dan pembukuan organisasi.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Lanjutkan untuk unit Program, Umum, IPSRS, ISRS, Kepegawaian -->
                            <!-- Gantilah 'team4.jpg', 'team5.jpg', dan seterusnya dengan gambar yang sesuai -->
                            <div class="item">
                                <div class="team border-1px sm-text-center maxwidth400">
                                    <div class="thumb"><img class="img-fullwidth" src="assets/images/team/team4.jpg" alt="Program"></div>
                                    <div class="content p-15 bg-white-light">
                                        <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">Program</a></h4>
                                        <p class="mb-30">Unit Program bertanggung jawab untuk perencanaan dan implementasi program kerja organisasi.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Unit Umum -->
                            <div class="item">
                                <div class="team border-1px sm-text-center maxwidth400">
                                    <div class="thumb"><img class="img-fullwidth" src="assets/images/team/team5.jpg" alt="Umum"></div>
                                    <div class="content p-15 bg-white-light">
                                        <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">Umum</a></h4>
                                        <p class="mb-30">Unit Umum bertanggung jawab untuk koordinasi kegiatan umum dan administrasi organisasi.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Unit IPSRS -->
                            <div class="item">
                                <div class="team border-1px sm-text-center maxwidth400">
                                    <div class="thumb"><img class="img-fullwidth" src="assets/images/team/team6.jpg" alt="IPSRS"></div>
                                    <div class="content p-15 bg-white-light">
                                        <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">IPSRS</a></h4>
                                        <p class="mb-30">Unit IPSRS bertanggung jawab untuk manajemen sumber daya kesehatan dan farmasi.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Unit ISRS -->
                            <div class="item">
                                <div class="team border-1px sm-text-center maxwidth400">
                                    <div class="thumb"><img class="img-fullwidth" src="assets/images/team/team7.jpg" alt="ISRS"></div>
                                    <div class="content p-15 bg-white-light">
                                        <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">ISRS</a></h4>
                                        <p class="mb-30">Unit ISRS bertanggung jawab untuk sistem informasi dan rekayasa perangkat lunak.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Unit Kepegawaian -->
                            <div class="item">
                                <div class="team border-1px sm-text-center maxwidth400">
                                    <div class="thumb"><img class="img-fullwidth" src="assets/images/team/team8.jpg" alt="Kepegawaian"></div>
                                    <div class="content p-15 bg-white-light">
                                        <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">Kepegawaian</a></h4>
                                        <p class="mb-30">Unit Kepegawaian bertanggung jawab untuk manajemen sumber daya manusia dan kepegawaian.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team">
        <div class="container">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase mt-0">Jajaran Direksi</h2>
                        <div class="title-icon">
                            <img class="mb-10" src="assets/images/title-icon.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row multi-row-clearfix">
                    <div class="col-md-12">
                        <div class="team-carousel-4col">
                            <div class="item">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t4.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>Emma White</h4>
                                        <a class="btn btn-colored btn-theme-colored text-uppercase" href="#">Lihat Selengkapnya</a>
                                        
                                    </div>
                                    <div class="card-body py-3">
                                            <h3>Direktur</h3>
                                        </div>
                                        <div class="card-footer pt-0 border-top-0">
                                            <a href="#">email@email.com </a>
                                        </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t3.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>Bobby Robins</h4>
                                        <span>Web Developer</span>
                                        <div class="social-links">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t2.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>Gena lee</h4>
                                        <span>SEO Expert</span>
                                        <div class="social-links">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>Noel Flantier</h4>
                                        <span>ISO Developer</span>
                                        <div class="social-links">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase mt-0">Jajaran Direksi</h2>
                        <div class="title-icon">
                            <img class="mb-5" src="assets/images/title-icon.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row multi-row-clearfix">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="row wow fadeInDown" data-wow-duration="3s" data-wow-offset="10">
                                <div class="team-carousel-4col">
                                    <div class="item">
                                        <div class="wsk-cp-product">
                                            <div class="wsk-cp-img">
                                                <img src="assets/images/photos/dir.jpg" alt="Product" class="img-responsive" />
                                            </div>
                                            <div class="wsk-cp-text">
                                                <div class="category">
                                                    <span>Direktur</span>
                                                </div>
                                                <div class="title-product">
                                                    <h3>Dr. H. Rizali Sofyan</h3>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <a class="btn btn-block btn-colored btn-theme-colored" href="#">Lihat Profil</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="wsk-cp-product">
                                            <div class="wsk-cp-img">
                                                <img src="https://1.bp.blogspot.com/-b-2SgNUrFHg/WVSvmewWqgI/AAAAAAAAAK0/1K4YCcbYjhokHwV_IgiVJN9mEnQoWunIwCPcBGAYYCw/s1600/fashion-portrait-nicole-6347.jpg" alt="Product" class="img-responsive" />
                                            </div>
                                            <div class="wsk-cp-text">
                                                <div class="category">
                                                    <span>Direktur</span>
                                                </div>
                                                <div class="title-product">
                                                    <h3>Dr. H. Rizali Sofyan</h3>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <a class="btn btn-block btn-colored btn-theme-colored" href="#">Lihat Profil</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="wsk-cp-product">
                                            <div class="wsk-cp-img">
                                                <img src="assets/images/team/2.jpg" alt="Product" class="img-responsive" />
                                            </div>
                                            <div class="wsk-cp-text">
                                                <div class="category">
                                                    <span>Direktur</span>
                                                </div>
                                                <div class="title-product">
                                                    <h3>Dr. H. Rizali Sofyan</h3>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <a class="btn btn-block btn-colored btn-theme-colored" href="#">Lihat Profil</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="wsk-cp-product">
                                            <div class="wsk-cp-img">
                                                <img src="https://3.bp.blogspot.com/-iUes8qr4uC8/WVSvl6Wf_fI/AAAAAAAAAKs/JiTUUVvdbqEC_QGGaQhuVJiezIN3LIqEgCPcBGAYYCw/s1600/IMG_5367-bp.jpg" alt="Product" class="img-responsive" />
                                            </div>
                                            <div class="wsk-cp-text">
                                                <div class="category">
                                                    <span>Direktur</span>
                                                </div>
                                                <div class="title-product">
                                                    <h3>Dr. H. Rizali Sofyan</h3>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <a class="btn btn-block btn-colored btn-theme-colored" href="#">Lihat Profil</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light">
        <div class="container pb-110">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h2 class="text-uppercase mt-0">Berita dan Kegiatan</h2>
                        <div class="title-icon">
                            <img class="mb-10" src="assets/images/title-icon.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row multi-row-clearfix">
                    <div class="blog-posts">
                        <div class="row">
                            <div class="col-lg-6">
                                <article class="post style1 clearfix maxwidth500">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-lg-4">
                                            <div class="entry-header">
                                                <div class="post-thumb">
                                                    <img src="assets/images/blog/sm-2.jpg" alt="" class="img-fluid img-fullwidth">
                                                </div>
                                                <div class="entry-date entry-date-absolute">25 <span>Dec</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-lg-8">
                                            <div class="entry-content pl-50 p-20 pt-30 pr-20">
                                                <h5 class="entry-title pt-0"><a href="#">Different types of stroke</a></h5>
                                                <p>Lorem ipsum dolor adipisicing amet, consectetur sit elit. Aspernatur incidihil
                                                quo officia.</p>
                                                <div class="entry-meta float-left flip mt-10">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-thumbs-o-up mr-5"></i> 13</li>
                                                        <li class="list-inline-item"><i class="fa fa-comments-o mr-5"></i> 43</li>
                                                    </ul>
                                                </div> <a class="text-theme-colored mt-10 mb-0 float-right flip" href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-6">
                                <article class="post style1 clearfix maxwidth500">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-lg-4">
                                            <div class="entry-header">
                                                <div class="post-thumb">
                                                    <img src="assets/images/blog/sm-2.jpg" alt="" class="img-fluid img-fullwidth">
                                                </div>
                                                <div class="entry-date entry-date-absolute">25 <span>Dec</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-lg-8">
                                            <div class="entry-content pl-50 p-20 pt-30 pr-20">
                                                <h5 class="entry-title pt-0"><a href="#">Different types of stroke</a></h5>
                                                <p>Lorem ipsum dolor adipisicing amet, consectetur sit elit. Aspernatur incidihil
                                                quo officia.</p>
                                                <div class="entry-meta float-left flip mt-10">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-thumbs-o-up mr-5"></i> 13</li>
                                                        <li class="list-inline-item"><i class="fa fa-comments-o mr-5"></i> 43</li>
                                                    </ul>
                                                </div> <a class="text-theme-colored mt-10 mb-0 float-right flip" href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>