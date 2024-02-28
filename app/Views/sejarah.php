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
    <title>Sejarah RSUD</title>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Include Revolution Slider CSS and JS files -->
    <link rel="stylesheet" type="text/css" href="path/to/revolution/css/settings.css">
    <script type="text/javascript" src="path/to/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="path/to/revolution/js/jquery.themepunch.revolution.min.js"></script>
</head>

<div class="main-content">
    <section id="sejarah" class="divider"></section>

    <section>
        <div class="container pt-0 pb-50">
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="border-left-2px border-theme-colored mt-60 pl-15">
                            <h2 class="text-theme-colored font-36 mt-0 mb-0">Sejarah RSUD Ciamis</h2>
                        </div>
                        <ul>
                            <p class="text-gray font-24 m-5">
                                Rumah Sakit Umum Daerah Ciamis berdiri sejak tahun 1942 dengan luas 19.305 m2, terletak di Jalan Rumah Sakit Nomor 76 Desa Ciamis, Kecamatan Ciamis, Kabupaten Ciamis, di bawah kepemimpinan Dr. M. Suwarto, yang juga menjabat sebagai Kepala Dinas Kesehatan Rakyat Kabupaten Ciamis.<br><br>
                                Pada awalnya, kapasitas tempat tidur terbatas, hanya 40 tempat tidur yang terdiri dari Ruang Rawat Inap kelas I dan Ruang Rawat Inap kelas II, dengan tenaga kerja sebanyak 55 orang.
                            </p>
                            <p class="text-gray font-24 m-5">
                                Perkembangan RSUD Ciamis pada tahun 1958-1965 terhambat oleh krisis politik dan ekonomi. Krisis ini menyebabkan penurunan jumlah kunjungan dan pendapatan rumah sakit, serta mempengaruhi kelancaran operasional dan pengembangannya. Pada periode ini, terjadi pergantian kepemimpinan dari dr. M. Suwarto ke dr. Supandi, yang juga menjabat sebagai Kepala Dinas Kesehatan Rakyat Kabupaten Ciamis.<br><br>
                                Pada tahun 1978, melalui surat keputusan Bupati, RSUD Ciamis berubah status menjadi Rumah Sakit Kelas D, dan dr. Supandi digantikan oleh dr. Hj. Hasanah sebagai Direktur hingga tahun 1989.<br><br>
                            </p>
                            <p class="text-gray font-24 m-5">
                                Pada periode 1990-1995, pelayanan kesehatan di RSUD Ciamis mengalami peningkatan signifikan. Rumah sakit menjadi sarana rujukan yang sangat dibutuhkan oleh masyarakat, baik dari kota maupun daerah terpencil. Selain peningkatan sarana dan prasarana, RSUD Ciamis mulai dilengkapi dengan Prosedur Kerja Tetap (Protap) sebagai panduan bagi karyawan. Melalui surat keputusan Menteri Kesehatan pada tahun 1994, status RSUD Ciamis naik dari Kelas D menjadi Kelas C, dan peraturan daerah Kabupaten Daerah Tingkat II Ciamis menyesuaikan status tersebut.<br><br>
                            </p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
