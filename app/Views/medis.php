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
    <title>IGD/UGD</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Include Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- ... other scripts ... -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="main-content">
        <section id="medis" class="divider">
        </section>

        <section>
            <div class="container pt-20 pb-100">
                <h2 class="heading-border" align="center">STANDAR PELAYANAN PUBLIK
                PADA RUMAS SAKIT UMUM DAERAH CIAMIS
                INSTALASI LABOLATORIUM
                </h2>
                <br>
                <div class="esc-heading lr-line left-heading mb-30">
                <h4>Pelayanan Labolatorium</h4>
                </div>
                <div class="row">
                <div class="col-md-3">
                    <div class="vertical-tab">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-1-tab" data-bs-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Persyaratan</a>
                        <a class="nav-link" id="v-pills-2-tab" data-bs-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Sistem, Mekanisme dan Prosedur</a>
                        <a class="nav-link" id="v-pills-3-tab" data-bs-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Jangka Waktu Pelayanan</a>
                        <a class="nav-link" id="v-pills-4-tab" data-bs-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Biaya / Tarif</a>
                        <a class="nav-link" id="v-pills-5-tab" data-bs-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Produk Pelayanan</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Rawat Jalan
                            <br>&nbsp;&nbsp;1.  Formulir Permintaan Pemeriksaan Laboratorium yang ditandatangani oleh DPJP.
                            <br>&nbsp;&nbsp;2.  Bukti Registrasi Pendaftaran Poliklinik y
                            <br>&nbsp;&nbsp;3.  Kelengkapan berkas pendaftaran BPJS, untuk pasien peserta BPJS.
                            <br>&nbsp;&nbsp;4.  Telah teregister pada SIM RS
                            <br>Rawat Inap & IGD
                            <br>&nbsp;&nbsp;1.  Telah terregister pada SIM RS
                            <br>&nbsp;&nbsp;2.  Formulir Permintaan Pemeriksaan Laboratorium yang ditandatangani oleh DPJP.
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <!-- <img class="float-start flip pr-20" width="300" src="http://placehold.it/155x90" alt="images"> -->
                            <p>
                            a.  Pasien
                            <br>&nbsp;&nbsp;1 Pasien datang dan diterima oleh petugas Administrasi / Pendaftaran.
                            <br>&nbsp;&nbsp;2 Pasien menyerahkan :
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i.  Formulir Permintaan Laboratorium yang sudah diisi dan ditandatngani oleh DPJP.
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ii. Pasien menunjukan Kartu Pasien dan bukti pendaftaran Poliklinik.
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iii.  Bagi Peserta BPJS, menyerahkan berkas pendaftaran BPJS yang sudah lengkap.
                            <br>&nbsp;&nbsp;3 Bagi Pasien Umum;
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i.  Menerima Rincian Biaya Pemeriksaan Lab.
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ii. Melakukan Pembayaran pada Loket Pembayaran Resmi RSUD Ciamis
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iii.  Menyerahkan bukti pembayaran biaya pemeriksaan laboratorium.

                            <br>b.  Petugas Administrasi / Pendaftaran
                            <br>&nbsp;&nbsp;1 Menerima FPPL dan meneliti persyaratan/berkas pasien (BPJS).
                            <br>&nbsp;&nbsp;2 Melaksanakan proses input data registrasi pasien laboratorium rawat jalan pada komputer SIM RS.
                            <br>&nbsp;&nbsp;3 Mencetak Rincian Biaya Pemeriksaan dan mempersilahkan pasien (umum) untuk melakukan pembayaran di loket pembayaran RS.
                            <br>&nbsp;&nbsp;4 Menyerahkan FPPL yang telah diregistrasi ke Bagian Sampling.
                            <br>&nbsp;&nbsp;5 Mempersilahkan pasien ke bagian sampling untuk proses pengambilan spesimen.   
                            <br>&nbsp;&nbsp;6 Melaksanakan input data hasil pemeriksaan laboratorium.
                            <br>&nbsp;&nbsp;7 Melakukan Pencetakan hasil pemeriksaan laboratorium.
                            <br>&nbsp;&nbsp;8 Menyerahkan cetakan hasil pemeriksaan ke supervisior atau verifikator untuk diverifikasi dan validasi.
                            <br>&nbsp;&nbsp;9 Menyerahkan hasil pemeriksaan beserta berkas persyaratan poliklinik kepada pasien.
                            <br>&nbsp;&nbsp;10  Mempersilahkan pasien untuk kembali ke poliklnik.


                            <br>c.  Petugas Sampling
                            <br>&nbsp;&nbsp;1 Menerima FPPL yang telah diregistrasi dari petugas pendaftaran laboratorium.
                            <br>&nbsp;&nbsp;2 Mempersilahkan pasien untuk pelaksanaan tindakan pengambilan spesimen.
                            <br>&nbsp;&nbsp;3 Meneliti FPPL dan mencocokan identitas pasien.
                            <br>&nbsp;&nbsp;4 Memberitahukan, menjelaskan dan menyiapkan pasien untuk pelaksaan tindakan pengambilan spesimen.
                            <br>&nbsp;&nbsp;5 Melaksanakan pengambilan spesimen sesuai SPO pengambilan spesimen.
                            <br>&nbsp;&nbsp;6 Menyerahkan spesimen ke bagian penerimaan spesimen.

                            <br>d.  Petugas Bagian Penerimaan Spesimen
                            <br>&nbsp;&nbsp;1 Menerima FPPL dan spesimen dari bagian pengambilan spesimen.
                            <br>&nbsp;&nbsp;2 Melaksanakan pencatatan penerimaan spesimen (input data) pada SIM RS. 
                            <br>&nbsp;&nbsp;3. Melaksanakan labelisasi spesimen.
                            <br>&nbsp;&nbsp;<br>&nbsp;&nbsp;4.  Memisahkan, mengolah dan mendistribusikan spesimen ke bagian pemeriksaan sesuai dengan permintaan.

                            <br>e.  Petugas Pelaksana Pemeriksaan
                            <br>&nbsp;&nbsp;1 Menerima FPPL dan spesimen dari bagian penerimaan spesimen.
                            <br>&nbsp;&nbsp;2 Melakukan pencatatan permintaan pemeriksaan sesuai FPPL.
                            <br>&nbsp;&nbsp;3 Melakukan pengolahan spesimen dengan mempersiapkan spesimen yang akan diperiksa.
                            <br>&nbsp;&nbsp;4 Melaksanakan pemeriksaan sesuai permintaan dan SPO pemeriksaan laboratorium.
                            <br>&nbsp;&nbsp;5 Melaksanakan prosedur pemeriksaan Cito dan Nilai Kritis.
                            <br>&nbsp;&nbsp;6 Melaksanakan prosedur pemeriksaan rujukan.
                            <br>&nbsp;&nbsp;7 Mencatat hasil pemeriksaan hasil laboratorium dalam buku register sesui dengan identifikasi pasen pada FPPL.
                            <br>&nbsp;&nbsp;8 Melaksanakan konsultasi hasil pemeriksaan dengan Dokter penanggung jawab teknis.
                            <br>&nbsp;&nbsp;9 Menyerahkan hasil pemeriksaan ke bagian administrasi untuk dilakukan input data dan pencetakan laporan hasil pemeriksaan.

                            <br>f.  Supervisior / Verifikator
                            <br>&nbsp;&nbsp;1 Menerima Cetakan Laporan Hasil Pemeriksaan dari petugas administrasi (input data).
                            <br>&nbsp;&nbsp;2 Meneliti Cetakan Laporan Hasil Pemeriksaan dan mencocokan kesesuaian identitas dan permintaan pemeriksaan.
                            <br>&nbsp;&nbsp;3 Melaksanakan konsultasi dan meminta validasi kepada dokter penanggungjawab teknis.
                            <br>&nbsp;&nbsp;4 Menandatangani laporan hasil pemeriksaan dan menyerahkannya kembali ke bagian administrasi untuk dikeluarkan atau berikan kepada pasien.

                            <br>g.  Dokter Penanggung Jawab Teknis / Dokter Lab.
                            <br>&nbsp;&nbsp;1 Melaksanakan validasi dan memandatangani hasil pemeriksaan.
                            <br>&nbsp;&nbsp;2 Menerima konsultasi dari pelaksana pemeriksa    laboratorium.
                            <br>&nbsp;&nbsp;3 Menerima konsultasi dari DPJP atau dokter peminta pemeriksaan.
                            <br>&nbsp;&nbsp;4 Memberikan catatan, saran dan ekpertise hasil pemeriksaaan laboratorium.
                            <br>
                            <br>PELAYANAN LABORATORIUM
                            RAWAT IANP & IGD
                            <br>
                            <br>a.  Petugas di Ruang Rawat Inap & IGD
                            <br>&nbsp;&nbsp;1.  Menerima FPPL dari DPJP atau dokter pemeriksa.
                            <br>&nbsp;&nbsp;2.  Melaksanakan pengambilan spesimen sesuai FPPL.
                            <br>&nbsp;&nbsp;3.  Mengirimkan FPPL beserta spesimen ke instalasi laboratorium.
                            <br>&nbsp;&nbsp;4.  Melaksanakan komunikasi dan koordinasi tentang pemeriksaan dengan petugas laboratorium.

                            <br>b.  Petugas Bagian Penerimaan Spesimen
                            <br>&nbsp;&nbsp;1.  Menerima FPPL dan spesimen dari petugas ruangan rawat inap dan IGD.
                            <br>&nbsp;&nbsp;2.  Melaksanakan pencatatan penerimaan spesimen (input data).
                            <br>&nbsp;&nbsp;3.  Melaksanakan labelisasi spesimen.
                            <br>&nbsp;&nbsp;4.  Memisahkan, mengolah dan mendistribusikan spesimen ke bagian pemeriksaan sesuai dengan permintaan.

                            <br>c.  Petugas Pelaksana Pemeriksaan
                            <br>&nbsp;&nbsp;1.  Menerima FPPL dan spesimen dari bagian penerimaan spesimen.
                            <br>&nbsp;&nbsp;2.  Melakukan pencatatan pemeriksaan sesuai FPPL.
                            <br>&nbsp;&nbsp;3.  Melakukan pengolahan spesimen.
                            <br>&nbsp;&nbsp;4.  Melaksanakan pemeriksaan sesuai permintaan dan SPO pemeriksaan laboratorium.
                            <br>&nbsp;&nbsp;5.  Melaksanakan konsultasi hasil pemeriksaan dengan Dokter Laboratorium.
                            <br>&nbsp;&nbsp;6.  Melaksanakan prosedur pemeriksaan cito dan nilai kritis
                            <br>&nbsp;&nbsp;7.  Mencatat hasil pemeriksaan hasil laboratorium dalam buku register sesui dengan identifikasi pasen pada FPPL.
                            <br>&nbsp;&nbsp;8.  Melaksanakan prosedur pemeriksaan rujukan.
                            <br>&nbsp;&nbsp;9.  Menyerahkan hasil pemeriksaan ke bagian administrasi untuk dilakukan input data dan pencetakan laporan hasil pemeriksaan.

                            <br>d.  Supervisior / Verifikator
                            <br>&nbsp;&nbsp;1.  Menerima Cetakan Laporan Hasil Pemeriksaan dari petugas administrasi (input data).
                            <br>&nbsp;&nbsp;2.  Meneliti Cetakan Laporan Hasil Pemeriksaan dan mencocokan kesesuaian identitas dan permintaan pemeriksaan.
                            <br>&nbsp;&nbsp;3.  Melaksanakan konsultasi dan meminta validasi kepada dokter penanggungjawab teknis.
                            <br>&nbsp;&nbsp;4.  Menandatangani laporan hasil pemeriksaan dan menyerahkannya kembali ke bagian administrasi untuk dikeluarkan atau berikan kepada pasien.


                            <br>e.  Dokter Penanggung Jawab Teknis / Dokter Lab.
                            <br>&nbsp;&nbsp;1.  Melaksanakan validasi  hasil pemeriksaan.
                            <br>&nbsp;&nbsp;2.  Menerima konsultasi dari pelaksana pemeriksa laboratorium.
                            <br>&nbsp;&nbsp;3.  Menerima konsultasi dari DPJP atau dokter peminta pemeriksaan.
                            <br>&nbsp;&nbsp;4.  Memberikan catatan, saran dan ekpertise hasil pemeriksaaan laboratorium.

                            <br>&nbsp;&nbsp;f.  Petugas Administrasi
                            <br>&nbsp;&nbsp;g.  Melaksanakan input data hasil pemeriksaan
                            <br>&nbsp;&nbsp;h.  Melaksanakan pencetakan laporan hasil pemeriksaan.
                            <br>&nbsp;&nbsp;i.  Mendistribusikan hasil pemeriksaan sesuai jadwal ke ruangan.
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>
                            Rawat Jalan
                            <br>Waktu Tunggu Pelayanan Rawat Jalan :  < 140 menit 
                            <br>Waktu Tunggu pemeriksaan Rawat Jalan:
                            <br>Hematologi Rutin           : 60 menit
                            <br>Laju Endap Darah           : 120 menit  
                            <br>Pemeriksaan Kimia          : 120 menit  
                            <br>Test Glukosa rapid          : 30 menit 
                            <br>Pemeriksaan Urine Rutin       : 60 menit 
                            <br>Pemeriksaan Kehamilan         : 30 menit 
                            <br>PemeriksaanNarkoba          : 30 menit 
                            <br>Pemeriksaan HIV         : 120 menit  
                            <br>Pemeriksaan Immunoserologi : 90 menit
                            <br>
                            <br>Rawat Inap & IGD
                            <br>Semua Pemeriksaan,300 menit 
                            <br>kecuali khusus & rujukan
                            <br>

                            <br>Pemeriksaan Cito (Ranap, Rajal, IGD)
                            <br>Semua Pemeriksaan, 90 menit 
                            <br>kecuali khusus & rujukan
                            <br>
                            <br>Pemeriksaan khusus : 2-3 hari
                            <br>Pemeriksaan rujukan :
                            <br>Sesuai waktu tunggu pemeriksaan lab. rujukan
                            <br>
                            <br>Waktu tunggu pemeriksaan :
                            <br>&nbsp;&nbsp;1.  Dihitung mulai sampling sampai validasi hasil
                            <br>&nbsp;&nbsp;2.  Administrasi lengkap
                            <br>&nbsp;&nbsp;3.  Tidak ada gangguan alat & sistem informasi


                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>1. Tarip Pemeriksaan Laboratorium Pasien Umum :
                            <br>&nbsp;&nbsp;Terlampir(sesuai Perda No. 61 Tahun 2015)
                            <br>2.  Pasien BPJS tidak dipungut biaya pemeriksaan. 
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Dokumen berupa Laporan Hasil Pemeriksaan Laboratorium
                            </p>
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
            <div class="container pt-20 pb-100">
                <h2 class="heading-border" align="center">STANDAR PELAYANAN PUBLIK
                PADA RUMAS SAKIT UMUM DAERAH CIAMIS
                INSTALASI RADIOLOGI
                </h2>
                <br>
                <div class="esc-heading lr-line left-heading mb-30">
                <h4>Service Delivery ( Proses Penyampaian Pelayanan )</h4>
                </div>
                <div class="row">
                <div class="col-md-3">
                    <div class="vertical-tab">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-11-tab" data-bs-toggle="pill" href="#v-pills-11" role="tab" aria-controls="v-pills-11" aria-selected="true">Persyaratan</a>
                        <a class="nav-link" id="v-pills-12-tab" data-bs-toggle="pill" href="#v-pills-12" role="tab" aria-controls="v-pills-12" aria-selected="false">Sistem, Mekanisme dan Prosedur</a>
                        <a class="nav-link" id="v-pills-13-tab" data-bs-toggle="pill" href="#v-pills-13" role="tab" aria-controls="v-pills-13" aria-selected="false">Jangka Waktu Pelayanan</a>
                        <a class="nav-link" id="v-pills-14-tab" data-bs-toggle="pill" href="#v-pills-14" role="tab" aria-controls="v-pills-14" aria-selected="false">Biaya / Tarif</a>
                        <a class="nav-link" id="v-pills-15-tab" data-bs-toggle="pill" href="#v-pills-15" role="tab" aria-controls="v-pills-15" aria-selected="false">Produk Pelayanan</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-11" role="tabpanel" aria-labelledby="v-pills-11-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>1. Formulir Permintaan Pemeriksaan Radiologi yang ditandatangani oleh DPJP baik dari polklinik / rawat inap maupun IGD
                            <br>2.  Kelengkapan berkas pendaftaran BPJS, untuk pasien peserta BPJS.

                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-12" role="tabpanel" aria-labelledby="v-pills-12-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <!-- <img class="float-start flip pr-20" width="300" src="http://placehold.it/155x90" alt="images"> -->
                            <p>a. Pasien
                            <br>&nbsp;&nbsp;1.  Pasien datang dan diterima oleh petugas Administrasi / Pendaftaran.
                            <br>&nbsp;&nbsp;2.  Pasien menyerahkan : 
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Formulir Permintaan Radiologi yang sudah diisi dan ditandatngani oleh DPJP.
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Pasien menunjukan Kartu Pasien dan bukti pendaftaran Poliklinik.
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Bagi Peserta BPJS, menyerahkan berkas pendaftaran BPJS yang sudah lengkap.
                            <br>&nbsp;&nbsp;3.  Pasien Umum;
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Menerima Rincian Biaya Pemeriksaan Radiologi..
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Melakukan Pembayaran pada Loket Pembayaran Resmi RSUD Ciamis
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Menyerahkan bukti pembayaran biaya pemeriksaan Radiologi.
                            <br>b.  Petugas Administrasi / Pendaftaran
                            <br>&nbsp;&nbsp;1.  Petugas administrasi mengecek order by SIMRS.
                            <br>&nbsp;&nbsp;2.  Petugas administrasi radiologi menkonfirmasi dan mencocokan kembali identitas pasien dan jenis pemeriksaan yang diminta dokter pengirim.
                            <br>&nbsp;&nbsp;3.  Petugas administrasi melakukan approve order by SIMRS. 
                            <br>&nbsp;&nbsp;4.  Petugas administrasi radiologi mencatat dalam buku register pasien.
                            <br>&nbsp;&nbsp;5.  Petugas administrasi radiologi membuat kwitansi pembayaran sesuai pemeriksaan yang akan dilakukan.
                            <br>&nbsp;&nbsp;6.  Petugas administrasi radiologi menginstruksikan pasien/keluarga pasien untuk membayar biaya pemeriksaan sesuai dengan kwitansi yang sudah dibuat, ke loket pembayaran/kasir rawat jalan.
                            <br>&nbsp;&nbsp;7.  Setelah pasien/keluarga pasien membayar di loket pembayaran/kasir rawat jalan dengan membawa bukti pembayaran, Petugas admninistrasi radiologi mempersilahkan pasien masuk ke ruangan pemeriksaan sesuai pemeriksaan yang akan dilakukan.
                            <br>c.  Petugas Radiologi
                            <br>&nbsp;&nbsp;1.  Menerima FPPR yang telah diregistrasi dari petugas pendaftaran radiologi.
                            <br>&nbsp;&nbsp;2.  Mempersilahkan pasien untuk pelaksanaan pemeriksaan radiologi.
                            <br>&nbsp;&nbsp;3.  Meneliti FPPR dan mencocokan identitas pasien.
                            <br>&nbsp;&nbsp;4.  Memberitahukan, menjelaskan dan menyiapkan pasien untuk pelaksaan pemeriksaan radiologi.
                            <br>&nbsp;&nbsp;5.  Petugas radiologi menginput data pasien pada console Workstation.
                            <br>&nbsp;&nbsp;6.  Petugas radiologi melaksanakan pemeriksaan radiologi sesuai FPPR dari DPJP.
                            <br>&nbsp;&nbsp;7.  Mempersilahkan pasien untuk menunggu hasil pemeriksaan di ruang tunggu.
                            <br>&nbsp;&nbsp;8.  Melakukan recon pada console workstation untuk menghasilkan gambar radiografi.
                            <br>&nbsp;&nbsp;9.  Mengirim gambar radiografi digital dari console workstation ke komputer Dokter Spesialis Radiologi untuk di eksperetise.
                            <br>&nbsp;&nbsp;10. Petugas radiologi melakukan print gambar radiografi dan menyerahkanya ke ruang administrasi.


                            <br>d.  Dokter Spesialis Radiologi
                            <br>&nbsp;&nbsp;1.  Menerima gambar radiografi digital pada komputer  untuk di ekspertise.
                            <br>&nbsp;&nbsp;2.  Pembacaan foto Rontgen dilakukan oleh Dokter Spesialis Radiologi.
                            <br>&nbsp;&nbsp;3.  Untuk permintaan cyto dilakukan ekspertise dengan segera, apabila Dokter Spesialis Radiologi belum sampai di tempat, gambar radiografi digital bisa dikirim langsung ke Laptop/android Dokter Spesialis Radiologi menggunakan teleradioloi.
                            <br>&nbsp;&nbsp;4.  Hasil expertise dicatat dikomputer dan di arsipkan, sedangkan yang asli diserahkan ke pasien.
                            <br>&nbsp;&nbsp;5.  Melakukan pemeriksaaan USG
                            <br>&nbsp;&nbsp;6.  Melakukan pemeriksaan radiologi dengan kontras.

                            <br>e.  Pelayanan pemeriksaan radiologi IGD
                            <br>&nbsp;&nbsp;1.  Pasien datang ke ruang radiologi di antar petugas IGD atau perawat IGD dan membawa FPPR yang sudah di tandatangani oleh DPJP.
                            <br>&nbsp;&nbsp;2.  Petugas administrasi mengecek order by SIMRS.
                            <br>&nbsp;&nbsp;3.  Petugas administrasi radiologi menkonfirmasi dan mencocokan kembali identitas pasien dan jenis pemeriksaan yang diminta dokter pengirim. 
                            <br>&nbsp;&nbsp;4.  Petugas administrasi melakukan approve order by SIMRS. 
                            <br>&nbsp;&nbsp;5.  Petugas administrasi radiologi mencatat dalam buku register pasien.
                            <br>&nbsp;&nbsp;6.  Petugas administrasi radiologi membuat kwitansi pembayaran sesuai pemeriksaan yang akan dilakukan.
                            <br>&nbsp;&nbsp;7.  Untuk pasien IGD hasil foto dilihat oleh dokter jaga, expertise oleh dokter radiologi dilakukan pada waktu jam kerja

                            <br>f.  Pelayanan pemeriksaan radiologi rawat inap
                            <br>&nbsp;&nbsp;1.  Pasien datang ke ruang radiologi di antar petugas rawat inap atau perawat dan membawa FPPR yang sudah di tandatangani oleh DPJP.
                            <br>&nbsp;&nbsp;2.  Petugas administrasi mengecek order by SIMRS.
                            <br>&nbsp;&nbsp;3.  Petugas administrasi radiologi menkonfirmasi dan mencocokan kembali identitas pasien dan jenis pemeriksaan yang diminta dokter pengirim. 
                            <br>&nbsp;&nbsp;4.  Petugas administrasi melakukan approve order by SIMRS. 
                            <br>&nbsp;&nbsp;5.  Petugas administrasi radiologi mencatat dalam buku register pasien.
                            <br>&nbsp;&nbsp;6.  Petugas administrasi radiologi membuat kwitansi pembayaran sesuai pemeriksaan yang akan dilakukan.
                            <br>&nbsp;&nbsp;7.  Petugas admninistrasi radiologi mempersilahkan pasien masuk ke ruangan pemeriksaan sesuai pemeriksaan yang akan dilakukan.
                            <br>&nbsp;&nbsp;8.  Pengambilan hasil diambil oleh petugas ruangan rawat inap  setelah di expertise oleh dr Dokter Spesialis Radiologi.

                            <br>g.  Pelayanan pemeriksaan radiologi rawat jalan / poliklinik
                            <br>&nbsp;&nbsp;1.  Pasien/Keluarga datang ke ruang radiologi dan membawa FPPR yang sudah di tandatangani oleh dokter pengirim.
                            <br>&nbsp;&nbsp;2.  Petugas administrasi mengecek order by SIMRS.
                            <br>&nbsp;&nbsp;3.  Petugas administrasi radiologi menkonfirmasi dan mencocokan kembali identitas pasien dan jenis pemeriksaan yang diminta dokter pengirim. 
                            <br>&nbsp;&nbsp;4.  Petugas administrasi melakukan approve order by SIMRS. 
                            <br>&nbsp;&nbsp;5.  Petugas administrasi radiologi mencatat dalam buku register pasien.
                            <br>&nbsp;&nbsp;6.  Petugas administrasi radiologi membuat kwitansi pembayaran sesuai pemeriksaan yang akan dilakukan.
                            <br>&nbsp;&nbsp;7.  Petugas administrasi radiologi menginstruksikan pasien/keluarga pasien untuk membayar biaya pemeriksaan sesuai dengan kwitansi yang sudah dibuat, ke loket pembayaran/kasir rawat jalan.
                            <br>&nbsp;&nbsp;8.  Setelah pasien/keluarga pasien membayar di loket pembayaran/kasir rawat jalan dengan membawa bukti pembayaran, Petugas admninistrasi radiologi mempersilahkan pasien masuk ke ruangan pemeriksaan sesuai pemeriksaan yang akan dilakukan.
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-13" role="tabpanel" aria-labelledby="v-pills-13-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Waktu penyelesaian pelayanan radiologi RSUD Ciamis :
                            <br>&nbsp;&nbsp;1.  Waktu pemeriksaan rontgen Konvensional : 1 – 3 Jam
                            <br>&nbsp;&nbsp;2.  Waktu pemeriksaan panoramik 1 Jam
                            <br>&nbsp;&nbsp;3.  Waktu pemeriksaan USG : 1 Jam
                            <br>&nbsp;&nbsp;4.  Waktu pemeriksaan ABUS : 1-2 hari
                            <br>&nbsp;&nbsp;5.  Waktu pemeriksaan CT Scan Non kontras : 1-3 Jam
                            <br>&nbsp;&nbsp;6.  Waktu pemeriksaan CT Scan kontras : 1-2 hari
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-14" role="tabpanel" aria-labelledby="v-pills-14-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Tarif pemeriksaan Rontgen:
                            <br>&nbsp;&nbsp;1.  Thorax AP/PA Rp 70.000,-
                            <br>&nbsp;&nbsp;2.  Abdomen RP 70.000,-
                            <br>&nbsp;&nbsp;3.  VLS Rp 95.000,-
                            <br>&nbsp;&nbsp;4.  Ekstremitas atas Rp 70.000,-
                            <br>&nbsp;&nbsp;5.  Ekstremitas bawah Rp 95.000,-
                            <br>&nbsp;&nbsp;6.  SPN Rp 140.000,-
                            <br>&nbsp;&nbsp;7.  Schedell AP+Lat Rp 95.000,-
                            <br>Tarif pemeriksaan USG :
                            <br>&nbsp;&nbsp;1.  USG Kepala Rp 272.000,-
                            <br>&nbsp;&nbsp;2.  Abdomen Rp 272.000,-
                            <br>&nbsp;&nbsp;3.  USG Mammae Rp 160.000,-
                            <br>&nbsp;&nbsp;4.  USG Prostat Rp 132.000,-
                            <br>&nbsp;&nbsp;5.  USG Dopler Rp 500.000,-
                            <br>Tarif pemeriksaan CT Scan :
                            <br>&nbsp;&nbsp;1.  CT Kepala non kontras Rp 762.000,-
                            <br>&nbsp;&nbsp;2.  CT kepala kontras Rp 1.500.000,-
                            <br>&nbsp;&nbsp;3.  CT Thorax kontras Rp 2.730.000,-
                            <br>&nbsp;&nbsp;4.  CT Abdomen Kontras Rp 2.730.000,-
                            <br>Tarif pemeriksaan Panoramik Rp 200.000,-
                            <br>Tarif pemeriksaan ABUS Rp 500.000,-
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-15" role="tabpanel" aria-labelledby="v-pills-15-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Produk pelayanan dari instalasi radiologi RSUD Ciamis terdiri dari :
                            <br>&nbsp;&nbsp;1.  Pelayanan pemeriksaan Rontgen baik pemeriksaan kontras maupun non kontras.
                            <br>&nbsp;&nbsp;2.  Pelayanan pemeriksaan CT Scan baik pemeriksaan kontras maupun non kontras.
                            <br>&nbsp;&nbsp;3.  Pelayanan pemeriksaan USG.
                            <br>&nbsp;&nbsp;4.  Pelayanan pemeriksaan ABUS
                            <br>&nbsp;&nbsp;5.  Pelayanan panoramik
                            </p>
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
            <div class="container pt-20 pb-100">
                <h2 class="heading-border" align="center">STANDAR PELAYANAN PUBLIK
                PADA RUMAS SAKIT UMUM DAERAH CIAMIS
                PELAYANAN FARMASI
                </h2>
                <br>
                <div class="esc-heading lr-line left-heading mb-30">
                <h4>Pelayanan Farmasi</h4>
                </div>
                <div class="row">
                <div class="col-md-3">
                    <div class="vertical-tab">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-21-tab" data-bs-toggle="pill" href="#v-pills-21" role="tab" aria-controls="v-pills-21" aria-selected="true">Persyaratan</a>
                        <a class="nav-link" id="v-pills-22-tab" data-bs-toggle="pill" href="#v-pills-22" role="tab" aria-controls="v-pills-22" aria-selected="false">Sistem, Mekanisme dan Prosedur</a>
                        <a class="nav-link" id="v-pills-23-tab" data-bs-toggle="pill" href="#v-pills-23" role="tab" aria-controls="v-pills-23" aria-selected="false">Jangka Waktu Pelayanan</a>
                        <a class="nav-link" id="v-pills-24-tab" data-bs-toggle="pill" href="#v-pills-24" role="tab" aria-controls="v-pills-24" aria-selected="false">Biaya / Tarif</a>
                        <a class="nav-link" id="v-pills-25-tab" data-bs-toggle="pill" href="#v-pills-25" role="tab" aria-controls="v-pills-25" aria-selected="false">Produk Pelayanan</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-21" role="tabpanel" aria-labelledby="v-pills-21-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Depo Apotek Rawat Jalan
                            <br>&nbsp;&nbsp;1.  Permintaan dalam resep tertulis dari dokter penulis resep
                            <br>&nbsp;&nbsp;2.  Bukti Registrasi Pendaftaran (No.RM).
                            <br>&nbsp;&nbsp;3.  Kelengkapan berkas pendaftaran BPJS, SEP (Surat Elegibilitas Peserta). Untuk perlakuan khusus melampirkan persyaratan tertentu.

                            <br>Depo Apotek Rawat Inap
                            <br>&nbsp;&nbsp;1.  Catatan Pemberian Obat (CPO ) dan resep tertulis dari dokter penulis resep di depo Apotek Rawat Inap, untuk resep narkotika dan psikotropika di CPO harus melampirkan resep asli tulisan dokter dan ditanda tangani oleh dokter.
                            <br>&nbsp;&nbsp;2.  Telah terregister pada SIM RS
                            <br>&nbsp;&nbsp;3.  Kelengkapan berkas pendaftaran BPJS, SEP (Surat Elegibilitas Peserta).
                            <br>&nbsp;&nbsp;4.  Ada buku ekspedisi untuk bukti serah terima obat atau CPO dari petugas apotek dengan perawat yang membawa CPO ke apotek rawat inap.

                            <br>Depo Apotek IGD
                            <br>&nbsp;&nbsp;1.  Permintaan dalam resep tertulis dari dokter penulis resep di depo Apotek IGD.
                            <br>&nbsp;&nbsp;2.  Bukti Registrasi Pendaftaran IGD (No.RM).
                            <br>&nbsp;&nbsp;3.  Kelengkapan berkas pendaftaran BPJS, SEP (Surat Elegibilitas Peserta)

                            <br>Depo Instalasi Bedah Sentral (IBS)
                            <br>&nbsp;&nbsp;1.  Permintaan dalam lembar permintaan obat, alkes, obat anastesi dari perawat dan dari penata anastesi.
                            <br>&nbsp;&nbsp;2.  Bukti registrasi pendaftaran ( No. RM)
                            <br>&nbsp;&nbsp;3.  Kelengkapan berkas pendaftaran BPJS, SEP (Surat Elegibilitas Peserta)

                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-22" role="tabpanel" aria-labelledby="v-pills-22-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <!-- <img class="float-start flip pr-20" width="300" src="http://placehold.it/155x90" alt="images"> -->
                            <p>a. Pasien
                            <br>1.  Pasien datang dan diterima oleh petugas Apotek Rawat Jalan.
                            <br>2.  Pasien menyerahkan :
                            <br>&nbsp;&nbsp;- Resep tertulis dari dokter penulis resep di Apotek Rawat Jalan
                            <br>&nbsp;&nbsp;- Pasien menunjukan Kartu Pasien (No. Rekam medis) 
                            <br>3.  Pasien datang diberikan nomor antrian resep.

                            <br>b.  Petugas Penerimaan Resep
                            (Skrining Resep)
                            <br>&nbsp;&nbsp;1.  Melakukan pemeriksaan kelengkapan dan keabsahan resep, yaitu nama dokter, nomor izin praktek, tanggal penulisan resep, tanda tangan atau paraf dokter serta nama,nomor Medrek, alamat, umur, jenis kelamin dan berat badan pasien jika diperlukan ) rawat jalan.
                            <br>&nbsp;&nbsp;2.  Melakukan pemeriksaan kesesuaian farmasetik, yaitu bentuk sediaan, dosis, frekuensi, kekuatan.
                            <br>&nbsp;&nbsp;3.  Mengkaji aspek klinis, yaitu adanya alergi, efek samping, interaksi, kesesuaian (dosis, durasi, jumlah obat dan kondisi khusus lainnya).
                            <br>&nbsp;&nbsp;4.  Mengkomunikasikan ke dokter Poliklinik jika masalah resep / obat 

                            <br>c.  Petugas Penyiapan Sediaan Farmasi Apotek Rawat Jalan
                            <br>&nbsp;&nbsp;1.  Menyiapkan sediaan farmasi dan alat kesehatan sesuai dengan permintan pada resep rawat jalan.
                            <br>&nbsp;&nbsp;2.  Menghitung kesesuaian dosis ( tepat dosis )
                            <br>&nbsp;&nbsp;3.  Mengambil obat dan pembawanya dengan memperhatikan keberssihan
                            <br>&nbsp;&nbsp;4.  Menutup kembali wadah obat setelah pengambilan dan mengembalikan ke tempat semula (untuk tablet dalam kaleng)
                            <br>&nbsp;&nbsp;5.  Mencatat pengeluaran obat pada kartu stok.
                            <br>&nbsp;&nbsp;6.  Menyiapkan etiket warna putih untuk obat dalam dan warna biru untuk obat luar.
                            <br>&nbsp;&nbsp;7.  Menulis nama pasien, nomor medrek, nomor resep, tanggal resep, nama obat, kekuatan obat, jumlah obat, cara pakai sesuai dengan permintaan pada resep serta petunjuk dan informasi lain.

                            <br>d.  Petugas Penyerahan Sediaan Farmasi 
                            <br>&nbsp;&nbsp;1.  Melakukan pemeriksaan akhir sebelum dilakukan penyerahan  obat / telaah obat
                            <br>&nbsp;&nbsp;2.  Membuat salinan resep sesuai dengan resep asli dan diparaf oleh apoteker jika obat tidak tersedia / kosong stok
                            <br>&nbsp;&nbsp;3.  Memanggil nama dan nomor tunggu pasien rawat jalan.
                            <br>&nbsp;&nbsp;4.  Memeriksa identitas pasien ( nama pasien,nomor Medrek dan tanggal lahir pasien / umur pasien )
                            <br>&nbsp;&nbsp;5.  Menyerahkan obat yang disertai dengan pemberian informasi obat  ( konseling jika diperlukan ) di apotek rawat jalan.
                            <br>&nbsp;&nbsp;6.  Meminta pasien untuk mengulang informasi yang telah disampaikan.
                            <br>&nbsp;&nbsp;7.  Menyimpan resep pada tempatnya dan mendokumentasikan.
                            <br>&nbsp;&nbsp;8.  Mendokumentasikan semua tindakan apoteker dalam form PIO dan konseling di apotek rawat jalan
                            <br>&nbsp;&nbsp;9.  Monitoring ke pasien tentang keberhasilan terapi, efek samping.
                            <br>
                            <br>a. Pasien
                            Pasien berada di ruang perawatan.

                            <br>b.  Perawat
                            Perawat menyerahkan CPO (Catatan Pemberian Obat) resep tertulis pada CPO dari dokter penulis resep di Apotek Rawat Inap

                            <br>c.  Petugas Penerimaan Resep dalam Catatan Pemberian Obat (CPO)
                            (Skrining Resep)
                            <br>&nbsp;&nbsp;1.  Melakukan pemeriksaan kelengkapan dan keabsahan Catatan Pemberian Obat (CPO), yaitu nama dokter, nomor izin praktek, alamat, tanggal penulisan resep, tanda tangan atau paraf dokter serta nama, alamat, umur dengan mencantumkan tanggal lahir pasien, jenis kelamin dan berat badan pasien rawat inap.
                            <br>&nbsp;&nbsp;2.  Melakukan pemeriksaan kesesuaian farmasetik, yaitu bentuk sediaan, dosis, frekuensi, kekuatan.
                            <br>&nbsp;&nbsp;3.  Mengkaji aspek klinis, yaitu adanya alergi, efek samping, interaksi, kesesuaian (dosis, durasi, jumlah obat dan kondisi khusus lainnya).
                            <br>&nbsp;&nbsp;4.  Mengkomunikasikan ke dokter tentang masalah resep bila diperlukan seperti bila obat kosong petugas apotek harus konfirmasi ke dokter petugas resep.

                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d.  Petugas Penyiapan Sediaan Farmasi Apotek Rawat Inap
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a.  Menyiapkan sediaan farmasi dan alat kesehatan sesuai dengan permintan pada Catatan Pemberian Obat (CPO).
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b.  Menghitung kesesuaian dosis dan tidak melebihi dosis maksimum.
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c.  Mengambil obat dan pembawanya dengan menggunakan sarung tangan/ spatula
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d.  Menutup kembali wadah obat setelah pengambilan dan mengembalikan ke tempat semula (untuk tablet dalam kaleng) Mencatat pengeluaran obat pada kartu stok.
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;e.  Menyiapkan etiket warna putih untuk obat dalam dan warna biru untuk obat luar.
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f.  Menulis nama pasien, nomor medrek, umur pasien dengan mencantumkan tanggal lahir pasien, nomor resep, tanggal resep, nama obat, kekuatan obat, jumlah obat, cara pakai sesuai dengan permintaan pada resep serta petunjuk dan informasi lain.
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;g.  Petugas Penyerahan Sediaan Farmasi 
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h.  Melakukan pemeriksaan akhir sebelum dilakukan penyerahan (kesesuaian antara penulisan etiket dengan resep didalam Catatan Pemberian Obat (CPO).
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i.  Membuat salinan resep sesuai dengan resep asli dan diparaf oleh apoteker.
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j.  Menulis nama pasien di dalam buku ekspedisi pasien perawatan yang telah di berikan obat.
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;k.  Konfirmasi kepada perawat di ruangan perawatan bahwa penyiapan obat di dalam Catatan Pemberian Obat (CPO) telah siap.
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l.  Menyimpan resep pada tempatnya dan mendokumentasikan.
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m.  Mendokumentasikan semua tindakan apoteker dalam form PIO dan konseling di Apotek Rawat Inap.
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n.  Monitoring ke pasien tentang keberhasilan terapi, efek samping dengan evaluasi dilakukan kepada keluarga pasien ketika membawa resep obat pulang.

                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-23" role="tabpanel" aria-labelledby="v-pills-23-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>
                            Jangka waktu tunggu pelayanan obat mengikuti standar pelayanan minimal rumah sakit yaitu :
                            <br>&nbsp;&nbsp;1.  Obat jadi < 30 menit.
                            <br>&nbsp;&nbsp;2.  Obat racikan < 60 menit.
                            <br>Waktu tunggu Pelayanan:
                            <br>&nbsp;&nbsp;1.  Dihitungmulairesep masuk sampaipemberian obat kepada pasien
                            <br>&nbsp;&nbsp;2.  Administrasilengkap
                            <br>&nbsp;&nbsp;3.  Tidak ada gangguanalat&sisteminformasi

                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-24" role="tabpanel" aria-labelledby="v-pills-24-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Pasien BPJS tidak dipungut biaya pengobatan. 
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-25" role="tabpanel" aria-labelledby="v-pills-25-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Dokumen berupa Laporan Pengeluaran Obat dan Resep dari Dokter Penulis Resep.
                            </p>
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
            <div class="container pt-20 pb-100">
                <h2 class="heading-border" align="center">STANDAR PELAYANAN PUBLIK
                PADA RUMAS SAKIT UMUM DAERAH CIAMIS
                INSTALASI GIZI
                </h2>
                <br>
                <div class="esc-heading lr-line left-heading mb-30">
                <h4>Service Delivery ( Proses Penyampaian Pelayanan )</h4>
                </div>
                <div class="row">
                <div class="col-md-3">
                    <div class="vertical-tab">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-31-tab" data-bs-toggle="pill" href="#v-pills-31" role="tab" aria-controls="v-pills-31" aria-selected="true">Persyaratan</a>
                        <a class="nav-link" id="v-pills-32-tab" data-bs-toggle="pill" href="#v-pills-32" role="tab" aria-controls="v-pills-32" aria-selected="false">Sistem, Mekanisme dan Prosedur</a>
                        <a class="nav-link" id="v-pills-33-tab" data-bs-toggle="pill" href="#v-pills-33" role="tab" aria-controls="v-pills-33" aria-selected="false">Jangka Waktu Pelayanan</a>
                        <a class="nav-link" id="v-pills-34-tab" data-bs-toggle="pill" href="#v-pills-34" role="tab" aria-controls="v-pills-34" aria-selected="false">Biaya / Tarif</a>
                        <a class="nav-link" id="v-pills-35-tab" data-bs-toggle="pill" href="#v-pills-35" role="tab" aria-controls="v-pills-35" aria-selected="false">Produk Pelayanan</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-31" role="tabpanel" aria-labelledby="v-pills-31-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Seluruh Pasien yang dirawat di Rumah Sakit</p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-32" role="tabpanel" aria-labelledby="v-pills-32-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <!-- <img class="float-start flip pr-20" width="300" src="http://placehold.it/155x90" alt="images"> -->
                            <p>Prosedur Penyelenggaraan Makanan Pasien
                            <br>&nbsp;&nbsp;- Perencanaan menu
                            <br>Adalah suatu kegiatan penyusunan menu yang akan diolah untuk memenuhi selera pasien dan kebutuhan zat gizi yang memenuhi prinsip gizi seimbang
                            <br>&nbsp;&nbsp;- Perencanaan kebutuhan bahan makanan
                            <br>Kegiatan menetapkan macam, jumlah dan mutu bahan makanan yang diperlukan dalam kurun waktu tertentu dalam rangka mempersiapkan penyelenggaraan makanan rumah sakit
                            <br>&nbsp;&nbsp;- Perencanaan anggaran bahan makanan.
                            <br>Kegiatan penyusunan biaya yang diperlukan untuk pengadaan bahan makanan
                            <br>&nbsp;&nbsp;- Pengadaan bahan makanan
                            <br>Kegiatan pengadaan bahan makanan meliputi penetapan spesifikasi bahan makanan, perhitungan harga makanan, pemesanan dan pembelian bahan makanan dan melakukan survey pasar
                            <br>&nbsp;&nbsp;- Pemesanan dan pembelian bahan makanan
                            <br>Langkah-langkah Pemesanan dan pembelian  bahan makanan :
                            <br>&nbsp;&nbsp;1.  Menentukan frekuensi pemesanan bahan makanan segar dan kering
                            <br>&nbsp;&nbsp;2.  Rekapitulasi kebutuhan bahan makanan dengan cara mengalihkan standar porsi dengan jumlah pasien
                            <br>- Penerimaan bahan makanan
                            <br>Langkah penerimaan bahan makanan :
                            <br>&nbsp;&nbsp;1.  Bahan makanan diperiksa sesuai dengan pesanan, dan ketentuan spesifikasi bahan makanan yang dipesan
                            <br>&nbsp;&nbsp;2.  Bahan makanan di kirim kegudang penyimpanan sesuai dengan jenis barang atau dapat langsung ketempat pengolahan makanan
                            <br>&nbsp;&nbsp;- Penyimpanan dan penyaluran bahan makanan
                            <br>&nbsp;&nbsp;- Persiapan bahan makanan
                            <br>Serangkaian kegiatan dalam mempersiapkan bahan makanan yang siap diolah (mencuci, memotong, , menyiangi, meracik, dan sebagainya) sesuai dengan menu , standar resep, standar porsi, standar bumbu dan jumlah pasien yang dilayani
                            <br>&nbsp;&nbsp;- Pengolahan bahan makanan
                            <br>Pengolahan bahan makanan merupakan suatu kegiatan mengubah bahan makanan mentah menjadi makanan yang siap dimakan, berkualitas dan aman untuk di konsumsi 
                            <br>&nbsp;&nbsp;- Pendistrubusian makanan ke ruangan
                            <br>Serangkaian proses kegiatan penyampaian makanan sesuai dengan jenis makanan, jenis diet dan jumlah porsi pasien yang dilayani
                            <br>&nbsp;&nbsp;- Monitoring dan evaluasi
                            <br>&nbsp;&nbsp;- Alur Penyelenggaraan Makanan
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-33" role="tabpanel" aria-labelledby="v-pills-33-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Jangka waktu pelayanan penyelenggaraan makanan selama 6 jam/shift
                            <br>Jadwal pembagian makanan ke pasien yaitu:
                            <br>&nbsp;&nbsp;a. Makan pagi&nbsp;&nbsp;: Jam 07.00 – 08.00 WIB
                            <br>&nbsp;&nbsp;b. Makan siang&nbsp;&nbsp;: Jam 12.00 – 13.00 WIB
                            <br>&nbsp;&nbsp;c. Makan sore&nbsp;&nbsp;: Jam 17.00 – 18.00 WIB
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-34" role="tabpanel" aria-labelledby="v-pills-34-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Tarif Makan VIP : Rp. 56.000
                            <br>Tarif Makan  Kelas Khusus : Rp. 55.000
                            <br>Tarif makan Kelas I : Rp. 35.000
                            <br>Tarif makan Kelas II : Rp. 35.000
                            <br>Tarif makan Kelas III : Rp. 35.000
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-35" role="tabpanel" aria-labelledby="v-pills-35-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Produk Pelayanan berupa pemberian makanan untuk pasien yang terdiri dari makanan pokok, hewani, nabati, sayur, buah, snack dan susu formula
                            </p>
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
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
