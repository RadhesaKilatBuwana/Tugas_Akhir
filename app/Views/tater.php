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
    <title>Your Page Title</title>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Include Revolution Slider CSS and JS files -->
    <link rel="stylesheet" type="text/css" href="path/to/revolution/css/settings.css">
    <script type="text/javascript" src="path/to/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="path/to/revolution/js/jquery.themepunch.revolution.min.js"></script>
</head>

<div class="main-content">
    <section id="tata-tertib" class="divider">
    </section>

    <section>
        <div class="container pt-0 pb-50">
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="border-left-2px border-theme-colored mt-60 pl-15">
                            <h2 class="text-theme-colored font-36 mt-0 mb-0">Tata Tertib Pengunjung</h2>
                        </div>
                        <ul class="list font-22">
                            <li>Tidak diperkenankan duduk di atas tempat tidur pasien kecuali pasien;</li>
                            <li>Para pengunjung dilarang merokok di ruangan perawatan dan di seluruh lingkungan Rumah Sakit;</li>
                            <li>Maturan/Mebanten keluar ruangan agar dilakukan saat jam berkunjung;</li>
                            <li>Diupayakan untuk tidak membawa anak-anak ke ruangan perawatan;</li>
                            <li>Penderita/pengunjung agar ikut serta memelihara kebersihan dan ketertiban ruangan;</li>
                            <li>Buanglah sampah pada tempat yang telah tersedia;</li>
                            <li>Semua penderita dan keluarga diharapkan turut menjaga kebersihan kamar mandi, WC, dan tidak membuang sisa makanan, pembalut wanita, dan sampah ke dalam wastafel atau WC;</li>
                            <li>Keluarga penderita tidak diperkenankan mengambil dan memakai alat-alat Rumah Sakit tanpa seizin petugas;</li>
                            <li>Penderita boleh ditunggu jika dianggap perlu dan pihak keluarga akan mendapatkan surat izin penunggu;</li>
                            <li>Dilarang mencuci dan menjemur pakaian pribadi di Rumah Sakit;</li>
                            <li>Dilarang membawa barang berharga di Rumah Sakit.</li>
                        </ul>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</div>