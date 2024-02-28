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
    <title>Unit Kerja</title>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Include Revolution Slider CSS and JS files -->
    <link rel="stylesheet" type="text/css" href="path/to/revolution/css/settings.css">
    <script type="text/javascript" src="path/to/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="path/to/revolution/js/jquery.themepunch.revolution.min.js"></script>
</head>

<div class="main-content">
    <section id="unit" class="divider">
    </section>

    <section>
        <div class="container">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h2 class="text-uppercase mt-0">Jumlah Karyawan</h2>
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
                                <div class="team border-1px sm-text-center maxwidth400">
                                    <div class="thumb"><img class="img-fullwidth" src="assets/images/jumlah/1.jpg" alt="EDP"></div>
                                    <div class="content p-15 bg-white-light">
                                        <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">Ambulan</a></h4>
                                        <p class="mb-30">RSUD Ciamis memiliki 4 unit ambulan layak pakai.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team border-1px sm-text-center maxwidth400">
                                    <div class="thumb"><img class="img-fullwidth" src="assets/images/jumlah/2.jpg" alt="Rekam Medis"></div>
                                    <div class="content p-15 bg-white-light">
                                        <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">Tenaga Medis</a></h4>
                                        <p class="mb-30">RSUD Ciamis memiliki 250 orang tenaga medis yang bersertifikat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team border-1px sm-text-center maxwidth400">
                                    <div class="thumb"><img class="img-fullwidth" src="assets/images/jumlah/3.jpg" alt="Keuangan"></div>
                                    <div class="content p-15 bg-white-light">
                                        <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">Tenaga Ahli</a></h4>
                                        <p class="mb-30">RSUD Ciamis memiliki 150 tenaga ahli dari berbagai bidang medis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team border-1px sm-text-center maxwidth400">
                                    <div class="thumb"><img class="img-fullwidth" src="assets/images/team/team4.jpg" alt="Program"></div>
                                    <div class="content p-15 bg-white-light">
                                        <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">Tenaga Non-Medis</a></h4>
                                        <p class="mb-30">RSUD Ciamis memiliki 600 tenaga non-medis untuk mengurus kualitas pelayanan RSUD.</p>
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
    .team .thumb img {
        width: 250px; /* Lebar gambar */
        height: 200px; /* Tinggi gambar */
        object-fit: cover; /* Menjaga aspek ratio dan memotong gambar agar sesuai dengan ukuran yang ditentukan */
    }
</style>