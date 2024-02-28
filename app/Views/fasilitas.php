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
    <title>Fasilitas</title>

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="main-content">
        <section id="fasilitas" class="divider"></section>

        <section data-bg-img="assets/images/pattern/p4.png">
            <div class="container pb-80">
                
                                            <div class="container pb-80">
                                                <div class="section-title text-center">
                                                    <div class="row">
                                                        <div class="col-md-8 offset-md-2">
                                                            <h2 class="text-uppercase mt-0">Fasilitas RSUD Ciamis</h2>
                                                            <div class="title-icon">
                                                                <img class="mb-10" src="assets/images/title-icon.png" alt="">
                                                            </div>
                                                            <p>Rumah sakit yang menyediakan fasilitas non-medis dapat menciptakan lingkungan yang holistik dan mendukung untuk pasien, keluarga, dan staf. Masjid memberikan ruang spiritual, bank memudahkan transaksi keuangan, kantin memberikan akses makanan, dan ruang pengaduan memfasilitasi umpan balik. Ruang tunggu, loket, dan kotak kepuasan meningkatkan pengalaman pasien, sementara ruang aula mendukung pertemuan dan pelatihan. Tempat parkir dan kamar jenazah mengelola kebutuhan praktis, sementara fasilitas berkebutuhan khusus memastikan aksesibilitas untuk semua. Dengan menyediakan fasilitas ini, rumah sakit dapat meningkatkan kesejahteraan dan pelayanan secara keseluruhan.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="section-centent">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="services-tab border-10px bg-white-light">
                                                                <ul class="btn-group-vertical">
                                                                    <li class="nav-item"><a href="#masjid" data-toggle="tab" class="nav-link">Masjid</a></li>
                                                                    <li class="nav-item"><a href="#bank" data-toggle="tab" class="nav-link">Bank</a></li>
                                                                    <li class="nav-item"><a href="#kantin" data-toggle="tab" class="nav-link">Kantin</a></li>
                                                                    <li class="nav-item"><a href="#ruang_pengaduan" data-toggle="tab" class="nav-link">R. Pengaduan</a></li>
                                                                    <li class="nav-item"><a href="#ruang_tunggu" data-toggle="tab" class="nav-link">R. Tunggu</a></li>
                                                                    <li class="nav-item"><a href="#loket" data-toggle="tab" class="nav-link">Loket/Meja Depan</a></li>
                                                                    <li class="nav-item"><a href="#kotak" data-toggle="tab" class="nav-link">Kotak Kepuasan</a></li>
                                                                    <li class="nav-item"><a href="#ruang_aula" data-toggle="tab" class="nav-link">R. Aula</a></li>
                                                                    <li class="nav-item"><a href="#parkir" data-toggle="tab" class="nav-link">Parkir</a></li>
                                                                    <li class="nav-item"><a href="#kj" data-toggle="tab" class="nav-link">Kamar Jenazah</a></li>
                                                                    <li class="nav-item"><a href="#khusus" data-toggle="tab" class="nav-link">Pelayanan Berkebutuhan</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="tab-content">
                                                                <!-- Content for Ruang Bedah Central / OK -->
                                                                <div class="tab-pane fade" id="masjid">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/fasilitas/1.jpg" alt="Masjid Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang Bougenvile I -->
                                                                <div class="tab-pane fade" id="bank">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/fasilitas/2.jpg" alt="Bank Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang Bougenvile II -->
                                                                <div class="tab-pane fade" id="kantin">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/fasilitas/3.jpg" alt="Kantin Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang Dahlia I -->
                                                                <div class="tab-pane fade" id="ruang_pengaduan">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/fasilitas/4.jpg" alt="Ruang Pengaduan Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang Dahlia II -->
                                                                <div class="tab-pane fade" id="ruang_tunggu">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/fasilitas/5.jpg" alt="Ruang Tunggu Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang Delima / VK -->
                                                                <div class="tab-pane fade" id="loket">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/fasilitas/6.jpg" alt="Loket Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang Hasan Sobari I -->
                                                                <div class="tab-pane fade" id="kotak">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/fasilitas/7.jpg" alt="Kotak Kepuasan Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang Hasan Sobari II -->
                                                                <div class="tab-pane fade" id="ruang_aula">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/fasilitas/8.jpg" alt="Ruang Aula Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang HCU -->
                                                                <div class="tab-pane fade" id="parkir">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/fasilitas/9.jpg" alt="Parkir Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang ICU -->
                                                                <div class="tab-pane fade" id="kj">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/fasilitas/10.jpg" alt="Kamar Jenazah Image">
                                                                    </div>
                                                                </div>
                                                                <!-- Content for Ruang Isolasi Covid & ICU Covid -->
                                                                <div class="tab-pane fade" id="khusus">
                                                                    <div class="thumb">
                                                                        <img class="img-fullwidth" src="assets/images/fasilitas/11.jpg" alt="Khusus Image">
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
