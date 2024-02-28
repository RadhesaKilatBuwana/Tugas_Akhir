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
</div>
<style>
    .team .thumb img {
        width: 250px; /* Lebar gambar */
        height: 200px; /* Tinggi gambar */
        object-fit: cover; /* Menjaga aspek ratio dan memotong gambar agar sesuai dengan ukuran yang ditentukan */
    }
</style>