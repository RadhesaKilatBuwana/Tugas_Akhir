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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Include Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- ... other scripts ... -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="main-content">
        <section id="non-medis" class="divider">
        </section>

        <section>
            <div class="container pt-20 pb-100">
                <h2 class="heading-border" align="center">STANDAR PELAYANAN PUBLIK
                PADA RUMAS SAKIT UMUM DAERAH CIAMIS
                INSTALASI PEMULASARAAN JENAZAH
                </h2>
                <br>
                <div class="esc-heading lr-line left-heading mb-30">
                <h4>Pelayanan Instalasi Pemulasaraan Jenazah (IPJ)</h4>
                </div>
                <div class="row">
                <div class="col-md-3">
                    <div class="vertical-tab">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-01-tab" data-bs-toggle="pill" href="#v-pills-01" role="tab" aria-controls="v-pills-01" aria-selected="true">Persyaratan</a>
                        <a class="nav-link" id="v-pills-02-tab" data-bs-toggle="pill" href="#v-pills-02" role="tab" aria-controls="v-pills-02" aria-selected="false">Sistem, Mekanisme dan Prosedur</a>
                        <a class="nav-link" id="v-pills-03-tab" data-bs-toggle="pill" href="#v-pills-03" role="tab" aria-controls="v-pills-03" aria-selected="false">Jangka Waktu Pelayanan</a>
                        <a class="nav-link" id="v-pills-04-tab" data-bs-toggle="pill" href="#v-pills-04" role="tab" aria-controls="v-pills-04" aria-selected="false">Biaya / Tarif</a>
                        <a class="nav-link" id="v-pills-05-tab" data-bs-toggle="pill" href="#v-pills-05" role="tab" aria-controls="v-pills-05" aria-selected="false">Produk Pelayanan</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-01" role="tabpanel" aria-labelledby="v-pills-01-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>-  FC. KTP, kartu keluaraga atau Identitas lainnya.
                            <br>- FC. Bukti Lunas Administrasi Keuangan dari Kasir 
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-02" role="tabpanel" aria-labelledby="v-pills-02-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <!-- <img class="float-start flip pr-20" width="300" src="http://placehold.it/155x90" alt="images"> -->
                            <p>1. Prosedur Pembuatan Surat Keterangan Kematian atau Surat Keterangan Mayat:
                            <br>&nbsp;&nbsp;a.  Pemohon 
                            <br>&nbsp;&nbsp;b.  Petugas IPJ
                            <br>2.  Prosedur Pelayanan Pemulasaraan Jenazah 
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-03" role="tabpanel" aria-labelledby="v-pills-03-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>
                            1.  Pelayanan Penerbitan Surat Keterangan Kematian atau Surat Keterangan Mayat dapat diselesaikan 30 menit.
                            <br>2.  Pemulasaraan Jenazah 90 Menit
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-04" role="tabpanel" aria-labelledby="v-pills-04-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>-  Biaya pengurusan Surat Keterangan Kematian atau Surat Keterangan Mayat berdasarkan perda RP. 25.000,-
                            <br>- Penyimpanan Jenazah biasa Rp. 35.000,-/ hari.
                            <br>- Penyimpanan Jenazah dengan menggunakan Preezer Rp. 100.000,- /hari
                            <br>- Penyimpanan dengan Penyemayaman Jenazah, Rp. 100.000,- / hari
                            <br>- Jasa Pemulasaraan Jenazah Bayi Rp. 150.000,-
                            <br>- Jasa Pemulasaraan Jenazah Dewasa Rp.  200.000,-
                            <br>- BHP Bayi 0 Th – 1Th Rp. 415.000,-
                            <br>- BHP Dewasa Rp. 733.000,-
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-05" role="tabpanel" aria-labelledby="v-pills-05-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>1. Dokumen Surat Keterangan Kematian atau Surat Keterangan Mayat.
                            <br>2.  Jenazah Sudah Terbungkus Rapi bagi jenazah yang beragama Islam dan Jenazah sudah bersih dan dipakaikan pakaian, bagi jenazah non Muslim, sesuai dengan keyakinan Agamanya 

                            </p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <div class="container pt-20 pb-100">
                <h2 class="heading-border" align="center">STANDAR PELAYANAN PUBLIK
                PADA RUMAS SAKIT UMUM DAERAH CIAMIS
                Laundry & CSSD
                </h2>
                <br>
                <div class="esc-heading lr-line left-heading mb-30">
                <h4>Pelayanan Sterilisasi ( CSSD )</h4>
                </div>
                <div class="row">
                <div class="col-md-3">
                    <div class="vertical-tab">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-11-tab" data-bs-toggle="pill" href="#v-pills-11" role="tab" aria-controls="v-pills-11" aria-selected="true">Persyaratan</a>
                        <a class="nav-link" id="v-pills-12-tab" data-bs-toggle="pill" href="#v-pills-12" role="tab" aria-controls="v-pills-12" aria-selected="false">Sistem, Mekanisme dan Prosedur</a>
                        <a class="nav-link" id="v-pills-13-tab" data-bs-toggle="pill" href="#v-pills-13" role="tab" aria-controls="v-pills-13" aria-selected="false">Jangka Waktu Pelayanan</a>
                        <a class="nav-link" id="v-pills-14-tab" data-bs-toggle="pill" href="#v-pills-14" role="tab" aria-controls="v-pills-14" aria-selected="false">Biaya / Tarif</a>
                        <a class="nav-link" id="v-pills-15-tab" data-bs-toggle="pill" href="#v-pills-15" role="tab" aria-controls="v-pills-15" aria-selected="false">Produk Pelayanan</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-11" role="tabpanel" aria-labelledby="v-pills-11-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Ruangan Membawa dan mengisi Form Permintaan Alat   
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-12" role="tabpanel" aria-labelledby="v-pills-12-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <!-- <img class="float-start flip pr-20" width="300" src="http://placehold.it/155x90" alt="images"> -->
                            <p>-
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-13" role="tabpanel" aria-labelledby="v-pills-13-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>1. Pelayanan CSSD rutin, diselesaikan dalam waktu Maximal 180 menit dalam 1 siklus
                            <br>2.  Waktu pelayanan/jam kerja CSSD setiap hari terbagi menjadi dua shift,mulai pukul 07.00 s/d pukul 20.00 WIB
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-14" role="tabpanel" aria-labelledby="v-pills-14-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Biaya pelayanan hemodialisa adalah:
                            <br>&nbsp;&nbsp;1.  Menggunakan JKN: gratis 
                            <br>&nbsp;&nbsp;2.  Umum 
                            <br>&nbsp;&nbsp;- Sesuai dengan Tarif CSSD RSUD Ciamis tahun 2020
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-15" role="tabpanel" aria-labelledby="v-pills-15-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Pelayanan Sterilisasi sentral untuk Alat Medis dan juga Sterilisasi Bahan Habis Pakai
                            </p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        
            <div class="container pt-20 pb-100">
                <h2 class="heading-border" align="center">STANDAR PELAYANAN PUBLIK
                PADA RUMAS SAKIT UMUM DAERAH CIAMIS
                INSTALASI AMBULANCE
                </h2>
                <br>
                <div class="esc-heading lr-line left-heading mb-30">
                <h4>Pelayanan Instalasi Ambulance</h4>
                </div>
                <div class="row">
                <div class="col-md-3">
                    <div class="vertical-tab">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-21-tab" data-bs-toggle="pill" href="#v-pills-21" role="tab" aria-controls="v-pills-21" aria-selected="true">Persyaratan</a>
                        <a class="nav-link" id="v-pills-22-tab" data-bs-toggle="pill" href="#v-pills-22" role="tab" aria-controls="v-pills-22" aria-selected="false">Sistem, Mekanisme dan Prosedur</a>
                        <a class="nav-link" id="v-pills-23-tab" data-bs-toggle="pill" href="#v-pills-23" role="tab" aria-controls="v-pills-23" aria-selected="false">Jangka Waktu Pelayanan</a>
                        <a class="nav-link" id="v-pills-24-tab" data-bs-toggle="pill" href="#v-pills-24" role="tab" aria-controls="v-pills-24" aria-selected="false">Biaya / Tarif</a>
                        <a class="nav-link" id="v-pills-25-tab" data-bs-toggle="pill" href="#v-pills-25" role="tab" aria-controls="v-pills-25" aria-selected="false">Produk Pelayanan</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-21" role="tabpanel" aria-labelledby="v-pills-21-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Seluruh Pasien yang dirawat di Rumah Sakit yang memerlukan .......
                            <br>Rujukan dari Rawat Jalan
                            <br>&nbsp;&nbsp;a.  Rujukan dari Dokter.
                            <br>&nbsp;&nbsp;b.  Kwitansi Pembayaran Ambulan.
                            <br>Rujukan dari IGD
                            <br>&nbsp;&nbsp;A.  Peserta BPJS
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.  Foto Copy KTP.
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.  Fotocopy Kartu BPJS.
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.  Foto Copy Kartu keluarga.
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.  Fotocopy Rujukan dokter.
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.  Fotocopy Rujukan dari BPJS.
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.  Fotocopy SEP.
                            <br>&nbsp;&nbsp;B.  Peserta Umum
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.  Rujukan Dokter
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.  Pembayaran Biaya Rujuk.
                            <br>Pengantaran Jenazah
                            <br>&nbsp;&nbsp;1.  Pembayaran Biaya Pengantaran Jenazah
                            <br>&nbsp;&nbsp;2.  Kwitansi Pembayaran  Kendaraan Jenazah
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-22" role="tabpanel" aria-labelledby="v-pills-22-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <!-- <img class="float-start flip pr-20" width="300" src="http://placehold.it/155x90" alt="images"> -->
                            <p>a. Rujukan :
                            <br>&nbsp;&nbsp;1. Petugas IGD atau Petugas Rawat Inap
                            <br>&nbsp;&nbsp;2. Menghubungi Petugas Administrasi Ambulance
                            <br>&nbsp;&nbsp;3. Petugas Administrasi menghubungi Tim Reaksi Cepat/ Perawat  Pendamping 
                            <br>&nbsp;&nbsp;4. TRC /Perawat Pendamping  melaksanakan Sistem Rujuk Pasien ke Rumah Sakit Tujuan
                            <br>&nbsp;&nbsp;5. Berangkat ke Rumah Sakit Tujuan
                            <br>b. Jenazah
                            <br>&nbsp;&nbsp;1.Petugas Instalasi Pemulasaraan Jenazah
                            <br>&nbsp;&nbsp;2. Menghubungi Petugas Administrasi Ambulance
                            <br>&nbsp;&nbsp;3. Pembayaran dan Administrasi selesai, alamat tujuan lengkap
                            <br>&nbsp;&nbsp;4. Berangkat ke Rumah Duka
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-23" role="tabpanel" aria-labelledby="v-pills-23-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>
                            Setelah ada persyaratan pelayanan Rujukan dan system rujukan selesai (khusus rujukan) pengantaran dilaksanakan saat itu juga.
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-24" role="tabpanel" aria-labelledby="v-pills-24-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>A. Ambulance/ Jenazah :
                            <br>&nbsp;&nbsp;- Biaya 5 KM pertama Rp. 22.000,-
                            <br>&nbsp;&nbsp;- Biaya Variable per kilometer Rp.2.500,-
                            B.  Ambulance 118 :
                            <br>&nbsp;&nbsp;- Biaya 5 Km pertama Rp.400.000,-
                            <br>&nbsp;&nbsp;- Biaya Variable per kilometer Rp.2.500
                            <br>&nbsp;&nbsp;- Sewa Alat per 3 jam (118) Rp. 200.000,-
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-25" role="tabpanel" aria-labelledby="v-pills-25-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>1. Mengantar pasien dari Rumah Sakit Umum Daerah Ciamis ke Rumah Sakit Tujuan.
                            <br>2.  Mengantar Jenazah dari Rumah Sakit ke tempat tujuan.

                            </p>
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
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
