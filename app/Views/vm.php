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
                        <h2 class="text-uppercase mt-0">Visi & Misi RSUD Ciamis</h2>
                        <div class="title-icon">
                            <img class="mb-10" src="assets/images/title-icon.png" alt="">
                        </div>
                        <p>Di tengah pesona keindahan alam dan keberagaman budaya, Kota Ciamis menjadi saksi bisu atas evolusi zaman. Sebagai jantung masyarakat, kesejahteraan warganya menjadi fokus utama, dan kesehatan menjadi fondasi kokoh untuk membangun masa depan yang lebih baik. Sebagai respon terhadap kebutuhan ini, hadirlah sebuah institusi kesehatan yang tidak hanya menjadi penyelamat nyawa, tetapi juga pusat pencerahan dan harapan bagi setiap individu yang merindukan hidup sehat.</p>
                    </div>
                </div>
            </div>
            <div class="section-centent">
                <div class="row">
                    <div class="col-md-12">
                        <div class="services-tab border-10px bg-white-light">
                            <ul class="nav nav-tabs justify-content-center">
                                <li class="nav-item"><a href="#tab11" data-toggle="tab" class="nav-link"><i class="icon-brain9"></i>Visi</a>
                                </li>
                                <li class="nav-item"><a href="#tab12" data-toggle="tab" class="nav-link"><i class="icon-heart36"></i>Misi</a>
                                </li>
                                <li class="nav-item"><a href="#tab13" data-toggle="tab" class="nav-link"><i class="icon-hospital35"></i>Moto</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab11">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="thumb">
                                                <img class="img-fullwidth" src="assets/images/Visi.png" alt="Visi Image">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="service-content">
                                                <h3 style="font-size: 48px;">Visi</h3>
                                                <p  style="font-size: 24px;">Rumah Sakit yang profesional yang diminati masyarakat</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab12">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="thumb">
                                                <img class="img-fullwidth" src="assets/images/misi.png" alt="Misi Image">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="service-content">
                                                <h3 style="font-size: 48px;">Misi</h3>
                                                <p style="font-size: 24px;">1. Menyelenggarakan pelayanan kesehatan yang optimal dan berkualitas<br>2. Meningkatnya kompetensi sumber daya manusia<br>3. Meningkatkan sarana dan prasarana sesuai dengan ilmu pengetahuan dan tekhnologi</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab13">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="thumb">
                                                <img class="img-fullwidth" src="assets/images/moto.png" alt="Moto Image">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="service-content">
                                                <h3 style="font-size: 48px;">Moto</h3>
                                                <p style="font-size: 24px;">“Kepuasan pasien adalah kebahagaiaan kami.”</p>
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

