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
        <section id="standar" class="divider">
        </section>

        <section data-bg-img="assets/images/pattern/p4.png">
            <div class="container pb-80">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <h2 class="text-uppercase mt-0">Standar Pelayanan RSUD Ciamis</h2>
                            <div class="title-icon">
                                <img class="mb-10" src="assets/images/title-icon.png" alt="">
                            </div>
                            <p>Standar Pelayanan RSUD Ciamis adalah seperangkat pedoman dan norma yang ditetapkan oleh rumah sakit ini untuk memastikan bahwa setiap aspek layanan kesehatan yang diberikan mencapai tingkat kualitas tertentu. Ini mencakup prosedur medis, perawatan pasien, etika, dan keamanan, yang dijalankan oleh tenaga medis dan non-medis sesuai dengan standar tertentu yang telah ditetapkan.</p>
                        </div>
                    </div>
                </div>
                <div class="section-centent">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="vertical-tab border-10px bg-white-light">
                                <ul class="nav nav-tabs flex-column sticky-top">
                                    <li class="nav-item"><a href="#igd_triage" data-toggle="tab" class="nav-link">IGD Triage</a></li>
                                    <li class="nav-item"><a href="#igd_covid" data-toggle="tab" class="nav-link">IGD Covid</a></li>
                                    <li class="nav-item"><a href="#icu" data-toggle="tab" class="nav-link">ICU</a></li>
                                    <li class="nav-item"><a href="#perinatologi" data-toggle="tab" class="nav-link">Perinatologi</a></li>
                                    <li class="nav-item"><a href="#nicu" data-toggle="tab" class="nav-link">NICU</a></li>
                                    <li class="nav-item"><a href="#isolasi_covid_icu_covid" data-toggle="tab" class="nav-link">Isolasi Covid & ICU Covid</a></li>
                                    <li class="nav-item"><a href="#hcu_penyakit_dalam" data-toggle="tab" class="nav-link">HCU Penyakit Dalam</a></li>
                                    <li class="nav-item"><a href="#hcu_penyakit_syaraf" data-toggle="tab" class="nav-link">HCU Penyakit Syaraf</a></li>
                                    <li class="nav-item"><a href="#instalasi_bedah_sentral" data-toggle="tab" class="nav-link">Instalasi Bedah Sentral</a></li>
                                    <li class="nav-item"><a href="#perawatan_kelas_i_ii_iii_vip" data-toggle="tab" class="nav-link">Perawatan Kelas I, II, III & VIP</a></li>
                                    <li class="nav-item"><a href="#rawat_jalan" data-toggle="tab" class="nav-link">Rawat Jalan</a></li>
                                    <li class="nav-item"><a href="#radiologi" data-toggle="tab" class="nav-link">Radiologi</a></li>
                                    <li class="nav-item"><a href="#laboratorium" data-toggle="tab" class="nav-link">Laboratorium</a></li>
                                    <li class="nav-item"><a href="#farmasi" data-toggle="tab" class="nav-link">Farmasi</a></li>
                                    <li class="nav-item"><a href="#gizi" data-toggle="tab" class="nav-link">Gizi</a></li>
                                    <li class="nav-item"><a href="#pemulasaraan_jenazah" data-toggle="tab" class="nav-link">Pemulasaraan Jenazah</a></li>
                                    <li class="nav-item"><a href="#rekam_medik" data-toggle="tab" class="nav-link">Rekam Medik</a></li>
                                    <li class="nav-item"><a href="#ambulance" data-toggle="tab" class="nav-link">Ambulance</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content">
                                <!-- Content for IGD Triage -->
                                <div class="tab-pane fade" id="igd_triage">
                                    <div class="thumb">
                                        <!-- Isi dengan konten untuk IGD Triage -->
                                        <iframe src="assets/dokumen/standar/1.pdf" width="auto" height="900px"></iframe>
                                    </div>
                                </div>
                                <!-- Content for IGD Covid -->
                                <div class="tab-pane fade" id="igd_covid">
                                    <div class="thumb">
                                        <!-- Isi dengan konten untuk IGD Covid -->
                                        <iframe src="assets/dokumen/standar/2.pdf" width="auto" height="900px"></iframe>
                                    </div>
                                </div>
                                <!-- Content for ICU -->
                                <div class="tab-pane fade" id="icu">
                                    <div class="thumb">
                                        <!-- Isi dengan konten untuk ICU -->
                                        <iframe src="assets/dokumen/standar/3.pdf" width="auto" height="900px"></iframe>
                                    </div>
                                </div>
                                <!-- Content for Perinatologi -->
                                <div class="tab-pane fade" id="perinatologi">
                                    <div class="thumb">
                                        <!-- Isi dengan konten untuk Perinatologi -->
                                        <iframe src="assets/dokumen/standar/4.pdf" width="auto" height="900px"></iframe>
                                    </div>
                                </div>
                                <!-- Content for NICU -->
                                <div class="tab-pane fade" id="nicu">
                                    <div class="thumb">
                                        <!-- Isi dengan konten untuk NICU -->
                                        <iframe src="assets/dokumen/standar/5.pdf" width="auto" height="900px"></iframe>
                                    </div>
                                </div>
                                <!-- Content for Isolasi Covid & ICU Covid -->
                                <div class="tab-pane fade" id="isolasi_covid_icu_covid">
                                    <div class="thumb">
                                        <!-- Isi dengan konten untuk Isolasi Covid & ICU Covid -->
                                        <iframe src="assets/dokumen/standar/6.pdf" width="auto" height="900px"></iframe>
                                    </div>
                                </div>
                                <!-- Content for HCU Penyakit Dalam -->
                                <div class="tab-pane fade" id="hcu_penyakit_dalam">
                                    <div class="thumb">
                                        <!-- Isi dengan konten untuk HCU Penyakit Dalam -->
                                        <iframe src="assets/dokumen/standar/7.pdf" width="auto" height="900px"></iframe>
                                    </div>
                                </div>
                                <!-- Content for HCU Penyakit Syaraf -->
                                <div class="tab-pane fade" id="hcu_penyakit_syaraf">
                                    <div class="thumb">
                                        <!-- Isi dengan konten untuk HCU Penyakit Syaraf -->
                                        <iframe src="assets/dokumen/standar/8.pdf" width="auto" height="900px"></iframe>
                                    </div>
                                </div>
                                <!-- Content for Instalasi Bedah Sentral -->
                                <div class="tab-pane fade" id="instalasi_bedah_sentral">
                                    <div class="thumb">
                                        <!-- Isi dengan konten untuk Instalasi Bedah Sentral -->
                                        <iframe src="assets/dokumen/standar/9.pdf" width="auto" height="900px"></iframe>
                                    </div>
                                </div>
                                <!-- Content for Perawatan Kelas I, II, III & VIP -->
                                <div class="tab-pane fade" id="perawatan_kelas_i_ii_iii_vip">
                                    <div class="thumb">
                                        <!-- Isi dengan konten untuk Perawatan Kelas I, II, III & VIP -->
                                        <iframe src="assets/dokumen/standar/10.pdf" width="auto" height="900px"></iframe>
                                    </div>
                                </div>
                                <!-- Content for Rawat Jalan -->
                                <div class="tab-pane fade" id="rawat_jalan">
                                    <div class="thumb">
                                        <!-- Isi dengan konten untuk Rawat Jalan -->
                                        <iframe src="assets/dokumen/standar/11.pdf" width="auto" height="900px"></iframe>
                                    </div>
                                </div>
                                <!-- Content for Radiologi -->
                                <div class="tab-pane fade" id="radiologi">
                                    <div class="thumb">
                                        <!-- Isi dengan konten untuk Radiologi -->
                                        <iframe src="assets/dokumen/standar/12.pdf" width="auto" height="900px"></iframe>
                                    </div>
                                </div>
                                <!-- Content for Laboratorium -->
                                <div class="tab-pane fade" id="laboratorium">
                                    <div class="thumb">
                                        <!-- Isi dengan konten untuk Laboratorium -->
                                        <iframe src="assets/dokumen/standar/13.pdf" width="auto" height="900px"></iframe>
                                    </div>
                                </div>
                                <!-- Content for Farmasi -->
                                <div class="tab-pane fade" id="farmasi">
                                    <div class="thumb">
                                        <!-- Isi dengan konten untuk Farmasi -->
                                        <iframe src="assets/dokumen/standar/14.pdf" width="auto" height="900px"></iframe>
                                    </div>
                                </div>
                                <!-- Content for Gizi -->
                                <div class="tab-pane fade" id="gizi">
                                    <div class="thumb">
                                        <!-- Isi dengan konten untuk Gizi -->
                                        <iframe src="assets/dokumen/standar/15.pdf" width="auto" height="900px"></iframe>
                                    </div>
                                </div>
                                <!-- Content for Pemulasaraan Jenazah -->
                                <div class="tab-pane fade" id="pemulasaraan_jenazah">
                                    <div class="thumb">
                                        <!-- Isi dengan konten untuk Pemulasaraan Jenazah -->
                                        <iframe src="assets/dokumen/standar/16.pdf" width="auto" height="900px"></iframe>
                                    </div>
                                </div>
                                <!-- Content for Rekam Medik -->
                                <div class="tab-pane fade" id="rekam_medik">
                                    <div class="thumb">
                                        <!-- Isi dengan konten untuk Rekam Medik -->
                                        <iframe src="assets/dokumen/standar/17.pdf" width="auto" height="900px"></iframe>
                                    </div>
                                </div>
                                <!-- Content for Ambulance -->
                                <div class="tab-pane fade" id="ambulance">
                                    <div class="thumb">
                                        <!-- Isi dengan konten untuk Ambulance -->
                                        <iframe src="assets/dokumen/standar/18.pdf" width="auto" height="900px"></iframe>
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
            max-height: 900px; /* Set the maximum height for the scrollable area */
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
