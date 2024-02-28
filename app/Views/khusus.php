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
    <title>Kantin</title>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Include Revolution Slider CSS and JS files -->
    <link rel="stylesheet" type="text/css" href="path/to/revolution/css/settings.css">
    <script type="text/javascript" src="path/to/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="path/to/revolution/js/jquery.themepunch.revolution.min.js"></script>
</head>

<div class="main-content">
<section id="khusus" class="divider"></section>
    <section>
        <div class="container pt-0 pb-50">
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="border-left-2px border-theme-colored mt-60 pl-15">
                            <h2 class="text-theme-colored font-36 mt-0 mb-0">RSUD Ciamis</h2>
                            <p class="text-gray font-26 m-5">Kepuasan pasien adalah kebahagiaan kami</p>
                        </div>
                        <p class="font-22">RSUD Ciamis dibangun dengan memprioritaskan kebutuhan pasien dan penyandang disabilitas:</p>
                        <ul class="list check font-20">
                            <li>Sarana Khusus untuk Penyandang Disabilitas.</li>
                            <li>Aksesibilitas yang Komprehensif.</li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="border-2px border-theme-colored p-10">
                            <img class="img-fullwidth" style="max-width: 100%;" alt="" src="assets/images/khusus.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section><br></section>
</div>