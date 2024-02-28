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
    <title>Bank</title>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Include Revolution Slider CSS and JS files -->
    <link rel="stylesheet" type="text/css" href="path/to/revolution/css/settings.css">
    <script type="text/javascript" src="path/to/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="path/to/revolution/js/jquery.themepunch.revolution.min.js"></script>
</head>

<div class="main-content">
<section id="tarif" class="divider"></section>
<section>
    <div class="container">
        <div class="section-title">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="text-center mb-100">
                        <div class="tm-sc-section-title section-title section-title-style1 text-center">
                            <div class="title-wrapper">
                                <h2 class="title icon-bottom"> <span class="">Tarif Ruangan</span> <span class="text-theme-colored1">Rawat Inap</span> <span class=""></span></h2>
                                <div class="title-seperator-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="tm-element-holder tm-fullwidth open-hours p-30 border-10px">
                        <div class="tm-element-holder-wrapper">
                            <div class="tm-element-holder-content">
                                <h5 class="mt-0"><i class="far fa-money-bill-alt text-theme-colored1"></i> Tarif Ruangan</h5>
                                <ul class="tm-sc-opening-hours tm-sc-opening-hours-compressed opening-hours border-light">
                                    <li class="clearfix">
                                        <span>Kelas III</span>
                                        <div class="value">Rp. 120.000</div>
                                    </li>
                                    <li class="clearfix">
                                        <span>Kelas II</span>
                                        <div class="value">Rp. 175.000</div>
                                    </li>
                                    <li class="clearfix">
                                        <span>Kelas I</span>
                                        <div class="value">Rp. 225.000</div>
                                    </li>
                                    <li class="clearfix">
                                        <span>VIP</span>
                                        <div class="value">Rp. 425.000</div>
                                    </li>
                                </ul>
                                <h5><i class="far fa fa-bed text-theme-colored1"></i> Info Bed</h5>
                                <p>Cari dan Pantau Ketersediaan Kamar serta Informasi Bed lainnya.</p>
                                <div class="tm-sc-button"> <a href="#" target="_self" class="btn btn-theme-colored1 btn-sm"> Lihat Selengkapnya </a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-9">
            </div>
        </div>
        </div>
    </div>
</section>
    <section><br></section>
</div>