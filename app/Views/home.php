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
    <section id="home" class="divider">
        <div class="container-fluid p-0">
            <div class="rev_slider_wrapper">
                <div class="rev_slider" data-version="5.0">
                    <ul>
                        <!-- SLIDE 1 -->
                        <li data-index="rs-1" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="assets/images/slider/1.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                            <img src="assets/images/slider/1.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                        </li>
                        <!-- SLIDE 2 -->
                        <li data-index="rs-2" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="assets/images/slider/2.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                            <img src="assets/images/slider/2.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                        </li>
                        <!-- SLIDE 3 -->
                        <li data-index="rs-2" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="assets/images/slider/3.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                            <img src="assets/images/slider/3.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                        </li>
                        <!-- SLIDE 4 -->
                        <li data-index="rs-2" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="assets/images/slider/4.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                            <img src="assets/images/slider/4.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                        </li>
                        <!-- SLIDE 5 -->
                        <li data-index="rs-2" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="assets/images/slider/5.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                            <img src="assets/images/slider/5.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Initialize the slider -->
    <script>
        jQuery(document).ready(function() {
            jQuery('.rev_slider').show().revolution({
                delay: 5000,
                startwidth: 1170,
                startheight: 500,
                hideThumbs: 10,
                fullWidth: "on",
                forceFullWidth: "on"
            });
        });
    </script>


    <section>
        <div class="container pt-0 pb-50">
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="border-left-2px border-theme-colored mt-60 pl-15">
                            <h2 class="text-theme-colored font-36 mt-0 mb-0">RSUD Ciamis</h2>
                            <p class="text-gray font-24 m-5">Kepuasan pasien adalah kebahagiaan kami</p>
                        </div>
                        <p>RSUD Ciamis adalah Rumah sakit yang profesional dan diminati masyarakat</p>
                        <ul class="list check font-15">
                            <li>Menyelenggarakan pelayanan kesehatan yang optimal dan berkualitas.</li>
                            <li>Meningkatkan dan mengembangkan kompetensi sumber daya manusia.</li>
                            <li>Mengembangkan sarana prasarana rumah sakit sesuai dengan ilmu pengetahuan dan teknologi.</li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <img class="img-fullwidth" alt="" src="assets/images/slider/5.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-lighter"> 
        <div class="container">
            <div class="row">
                <div class="col-md-7 wow fadeInLeft animation-delay1">
                    <h4 class="font-playfair text-uppercase mt-0">Layanan Kami</h4>
                    <p>Beberapa layanan unggulan kami yang siap kami .</p>
                    <div class="row mt-20 mb-sm-30">
                        <div class="col-sm-6">
                            <div class="service-icon-box"> <a href="#" class="pull-left mr-20"><i class="icon-ambulance14"></i></a>
                                <div class="mt-5">
                                    <h6 class="mt-5">IGD/UGD</h6>
                                    <p class="font-11"><em>Pelayanan Gawat Darurat 24 Jam</em></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-icon-box"> <a href="#" class="pull-left mr-20"><i class="icon-illness"></i></a>
                                <div class="">
                                    <h6 class="mt-5">Tes Kesehatan</h6>
                                    <p class="font-11"><em>Fasilitas Cek dan Lab Kesehatan untuk CPNS/P3K, Pendidikan dan lainnya</em></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-icon-box"> <a href="#" class="pull-left mr-20"><i class="icon-stethoscope10"></i></a>
                                <div class="">
                                    <h6 class="mt-5">Poliklinik Hemodialisa</h6>
                                    <p class="font-11"><em>Lorem ipsum</em></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-icon-box"> <a href="#" class="pull-left mr-20"><i class="icon-medical51"></i></a>
                                <div class="">
                                    <h6 class="mt-5">Poliklinik Penyakit Dalam</h6>
                                    <p class="font-11"><em></em></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-icon-box"> <a href="#" class="pull-left mr-20"><i class="icon-hospital35"></i></a>
                                <div class="">
                                    <h6 class="mt-5">Mobil Ambulan</h6>
                                    <p class="font-11"><em>Layanan Mobil Ambulan 24 Jam</em></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-icon-box"> <a href="#" class="pull-left mr-20"><i class="icon-tablets9"></i></a>
                                <div class="">
                                    <h6 class="mt-5">Farmasi</h6>
                                    <p class="font-11"><em>Fasilitas Farmasi yang Lengkap</em></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 wow fadeInRight animation-delay1">
                    <div class="thumb">
                        <img alt="" src="assets/images/photos/4.jpg" class="img-fullwidth">
                    </div>
                    <h4 class="mt-20">Why Choose Us?</h4>
                    <div class="panel-group accordion style2 mb-0 mt-20" id="accordion2">
                        <div class="panel">
                            <div class="panel-title"> <a href="#accordion21" data-toggle="collapse" data-parent="#accordion2"> <span class="open-sub"></span> Best Case Strategy </a> </div>
                            <div class="panel-collapse collapse" id="accordion21">
                                <div class="panel-content">
                                    <p>Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum leo massa mollis estiegittis miristum nulla.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title"> <a href="#accordion22" data-toggle="collapse" data-parent="#accordion2"> <span class="open-sub"></span> Review your Case Documents </a> </div>
                            <div class="panel-collapse collapse" id="accordion22">
                                <div class="panel-content">
                                    <p>Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum leo massa mollis estiegittis miristum nulla.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title"> <a href="#accordion23" data-toggle="collapse" data-parent="#accordion2"> <span class="open-sub"></span> Fight for Justice </a> </div>
                            <div class="panel-collapse collapse" id="accordion23">
                                <div class="panel-content">
                                    <p>Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum leo massa mollis estiegittis miristum nulla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bg-img="assets/images/pattern/p4.png">
        <div class="container pb-80">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h2 class="text-uppercase mt-0">Poliklinik Spesialis</h2>
                        <div class="title-icon">
                            <img class="mb-10" src="assets/images/title-icon.png" alt="">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
                    </div>
                </div>
            </div>
            <div class="section-centent">
                <div class="row">
                    <div class="col-md-12">
                        <div class="services-tab border-10px bg-white-light">
                            <ul class="nav nav-tabs">
                                <li class="active nav-item"><a href="#tab11" data-toggle="tab" class="nav-link"><i class="icon-xray2"></i>Orthopaedics</a>
                                </li>
                                <li class="nav-item"><a href="#tab12" data-toggle="tab" class="nav-link"><i class="icon-heart36"></i>Cardiology</a>
                                </li>
                                <li class="nav-item"><a href="#tab13" data-toggle="tab" class="nav-link"><i class="icon-brain9"></i>Neurology</a>
                                </li>
                                <li class="nav-item"><a href="#tab14" data-toggle="tab" class="nav-link"><i class="icon-teeth1"></i>Dental</a>
                                </li>
                                <li class="nav-item"><a href="#tab15" data-toggle="tab" class="nav-link"><i class="icon-hospital35"></i>Haematology</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab11">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="thumb">
                                                <img class="img-fullwidth" src="assets/images/services/1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="service-content">
                                                <h3 class="sub-title mb-0 mt-30">Services</h3>
                                                <h1 class="title mt-0">Orthopaedics</h1>
                                                <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>
                                                <div class="row mt-30 mb-20">
                                                    <div class="col-xs-6">
                                                        <ul class="mt-10">
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Qualified Doctors</li>
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;24×7 Emergency Services</li>
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;General Medical</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <ul class="mt-10">
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Feel like Home Services</li>
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Outdoor Checkup</li>
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Easy and Affordable Billing</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a class="btn btn-lg btn-dark btn-theme-colored" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab12">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="thumb">
                                                <img class="img-fullwidth" src="assets/images/services/2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="service-content">
                                                <h3 class="sub-title mb-0 mt-30">Services</h3>
                                                <h1 class="title mt-0">Cardiology</h1>
                                                <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>
                                                <div class="row mt-30 mb-20">
                                                    <div class="col-xs-6">
                                                        <ul class="mt-10">
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Qualified Doctors</li>
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;24×7 Emergency Services</li>
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;General Medical</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <ul class="mt-10">
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Feel like Home Services</li>
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Outdoor Checkup</li>
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Easy and Affordable Billing</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a class="btn btn-lg btn-dark btn-theme-colored" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab13">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="thumb">
                                                <img class="img-fullwidth" src="assets/images/services/3.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="service-content">
                                                <h3 class="sub-title mb-0 mt-30">Services</h3>
                                                <h1 class="title mt-0">Neurology</h1>
                                                <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>
                                                <div class="row mt-30 mb-20">
                                                    <div class="col-xs-6">
                                                        <ul class="mt-10">
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Qualified Doctors</li>
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;24×7 Emergency Services</li>
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;General Medical</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <ul class="mt-10">
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Feel like Home Services</li>
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Outdoor Checkup</li>
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Easy and Affordable Billing</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a class="btn btn-lg btn-dark btn-theme-colored" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab14">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="thumb">
                                                <img class="img-fullwidth" src="assets/images/services/4.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="service-content">
                                                <h3 class="sub-title mb-0 mt-30">Services</h3>
                                                <h1 class="title mt-0">Dental</h1>
                                                <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>
                                                <div class="row mt-30 mb-20">
                                                    <div class="col-xs-6">
                                                        <ul class="mt-10">
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Qualified Doctors</li>
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;24×7 Emergency Services</li>
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;General Medical</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <ul class="mt-10">
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Feel like Home Services</li>
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Outdoor Checkup</li>
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Easy and Affordable Billing</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a class="btn btn-lg btn-dark btn-theme-colored" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab15">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="thumb">
                                                <img class="img-fullwidth" src="assets/images/services/5.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="service-content">
                                                <h3 class="sub-title mb-0 mt-30">Services</h3>
                                                <h1 class="title mt-0">Haematology</h1>
                                                <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>
                                                <div class="row mt-30 mb-20">
                                                    <div class="col-xs-6">
                                                        <ul class="mt-10">
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Qualified Doctors</li>
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;24×7 Emergency Services</li>
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;General Medical</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <ul class="mt-10">
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Feel like Home Services</li>
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Outdoor Checkup</li>
                                                            <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Easy and Affordable Billing</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a class="btn btn-lg btn-dark btn-theme-colored" href="#">View Details</a>
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

    <section>
        <div class="container pb-30">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h2 class="text-uppercase mt-0">Informasi Pelayanan</h2>
                        <div class="title-icon">
                            <img class="mb-10" src="assets/images/title-icon.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 wow fadeInLeft animation-delay4">
                    <div class="border-10px p-30">
                        <h5><i class="fa fa-money text-theme-colored"></i> Tarif Ruangan</h5>
                        <div class="opening-hourse text-left">
                            <ul class="list-unstyled">
                                <li class="clearfix line-height-1"> <span> Kelas III </span>
                                    <div class="value"> Rp. 120.000 </div>
                                </li>
                                <li class="clearfix line-height-1"> <span> Kelas II </span>
                                    <div class="value"> Rp. 175.000 </div>
                                </li>
                                <li class="clearfix line-height-1"> <span> Kelas I </span>
                                    <div class="value"> Rp. 225.000 </div>
                                </li>
                                <li class="clearfix line-height-1"> <span> VIP </span>
                                    <div class="value"> Rp. 425.000 </div>
                                </li>
                            </ul>
                        </div>
                        <h5 class="mt-30"><i class="fa fa-bed text-theme-colored"></i> Info Bed</h5>
                        <p class="mt-0">Cari dan Pantau Ketersediaan Kamar serta Informasi Bed lainnya</p>
                        <a class="btn btn-colored btn-theme-colored text-uppercase" href="#">Lihat Selengkapnya</a>
                    </div>
                </div>
                <div class="col-md-8 wow fadeInUp animation-delay4">
                    <h3 class="text-gray-silver font-playfair mt-10 mt-sm-30 mb-0">Jadwal</h3>
                    <h2 class="text-gray font-playfair mt-0">Poliklinik & Dokter Spesialis</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="text-center success">
                                    <td>POLIKLINIK</td>
                                    <td>DOKTER</td>
                                    <td>SENIN</td>
                                    <td>SELASA</td>
                                    <td>RABU</td>
                                    <td>KAMIS</td>
                                    <td>JUMAT</td>
                                    <td>SABTU</td>
                                </tr>
                            </thead>
                            <tbody class="table-striped">
                                <tr>
                                    <td>Poli Dalam 1</td>
                                    <td>dr. Primahati RR., Sp.PD</td>
                                    <td>Buka</td>
                                    <td>Buka</td>
                                    <td>Buka</td>
                                    <td>-</td>
                                    <td>Buka</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Poli Dalam 2</td>
                                    <td>dr. Setyo Raharjo, Sp.PD</td>
                                    <td>Buka</td>
                                    <td>Buka</td>
                                    <td>Buka</td>
                                    <td>Buka</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>dr. Irvan Nugraha, Sp.PD</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Buka</td>
                                    <td>Buka</td>
                                </tr>
                                <tr>
                                    <td>Geriatri</td>
                                    <td>dr. Irvan Nugraha, Sp.PD</td>
                                    <td>Buka</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>dr. Setyo Raharjo, Sp.PD</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Buka</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a class="btn btn-colored btn-theme-colored text-uppercase" href="#">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>

    <section class="divider parallax layer-overlay overlay-light" data-stellar-background-ratio="0.5" data-bg-img="assets/images/all_karyawan_5.jpg">
        <div class="container pt-120 pb-120">
            <div class="section-content">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <h2 class="text-uppercase mt-0">Karyawan Kami</h2>
                            <div class="title-icon">
                                <img class="mb-10" src="assets/images/title-icon.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center"> 
                            <a href="#"> <i class="fa fa-user-md text-theme-colored font-60"></i></a>
                            <h5 class="number text-theme-colored font-32">19100+</h5>
                            <h6 class="title text-gray font-16">Dokter</h6>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center"> 
                            <a href="#"> <i class="icon-medical51 text-theme-colored font-60"></i></a>
                            <h5 class="number text-theme-colored font-32">129</h5>
                            <h6 class="title text-gray font-16">Perawat</h6>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center"> 
                            <a href="#"> <i class="icon_building text-theme-colored font-60"></i></a>
                            <h5 class="number text-theme-colored font-32">850+</h5>
                            <h6 class="title text-gray font-16">Clinic Rooms</h6>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center"> 
                            <a href="#"> <i class="icon_gift_alt text-theme-colored font-60"></i></a>
                            <h5 class="number text-theme-colored font-32">456</h5>
                            <h6 class="title text-gray font-16">Awards Won</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h2 class="text-uppercase mt-0">Jajaran Direksi</h2>
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
                                <div class="team border-1px text-center maxwidth400 bg-light">
                                    <div class="thumb"><img class="img-fullwidth" src="assets/images/team/team1.jpg" alt=""></div>
                                    <div class="p-15 bg-white-light text-center">
                                        <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">Dr. H. Rizali Sofyan</a></h4>
                                        <h6 class="mt-0 pb-10 list-border ">Direktur</h6>
                                        <p class="mb-0">
                                            <a class="btn btn-colored btn-theme-colored text-uppercase" href="#">Lihat Profil</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team border-1px sm-text-center maxwidth400">
                                    <div class="thumb"><img class="img-fullwidth" src="assets/images/team/team2.jpg" alt=""></div>
                                    <div class="p-15 bg-white-light text-center">
                                        <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">Aris</a></h4>
                                        <h6 class="mt-0 pb-10 list-border ">Wadir Kepegawaian</h6>
                                        <p class="mb-0">
                                            <a class="btn btn-colored btn-theme-colored text-uppercase" href="#">Lihat Profil</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team border-1px sm-text-center maxwidth400">
                                    <div class="thumb"><img class="img-fullwidth" src="assets/images/team/team3.jpg" alt=""></div>
                                    <div class="p-15 bg-white-light text-center">
                                        <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">Dr. Bayu</a></h4>
                                        <h6 class="mt-0 pb-10 list-border ">Wadir Pelayanan Medis</h6>
                                        <p class="mb-0">
                                            <a class="btn btn-colored btn-theme-colored text-uppercase" href="#">Lihat Profil</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team border-1px sm-text-center maxwidth400">
                                    <div class="thumb"><img class="img-fullwidth" src="assets/images/team/team4.jpg" alt=""></div>
                                    <div class="p-15 bg-white-light text-center">
                                        <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">Dr. Mark Jacobson</a></h4>
                                        <h6 class="mt-0 pb-10">Wadir Keperawatan</h6>
                                        <p class="mb-0">
                                            <a class="btn btn-colored btn-theme-colored text-uppercase" href="#">Lihat Profil</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team border-1px sm-text-center maxwidth400">
                                    <div class="thumb"><img class="img-fullwidth" src="assets/images/team/team1.jpg" alt=""></div>
                                    <div class="content p-15 bg-white-light">
                                        <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">Dr. Smile Jhon</a></h4>
                                        <h6 class="title mt-0">Orthopaedics</h6>
                                        <p class="mb-30">Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                        <ul class="social-icons icon-dark icon-theme-colored icon-sm pull-left flip">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team">
        <div class="container">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase mt-0">Jajaran Direksi</h2>
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
                                <div class="member">
                                    <div class="member-img">
                                        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t4.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>Emma White</h4>
                                        <a class="btn btn-colored btn-theme-colored text-uppercase" href="#">Lihat Selengkapnya</a>
                                        
                                    </div>
                                    <div class="card-body py-3">
                                            <h3>Direktur</h3>
                                        </div>
                                        <div class="card-footer pt-0 border-top-0">
                                            <a href="#">email@email.com </a>
                                        </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t3.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>Bobby Robins</h4>
                                        <span>Web Developer</span>
                                        <div class="social-links">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t2.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>Gena lee</h4>
                                        <span>SEO Expert</span>
                                        <div class="social-links">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>Noel Flantier</h4>
                                        <span>ISO Developer</span>
                                        <div class="social-links">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
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

    <section>
        <div class="container">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase mt-0">Jajaran Direksi</h2>
                        <div class="title-icon">
                            <img class="mb-5" src="assets/images/title-icon.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row multi-row-clearfix">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="row wow fadeInDown" data-wow-duration="3s" data-wow-offset="10">
                                <div class="team-carousel-4col">
                                    <div class="item">
                                        <div class="wsk-cp-product">
                                            <div class="wsk-cp-img">
                                                <img src="assets/images/photos/dir.jpg" alt="Product" class="img-responsive" />
                                            </div>
                                            <div class="wsk-cp-text">
                                                <div class="category">
                                                    <span>Direktur</span>
                                                </div>
                                                <div class="title-product">
                                                    <h3>Dr. H. Rizali Sofyan</h3>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <a class="btn btn-block btn-colored btn-theme-colored" href="#">Lihat Profil</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="wsk-cp-product">
                                            <div class="wsk-cp-img">
                                                <img src="https://1.bp.blogspot.com/-b-2SgNUrFHg/WVSvmewWqgI/AAAAAAAAAK0/1K4YCcbYjhokHwV_IgiVJN9mEnQoWunIwCPcBGAYYCw/s1600/fashion-portrait-nicole-6347.jpg" alt="Product" class="img-responsive" />
                                            </div>
                                            <div class="wsk-cp-text">
                                                <div class="category">
                                                    <span>Direktur</span>
                                                </div>
                                                <div class="title-product">
                                                    <h3>Dr. H. Rizali Sofyan</h3>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <a class="btn btn-block btn-colored btn-theme-colored" href="#">Lihat Profil</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="wsk-cp-product">
                                            <div class="wsk-cp-img">
                                                <img src="assets/images/team/2.jpg" alt="Product" class="img-responsive" />
                                            </div>
                                            <div class="wsk-cp-text">
                                                <div class="category">
                                                    <span>Direktur</span>
                                                </div>
                                                <div class="title-product">
                                                    <h3>Dr. H. Rizali Sofyan</h3>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <a class="btn btn-block btn-colored btn-theme-colored" href="#">Lihat Profil</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="wsk-cp-product">
                                            <div class="wsk-cp-img">
                                                <img src="https://3.bp.blogspot.com/-iUes8qr4uC8/WVSvl6Wf_fI/AAAAAAAAAKs/JiTUUVvdbqEC_QGGaQhuVJiezIN3LIqEgCPcBGAYYCw/s1600/IMG_5367-bp.jpg" alt="Product" class="img-responsive" />
                                            </div>
                                            <div class="wsk-cp-text">
                                                <div class="category">
                                                    <span>Direktur</span>
                                                </div>
                                                <div class="title-product">
                                                    <h3>Dr. H. Rizali Sofyan</h3>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <a class="btn btn-block btn-colored btn-theme-colored" href="#">Lihat Profil</a>
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

    <section class="bg-light">
        <div class="container pb-110">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h2 class="text-uppercase mt-0">Berita dan Kegiatan</h2>
                        <div class="title-icon">
                            <img class="mb-10" src="assets/images/title-icon.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row multi-row-clearfix">
                    <div class="blog-posts">
                        <div class="row">
                            <div class="col-lg-6">
                                <article class="post style1 clearfix maxwidth500">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-lg-4">
                                            <div class="entry-header">
                                                <div class="post-thumb">
                                                    <img src="assets/images/blog/sm-2.jpg" alt="" class="img-fluid img-fullwidth">
                                                </div>
                                                <div class="entry-date entry-date-absolute">25 <span>Dec</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-lg-8">
                                            <div class="entry-content pl-50 p-20 pt-30 pr-20">
                                                <h5 class="entry-title pt-0"><a href="#">Different types of stroke</a></h5>
                                                <p>Lorem ipsum dolor adipisicing amet, consectetur sit elit. Aspernatur incidihil
                                                quo officia.</p>
                                                <div class="entry-meta float-left flip mt-10">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-thumbs-o-up mr-5"></i> 13</li>
                                                        <li class="list-inline-item"><i class="fa fa-comments-o mr-5"></i> 43</li>
                                                    </ul>
                                                </div> <a class="text-theme-colored mt-10 mb-0 float-right flip" href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-6">
                                <article class="post style1 clearfix maxwidth500">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-lg-4">
                                            <div class="entry-header">
                                                <div class="post-thumb">
                                                    <img src="assets/images/blog/sm-2.jpg" alt="" class="img-fluid img-fullwidth">
                                                </div>
                                                <div class="entry-date entry-date-absolute">25 <span>Dec</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-lg-8">
                                            <div class="entry-content pl-50 p-20 pt-30 pr-20">
                                                <h5 class="entry-title pt-0"><a href="#">Different types of stroke</a></h5>
                                                <p>Lorem ipsum dolor adipisicing amet, consectetur sit elit. Aspernatur incidihil
                                                quo officia.</p>
                                                <div class="entry-meta float-left flip mt-10">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-thumbs-o-up mr-5"></i> 13</li>
                                                        <li class="list-inline-item"><i class="fa fa-comments-o mr-5"></i> 43</li>
                                                    </ul>
                                                </div> <a class="text-theme-colored mt-10 mb-0 float-right flip" href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>