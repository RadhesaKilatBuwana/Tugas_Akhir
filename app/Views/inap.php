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
    <title>IGD/UGD</title>

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="main-content">
        <section id="inap" class="divider"></section>

        <section data-bg-img="assets/images/pattern/p4.png">
            <div class="container pb-80">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <h2 class="text-uppercase mt-0">Informasi Rawat Inap</h2>
                            <div class="title-icon">
                                <img class="mb-10" src="assets/images/title-icon.png" alt="">
                            </div>
                            <p>RSUD Ciamis menyediakan perawatan rawat inap kepada pasien yang membutuhkan.</p>
                        </div>
                    </div>
                </div>
                <div class="section-centent">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="services-tab border-10px bg-white-light">
                                <ul class="nav nav-tabs justify-content-center">
                                    <li class="nav-item"><a href="#tab12" data-toggle="tab" class="nav-link"><i class="icon-heart36"></i>Standar Pelayanan</a>
                                    </li>
                                    <li class="nav-item"><a href="#tab13" data-toggle="tab" class="nav-link"><i class="icon-hospital35"></i>Ruangan</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab12">
                                        <div class="row">
                                            <div class="container pt-20 pb-100">
                                                <h2 class="heading-border" align="center">STANDAR PELAYANAN PUBLIK PADA RUMAS SAKIT UMUM DAERAH CIAMIS PELAYANAN RAWAT INAP</h2>
                                                <br>
                                                <div class="esc-heading lr-line left-heading mb-30">
                                                    <h4>Service Delivery ( Proses Penyampaian Pelayanan )</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="vertical-tab">
                                                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                                <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Persyaratan</a>
                                                                <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Sistem, Mekanisme dan Prosedur</a>
                                                                <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Jangka Waktu Pelayanan</a>
                                                                <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Biaya / Tarif</a>
                                                                <a class="nav-link" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Produk Pelayanan</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="tab-content" id="v-pills-tabContent">
                                                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <!-- Your content for Tab 1 -->
                                                                        <p>1. Prasyarat Administrasi
                                                                            <br>&nbsp;&nbsp;1)  Pasien BPJS / KIS
                                                                            <br>Pasien Berasal dari Poliklinik :
                                                                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a.  Kartu BPJS / KIS
                                                                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b.  Surat Perintah Rawat Inap (SPRI) / Surat Rencana Inap (SRI)
                                                                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c.  Pengantar Perawatan Rawat Inap dari Poliklinik (Form RM02.1)
                                                                            <br>&nbsp;&nbsp;Pasien Berasal dari IGD :
                                                                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a.  Kartu BPJS / KIS
                                                                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b.  SEP (Surat Eligibilitas Peserta) Gawat darurat
                                                                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c.  Surat Perintah Rawat Inap (SPRI) / Surat Rencana Inap (SRI)
                                                                            <br>&nbsp;&nbsp;2)  PasienUmum
                                                                            <br>Pasien Berasal dari Poliklinik :
                                                                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a.  Surat Perintah Rawat Inap (SPRI) 
                                                                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b.  Pengantar Perawatan Rawat Inap dari Poliklinik (Form RM02.1)
                                                                            <br>&nbsp;&nbsp;Pasien Berasal dari IGD :
                                                                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a.  Surat Perintah Rawat Inap (SPRI) / Surat Rencana Inap (SRI)
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <!-- Your content for Tab 2 -->
                                                                        <p>Mekanisme dan prosedur Pelayanan di Rawat Jalan adalah :
                                                                            <br>a.  Mekanisme Administrasi
                                                                            <br>&nbsp;&nbsp;1)  Persyaratan masuk loket Pendaftaran Rawat Inap / Admisi baik Umum atau BPJS.
                                                                            <br>&nbsp;&nbsp;2)  Untuk Pasien Umum langsung dibuatkan Rekam Medis Rawat Inap  .
                                                                            <br>&nbsp;&nbsp;3)  Untuk Pasien BPJS dilakukan verifikasi dulu oleh petugas dibuatkan Rekam Medis rawat Inap.
                                                                            <br>&nbsp;&nbsp;4)  Mencetak SEP (Surat Eligibilitas Pasien) Rawat Inap untuk pasien BPJS
                                                                            <br>&nbsp;&nbsp;5)  Mencetak gelang pasien sesuai jenis kelamin pasien, warna pink / merah muda untuk pasien Perempuan dan warna biru untuk pasien Laki-laki.
                                                                            <br>&nbsp;&nbsp;6)  Pemberian General Consent
                                                                            <br>&nbsp;&nbsp;7)  Pemberian Edukasi bagi Pasien atau Keluarga Pasien
                                                                            <br>&nbsp;&nbsp;8)  Mengubah status perawatan pasien dari Rawat jalan / IGD menjadi Rawat Inap di SIMRS
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <!-- Your content for Tab 3 -->
                                                                        <p>Waktu penyediaan dokumen di Rawat Inap :
                                                                            <br>&nbsp;&nbsp;Pasien Baru / Lama : ≤ 15 menit
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <!-- Your content for Tab 4 -->
                                                                        <p>a. Pasien BPJS
                                                                            <br>&nbsp;&nbsp;Gratis/Tidak dipungut biaya.
                                                                            <br>b.  UMUM
                                                                            <br>&nbsp;&nbsp;Pendaftaran Pemeriksaan dokter spesialis sebesar, ditambah biaya perawatan, tindakan dan pengobatan sesuai kebutuhan pasien.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <!-- Your content for Tab 5 -->
                                                                        <p>Rekam Medis untuk Rawat Inap, Surat Eligibilitas Peserta dan SEP Rawat Inap (pasien BPJS), Gelang Pasien</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab13">
                                        <div class="row">
                                            <div class="container pb-80">
                                                <div class="section-title text-center">
                                                    <div class="row">
                                                        <div class="col-md-8 offset-md-2">
                                                            <h2 class="text-uppercase mt-0">Poli RSUD Ciamis</h2>
                                                            <div class="title-icon">
                                                                <img class="mb-10" src="assets/images/title-icon.png" alt="">
                                                            </div>
                                                            <p>Di tengah pesona keindahan alam dan keberagaman budaya, Kota Ciamis menjadi saksi bisu atas evolusi zaman. Sebagai jantung masyarakat, kesejahteraan warganya menjadi fokus utama, dan kesehatan menjadi fondasi kokoh untuk membangun masa depan yang lebih baik. Sebagai respon terhadap kebutuhan ini, hadirlah sebuah institusi kesehatan yang tidak hanya menjadi penyelamat nyawa, tetapi juga pusat pencerahan dan harapan bagi setiap individu yang merindukan hidup sehat.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="section-centent">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="services-tab border-10px bg-white-light">
                                                                <ul class="btn-group-vertical">
                                                                    <li class="nav-item"><a href="#ruang_bedah_central_ok" data-toggle="tab" class="nav-link">R. Bedah Central / OK</a></li>
                                                                    <li class="nav-item"><a href="#ruang_bougenvile_i" data-toggle="tab" class="nav-link">R. Bougenvile I</a></li>
                                                                    <li class="nav-item"><a href="#ruang_bougenvile_ii" data-toggle="tab" class="nav-link">R. Bougenvile II</a></li>
                                                                    <li class="nav-item"><a href="#ruang_dahlia_i" data-toggle="tab" class="nav-link">R. Dahlia I</a></li>
                                                                    <li class="nav-item"><a href="#ruang_dahlia_ii" data-toggle="tab" class="nav-link">R. Dahlia II</a></li>
                                                                    <li class="nav-item"><a href="#ruang_delima_vk" data-toggle="tab" class="nav-link">R. Delima / VK</a></li>
                                                                    <li class="nav-item"><a href="#ruang_hasan_sobari_i" data-toggle="tab" class="nav-link">R. Hasan Sobari I</a></li>
                                                                    <li class="nav-item"><a href="#ruang_hasan_sobari_ii" data-toggle="tab" class="nav-link">R. Hasan Sobari II</a></li>
                                                                    <li class="nav-item"><a href="#ruang_hcu" data-toggle="tab" class="nav-link">R. HCU</a></li>
                                                                    <li class="nav-item"><a href="#ruang_icu" data-toggle="tab" class="nav-link">R. ICU</a></li>
                                                                    <li class="nav-item"><a href="#ruang_isolasi_covid_icu_covid" data-toggle="tab" class="nav-link">R. Isolasi Covid & ICU Covid</a></li>
                                                                    <li class="nav-item"><a href="#ruang_mawar" data-toggle="tab" class="nav-link">R. Mawar</a></li>
                                                                    <li class="nav-item"><a href="#ruang_melati" data-toggle="tab" class="nav-link">R. Melati</a></li>
                                                                    <li class="nav-item"><a href="#ruang_nicu" data-toggle="tab" class="nav-link">R. NICU</a></li>
                                                                    <li class="nav-item"><a href="#ruang_perintalogi" data-toggle="tab" class="nav-link">R. Perintalogi</a></li>
                                                                    <li class="nav-item"><a href="#ruang_wijaya_kusuma_i" data-toggle="tab" class="nav-link">R. Wijaya Kusuma I</a></li>
                                                                    <li class="nav-item"><a href="#ruang_wijaya_kusuma_ii" data-toggle="tab" class="nav-link">R. Wijaya Kusuma II</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="tab-content">
                                                                <!-- Content for Ruang Bedah Central / OK -->
                                                                <div class="tab-pane fade" id="ruang_bedah_central_ok">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/inap/1.jpg" alt="Ruang Bedah Central / OK Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang Bougenvile I -->
                                                                <div class="tab-pane fade" id="ruang_bougenvile_i">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/inap/2.jpg" alt="Ruang Bougenvile I Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang Bougenvile II -->
                                                                <div class="tab-pane fade" id="ruang_bougenvile_ii">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/inap/3.jpg" alt="Ruang Bougenvile II Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang Dahlia I -->
                                                                <div class="tab-pane fade" id="ruang_dahlia_i">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/inap/4.jpg" alt="Ruang Dahlia I Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang Dahlia II -->
                                                                <div class="tab-pane fade" id="ruang_dahlia_ii">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/inap/5.jpg" alt="Ruang Dahlia II Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang Delima / VK -->
                                                                <div class="tab-pane fade" id="ruang_delima_vk">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/inap/6.jpg" alt="Ruang Delima / VK Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang Hasan Sobari I -->
                                                                <div class="tab-pane fade" id="ruang_hasan_sobari_i">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/inap/7.jpg" alt="Ruang Hasan Sobari I Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang Hasan Sobari II -->
                                                                <div class="tab-pane fade" id="ruang_hasan_sobari_ii">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/inap/8.jpg" alt="Ruang Hasan Sobari II Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang HCU -->
                                                                <div class="tab-pane fade" id="ruang_hcu">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/inap/9.jpg" alt="Ruang HCU Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang ICU -->
                                                                <div class="tab-pane fade" id="ruang_icu">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/inap/10.jpg" alt="Ruang ICU Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang Isolasi Covid & ICU Covid -->
                                                                <div class="tab-pane fade" id="ruang_isolasi_covid_icu_covid">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/inap/11.jpg" alt="Ruang Isolasi Covid & ICU Covid Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang Mawar -->
                                                                <div class="tab-pane fade" id="ruang_mawar">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/inap/12.jpg" alt="Ruang Mawar Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang Melati -->
                                                                <div class="tab-pane fade" id="ruang_melati">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/inap/13.jpg" alt="Ruang Melati Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang NICU -->
                                                                <div class="tab-pane fade" id="ruang_nicu">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/inap/14.jpg" alt="Ruang NICU Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang Perintalogi -->
                                                                <div class="tab-pane fade" id="ruang_perintalogi">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/inap/15.jpg" alt="Ruang Perintalogi Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang Wijaya Kusuma I -->
                                                                <div class="tab-pane fade" id="ruang_wijaya_kusuma_i">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/inap/16.jpg" alt="Ruang Wijaya Kusuma I Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang Wijaya Kusuma II -->
                                                                <div class="tab-pane fade" id="ruang_wijaya_kusuma_ii">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/inap/17.jpg" alt="Ruang Wijaya Kusuma II Image">
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
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <style>
        .vertical-tab {
            max-height: 450px; /* Set the maximum height for the scrollable area */
            max-width: auto;
            overflow-y: auto;
        }
    </style>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
