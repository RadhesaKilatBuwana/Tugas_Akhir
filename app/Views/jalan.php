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
    <title>Visi Misi</title>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Include Revolution Slider CSS and JS files -->
    <link rel="stylesheet" type="text/css" href="path/to/revolution/css/settings.css">
    <script type="text/javascript" src="path/to/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="path/to/revolution/js/jquery.themepunch.revolution.min.js"></script>
</head>

<div class="main-content">
    <section id="visi-misi" class="divider">
    </section>

    <section data-bg-img="assets/images/pattern/p4.png">
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
                        <div class="vertical-tab border-10px bg-white-light">
                            <ul class="nav nav-tabs flex-column sticky-top">
                                <li class="nav-item"><a href="#poli_anak" data-toggle="tab" class="nav-link">Poli Anak</a></li>
                                <li class="nav-item"><a href="#poli_bedah" data-toggle="tab" class="nav-link">Poli Bedah</a></li>
                                <li class="nav-item"><a href="#poli_bidan_kandungan" data-toggle="tab" class="nav-link">Poli Bidan Kandungan</a></li>
                                <li class="nav-item"><a href="#poli_dots" data-toggle="tab" class="nav-link">Poli DOTS</a></li>
                                <li class="nav-item"><a href="#poli_geritari" data-toggle="tab" class="nav-link">Poli Geritari</a></li>
                                <li class="nav-item"><a href="#poli_gigi_mulut" data-toggle="tab" class="nav-link">Poli Gigi & Mulut</a></li>
                                <li class="nav-item"><a href="#poli_gigi_mulut_umum" data-toggle="tab" class="nav-link">Poli Gigi & Mulut (Umum)</a></li>
                                <li class="nav-item"><a href="#poli_gigi" data-toggle="tab" class="nav-link">Poli Gigi</a></li>
                                <li class="nav-item"><a href="#poli_hemodialisa" data-toggle="tab" class="nav-link">Poli Hemodialisa</a></li>
                                <li class="nav-item"><a href="#poli_jiwa" data-toggle="tab" class="nav-link">Poli Jiwa</a></li>
                                <li class="nav-item"><a href="#poli_kulit_kelamin" data-toggle="tab" class="nav-link">Poli Kulit & Kelamin</a></li>
                                <li class="nav-item"><a href="#poli_mata" data-toggle="tab" class="nav-link">Poli Mata</a></li>
                                <li class="nav-item"><a href="#poli_mata2" data-toggle="tab" class="nav-link">Poli Mata</a></li>
                                <li class="nav-item"><a href="#poli_mcu" data-toggle="tab" class="nav-link">Poli MCU</a></li>
                                <li class="nav-item"><a href="#poli_ortopedi" data-toggle="tab" class="nav-link">Poli Ortopedi</a></li>
                                <li class="nav-item"><a href="#poli_paru" data-toggle="tab" class="nav-link">Poli Paru</a></li>
                                <li class="nav-item"><a href="#poli_penyakit_dalam" data-toggle="tab" class="nav-link">Poli Penyakit Dalam</a></li>
                                <li class="nav-item"><a href="#poli_penyakit_dalam2" data-toggle="tab" class="nav-link">Poli Penyakit Dalam 2</a></li>
                                <li class="nav-item"><a href="#poli_rehabilitas_medik" data-toggle="tab" class="nav-link">Poli Rehabilitas Medik</a></li>
                                <li class="nav-item"><a href="#poli_saraf" data-toggle="tab" class="nav-link">Poli Saraf</a></li>
                                <li class="nav-item"><a href="#poli_teratai" data-toggle="tab" class="nav-link">Poli Teratai</a></li>
                                <li class="nav-item"><a href="#poli_tht" data-toggle="tab" class="nav-link">Poli THT</a></li>
                                <li class="nav-item"><a href="#poli_thalasemia" data-toggle="tab" class="nav-link">Poli Thalasemia</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content">
                            <!-- Tab Content for Poli Anak -->
                            <div class="tab-pane fade in active" id="poli_anak">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="assets/images/poli/anak.jpg" alt="Poli Anak Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-content">
                                            <h3 style="font-size: 36px;">Poli Anak</h3>
                                            <p style="font-size: 20px;">Poli Spesialis Anak adalah layanan pemeriksaan dan pengobatan terhadap bayi dan anak sakit langsung oleh Dokter Spesialis Anak yang berkompeten di bidangnya.<br>Pemeriksaan di Poli Spesialis Anak meliputi :<br>Kesehatan Anak, Pemeriksaan Tumbuh Kembang Anak, dan Imunisasi.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Content for Poli Bedah -->
                            <div class="tab-pane fade" id="poli_bedah">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="assets/images/poli/bedah.jpg" alt="Poli Bedah Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-content">
                                            <h3 style="font-size: 36px;">Poli Bedah</h3>
                                            <p style="font-size: 20px;">Poli Bedah melayani masyarakat yang membutuhkan pelayanan kesehatan dalam proses pembedahan umum ditangani oleh DOKTER SPESIALIS BEDAH UMUM yang sudah berpengalaman di bidangnya.</p>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            
                            <!-- Tab Content for Poli Bidan Kandungan -->
                            <div class="tab-pane fade" id="poli_bidan_kandungan">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="assets/images/poli/bidan_kandungan.jpg" alt="Poli Bidan Kandungan Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-content">
                                            <h3 style="font-size: 36px;">Poli Bidan Kandungan</h3>
                                            <p style="font-size: 20px;">Poli ini menyediakan layanan kesehatan khusus untuk perempuan, terutama yang sedang hamil atau membutuhkan perawatan kandungan. Dibantu oleh bidan dan dokter spesialis kandungan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content for Poli DOTS -->
                            <div class="tab-pane fade" id="poli_dots">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="assets/images/poli/dots.jpg" alt="Poli DOTS Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-content">
                                            <h3 style="font-size: 36px;">Poli DOTS</h3>
                                            <p style="font-size: 20px;">Poli ini fokus pada diagnosis dan pengobatan Tuberkulosis (TB) menggunakan metode DOTS (Directly Observed Treatment, Short-Course). Memberikan perawatan yang terukur dan efektif.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content for Poli Geritari -->
                            <div class="tab-pane fade" id="poli_geritari">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="assets/images/poli/geritari.jpg" alt="Poli Geritari Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-content">
                                            <h3 style="font-size: 36px;">Poli Geritari</h3>
                                            <p style="font-size: 20px;">Poli ini menangani masalah kesehatan yang umumnya terjadi pada usia lanjut, memberikan perawatan dan dukungan khusus bagi para lansia untuk menjaga kesehatan mereka.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content for Poli Gigi & Mulut -->
                            <div class="tab-pane fade" id="poli_gigi_mulut">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="assets/images/poli/gigi_mulut.jpg" alt="Poli Gigi & Mulut Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-content">
                                            <h3 style="font-size: 36px;">Poli Gigi & Mulut</h3>
                                            <p style="font-size: 20px;">Memberikan pelayanan kesehatan gigi dan mulut, termasuk pemeriksaan rutin, perawatan, dan edukasi untuk menjaga kesehatan gigi dan mulut secara optimal.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content for Poli Gigi & Mulut (Umum) -->
                            <div class="tab-pane fade" id="poli_gigi_mulut_umum">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="assets/images/poli/gigi_mulut_umum.jpg" alt="Poli Gigi & Mulut (Umum) Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-content">
                                            <h3 style="font-size: 36px;">Poli Gigi & Mulut (Umum)</h3>
                                            <p style="font-size: 20px;">Layanan umum terkait kesehatan gigi dan mulut, mencakup pemeriksaan, perawatan, dan edukasi untuk menjaga kesehatan oral secara menyeluruh.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Content for Poli Gigi -->
                            <div class="tab-pane fade" id="poli_gigi">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="assets/images/poli/gigi.jpg" alt="Poli Gigi Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-content">
                                            <h3 style="font-size: 36px;">Poli Gigi</h3>
                                            <p style="font-size: 20px;">Fokus pada perawatan gigi dan kesehatan mulut. Tim dokter dan ahli gigi memberikan pelayanan berkualitas untuk menjaga kesehatan gigi dan mulut pasien.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content for Poli Hemodialisa -->
                            <div class="tab-pane fade" id="poli_hemodialisa">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="assets/images/poli/hemodialisa.jpg" alt="Poli Hemodialisa Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-content">
                                            <h3 style="font-size: 36px;">Poli Hemodialisa</h3>
                                            <p style="font-size: 20px;">Pelayanan dialisis untuk pasien dengan masalah ginjal. Tim medis berpengalaman memberikan perawatan berkualitas untuk memastikan pasien mendapatkan perawatan yang optimal.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content for Poli Jiwa -->
                            <div class="tab-pane fade" id="poli_jiwa">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="assets/images/poli/jiwa.jpg" alt="Poli Jiwa Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-content">
                                            <h3 style="font-size: 36px;">Poli Jiwa</h3>
                                            <p style="font-size: 20px;">Menangani masalah kesehatan mental dan psikologis. Tim terampil terdiri dari psikiater dan ahli jiwa memberikan perawatan dan dukungan untuk pemulihan pasien.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content for Poli Kulit & Kelamin -->
                            <div class="tab-pane fade" id="poli_kulit_kelamin">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="assets/images/poli/kulit_kelamin.jpg" alt="Poli Kulit & Kelamin Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-content">
                                            <h3 style="font-size: 36px;">Poli Kulit & Kelamin</h3>
                                            <p style="font-size: 20px;">Pelayanan terkait masalah kulit dan penyakit menular seksual. Dokter kulit dan kelamin memberikan penanganan yang sesuai untuk menjaga kesehatan kulit dan organ reproduksi.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content for Poli Mata -->
                            <div class="tab-pane fade" id="poli_mata">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="assets/images/poli/mata.jpg" alt="Poli Mata Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-content">
                                            <h3 style="font-size: 36px;">Poli Mata</h3>
                                            <p style="font-size: 20px;">Menyediakan perawatan mata dan pemeriksaan kesehatan mata. Dokter mata terampil memberikan layanan pemeriksaan dan perawatan mata yang berkualitas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content for Poli Mata2 -->
                            <div class="tab-pane fade" id="poli_mata2">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="assets/images/poli/mata2.jpg" alt="Poli Mata2 Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-content">
                                            <h3 style="font-size: 36px;">Poli Mata</h3>
                                            <p style="font-size: 20px;">Layanan tambahan untuk pemeriksaan dan perawatan mata. Dokter mata ahli memberikan solusi untuk berbagai masalah kesehatan mata.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content for Poli MCU -->
                            <div class="tab-pane fade" id="poli_mcu">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="assets/images/poli/mcu.jpg" alt="Poli MCU Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-content">
                                            <h3 style="font-size: 36px;">Poli MCU</h3>
                                            <p style="font-size: 20px;">Pemeriksaan kesehatan umum (Medical Check-Up) untuk berbagai keperluan. Dokter dan perawat berkompeten memberikan layanan pemeriksaan menyeluruh untuk menjaga kesehatan pasien.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content for Poli Ortopedi -->
                            <div class="tab-pane fade" id="poli_ortopedi">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="assets/images/poli/ortopedi.jpg" alt="Poli Ortopedi Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-content">
                                            <h3 style="font-size: 36px;">Poli Ortopedi</h3>
                                            <p style="font-size: 20px;">Menangani masalah tulang, sendi, dan otot. Dokter spesialis ortopedi memberikan diagnosis dan perawatan untuk memulihkan kesehatan sistem muskuloskeletal.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content for Poli Paru -->
                            <div class="tab-pane fade" id="poli_paru">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="assets/images/poli/paru.jpg" alt="Poli Paru Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-content">
                                            <h3 style="font-size: 36px;">Poli Paru</h3>
                                            <p style="font-size: 20px;">Pelayanan untuk penyakit pernapasan dan paru-paru. Dokter paru berpengalaman memberikan diagnosis dan perawatan untuk menjaga kesehatan sistem pernapasan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content for Poli Penyakit Dalam -->
                            <div class="tab-pane fade" id="poli_penyakit_dalam">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="assets/images/poli/penyakit_dalam.jpg" alt="Poli Penyakit Dalam Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-content">
                                            <h3 style="font-size: 36px;">Poli Penyakit Dalam</h3>
                                            <p style="font-size: 20px;">Fokus pada diagnosis dan pengobatan penyakit dalam tubuh. Dokter spesialis penyakit dalam memberikan perawatan untuk menjaga kesehatan organ dalam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content for Poli Penyakit Dalam 2 -->
                            <div class="tab-pane fade" id="poli_penyakit_dalam2">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="assets/images/poli/penyakit_dalam2.jpg" alt="Poli Penyakit Dalam 2 Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-content">
                                            <h3 style="font-size: 36px;">Poli Penyakit Dalam</h3>
                                            <p style="font-size: 20px;">Layanan tambahan untuk diagnosis dan pengobatan penyakit dalam tubuh. Dokter spesialis penyakit dalam 2 memberikan perawatan menyeluruh untuk menjaga kesehatan organ dalam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content for Poli Rehabilitas Medik -->
                            <div class="tab-pane fade" id="poli_rehabilitas_medik">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="assets/images/poli/rehabilitas_medik.jpg" alt="Poli Rehabilitas Medik Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-content">
                                            <h3 style="font-size: 36px;">Poli Rehabilitas Medik</h3>
                                            <p style="font-size: 20px;">Terapi dan perawatan rehabilitasi untuk pemulihan pasien. Tim ahli rehabilitasi medik memberikan dukungan untuk mengembalikan fungsi tubuh dan meningkatkan kualitas hidup.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content for Poli Saraf -->
                            <div class="tab-pane fade" id="poli_saraf">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="assets/images/poli/saraf.jpg" alt="Poli Saraf Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-content">
                                            <h3 style="font-size: 36px;">Poli Saraf</h3>
                                            <p style="font-size: 20px;">Menangani masalah kesehatan yang terkait dengan sistem saraf. Dokter spesialis saraf memberikan diagnosis dan perawatan untuk menjaga kesehatan sistem saraf.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content for Poli Teratai -->
                            <div class="tab-pane fade" id="poli_teratai">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="assets/images/poli/teratai.jpg" alt="Poli Teratai Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-content">
                                            <h3 style="font-size: 36px;">Poli Teratai</h3>
                                            <p style="font-size: 20px;">Layanan khusus untuk perawatan kesehatan wanita. Dokter spesialis kandungan dan bidan memberikan pelayanan terbaik untuk menjaga kesehatan wanita.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content for Poli THT -->
                            <div class="tab-pane fade" id="poli_tht">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="assets/images/poli/tht.jpg" alt="Poli THT Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-content">
                                            <h3 style="font-size: 36px;">Poli THT</h3>
                                            <p style="font-size: 20px;">Pelayanan untuk masalah Telinga, Hidung, dan Tenggorokan. Dokter spesialis THT memberikan pemeriksaan dan perawatan untuk menjaga kesehatan sistem pernapasan atas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content for Poli Thalasemia -->
                            <div class="tab-pane fade" id="poli_thalasemia">
                                <div class="row">
                                <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="assets/images/poli/thalasemia.jpg" alt="Poli Thalasemia Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-content">
                                            <h3 style="font-size: 36px;">Poli Thalasemia</h3>
                                            <p style="font-size: 20px;">Poli Thalasemia menangani kelainan darah karena kurangnya hemoglobin (Hb) yang normal pada sel darah merah. Kelainan ini membuat penderitanya mengalami anemia atau kurang darah.</p>
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

    <style>
        .vertical-tab {
            max-height: 600px; /* Set the maximum height for the scrollable area */
            max-width: auto;
            overflow-y: auto;
        }
    </style>

</div>

