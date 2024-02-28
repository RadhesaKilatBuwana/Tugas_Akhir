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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>IGD/UGD</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        <section id="gawat" class="divider">
        </section>

        <section>
            <div class="container pt-20 pb-100">
                <h2 class="heading-border" align="center">STANDAR PELAYANAN PUBLIK PADA RUMAS SAKIT UMUM DAERAH CIAMIS PELAYANAN IGD TRIAGE</h2>
                <br>
                <div class="esc-heading lr-line left-heading mb-30">
                    <h4>Service Delivery ( Proses Penyampaian Pelayanan )</h4>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="vertical-tab">
                            <div class="nav flex-column nav-pills" id="v-pills-tab-1" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Persyaratan</a>
                                <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Sistem, Mekanisme dan Prosedur</a>
                                <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Jangka Waktu Pelayanan</a>
                                <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Biaya / Tarif</a>
                                <a class="nav-link" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Produk Pelayanan</a>
                                <a class="nav-link" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false">Penanganan Pengaduan, Saran dan Masukan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>1 BPJS 
                            <br>&nbsp;&nbsp;1. FC KK
                            <br>&nbsp;&nbsp;2. FC KTP
                            <br>&nbsp;&nbsp;3. FC Kartu BPJS
                            <br>&nbsp;&nbsp;4. Kartu Berobat
                            <br>2 BPJS KETENAGAKERJAAN 
                            <br>&nbsp;&nbsp;1. FC KK
                            <br>&nbsp;&nbsp;2. FC KTP
                            <br>&nbsp;&nbsp;3. FC Kartu BPJS
                            <br>3 Jasa Raharja  
                            <br>&nbsp;&nbsp;1. FC KTP Korban
                            <br>&nbsp;&nbsp;2. Surat keterangan Jaminan dari Jasa Raharja
                            <br>4 Bring Life BNI  
                            <br>&nbsp;&nbsp;1. FC KTP 
                            <br>5 INHEALT 
                            <br>&nbsp;&nbsp;1. FC KTP
                            <br>&nbsp;&nbsp;2. FC INHEALT
                            <br>6 UMUM  
                            <br>&nbsp;&nbsp;1. FC KTP
                            <br>&nbsp;&nbsp;2. FC KK
                            <br>&nbsp;&nbsp;3. Kartu berobat
                            <br>7 TASPEN  
                            <br>&nbsp;&nbsp;1 ASKES
                            <br>&nbsp;&nbsp;2 SURAT PERJALANAN DINAS
                            <br>&nbsp;&nbsp;3 SURAT KET. LAKA LANTAS
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <!-- <img class="float-start flip pr-20" width="300" src="http://placehold.it/155x90" alt="images"> -->
                            <p>1  Penderita Datang Ke Ruang Triage Kemudian Dipilah,Diseleksi Oleh Petugas Triage( Dokter,Perawat )
                            <br>2 Dilakukan Pemeriksan / Tindakan Oleh Dokter Dan Perawat Jaga Igd Dan Penderita Yang Akan Dilakukan Tindakan Operasi, Dikonsultasikan Dengan Dokter Ahli Dan Persiapan Penderita Pra Operasi Di Lakukan Di Igd
                            <br>3 Keluarga pasien daftar ke administrasi sesuai kepemilikan jaminan kesehatan dan kronologis penyakit.
                            <br>4 Pemeriksaan, Pertolongan / Tindakan Telah Selesai , Maka :
                            <br>&nbsp;&nbsp;a.  Penderita gawat darurat setelah kegawat daruratannya teratasi dipindahkan keruang rawat inap sesuai penyakitnya atau dirujuk ke ruamah sakit lain yang lebih tinggi
                            <br>&nbsp;&nbsp;b.  Untuk penderita tidak gawat tidak darurat, pasien dapat dipulangkan dan kemudian dianjurkan ke poliklinik, puskesmas dan unit pelayanan kesehatan terdekat
                            <br>&nbsp;&nbsp;c.  Penderita kebidanan dipindahkan ke ruang kebidanan
                            <br>&nbsp;&nbsp;d.  Penderita penyakit menular dipindahkan ke ruang khusus.
                            <br>&nbsp;&nbsp;e.  Penderita meninggal dikirim ke IPJ (Instalasi Pemulasaraan Jenazah).
                            <br>&nbsp;&nbsp;f.  Administrasi keuangan diselesaikan sesuai dengan prosedur
                            <br>&nbsp;&nbsp;g.  Penderita diobservasi diruang observasi IGD maksimal dalam 6 jam setelah konsultasi dengan dokter ahli / spesialis yang berkaitan ,maka penderita :
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1)  Pindah ke ruang rawat inap jika ruangan rawat inap kosong
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2)  Operasi
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3)  Dirujuk ke rumah sakit yang lebih tinggi
                            Jika ruang rawat inap penuh keluarga penderita diinformasi ulang untuk disarankan alih rawat ke rumah sakit lain
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>1.  Pemeriksaan awal pelayanan dari mulai pasien datang sampai dengan pasien diperiksa dokter maksimal 5 menit
                            <br>2. Pelayanan IGD maksimal 6 jam,dengan catatan :
                            <br>&nbsp;&nbsp;a. Tersedia tempat tidur yang sesuai dengan kasus dan kelasnya
                            <br>&nbsp;&nbsp;b. Kondisi pasien stabil untuk di pindahkan
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Biaya pengurusan pelayanan kesehatan 
                            <br>&nbsp;&nbsp;1.  Untuk pasien dengan jaminan BPJS sesuai dengan haknya 
                            <br>&nbsp;&nbsp;2.  Untuk pasien umum tanpa jaminan kesehatan 
                            <br>
                            <style type="text/css">
                                .tg  {border-collapse:collapse;border-spacing:0;}
                                .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                                overflow:hidden;padding:10px 5px;word-break:normal;}
                                .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                                    font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
                                    .tg .tg-baqh{text-align:center;vertical-align:top}
                                    .tg .tg-amwm{font-weight:bold;text-align:center;vertical-align:top}
                                    .tg .tg-0lax{text-align:left;vertical-align:top}
                                </style>
                                <style type="text/css">
                                    .tg  {border-collapse:collapse;border-spacing:0;}
                                    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                                    overflow:hidden;padding:10px 5px;word-break:normal;}
                                    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                                        font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
                                        .tg .tg-baqh{text-align:center;vertical-align:top}
                                        .tg .tg-amwm{font-weight:bold;text-align:center;vertical-align:top}
                                        .tg .tg-0lax{text-align:left;vertical-align:top}
                                    </style>
                                    <table class="tg">
                                        <thead>
                                        <tr>
                                            <th class="tg-amwm">No</th>
                                            <th class="tg-amwm">Jenis Pelayanan</th>
                                            <th class="tg-amwm">Tarif (R.p)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="tg-baqh">1</td>
                                            <td class="tg-0lax">Pemeriksaan oleh   dokter umum   </td>
                                            <td class="tg-baqh">15.000   </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-baqh">2</td>
                                            <td class="tg-0lax">Pemeriksaan oleh   dokter spesialis   </td>
                                            <td class="tg-baqh">30.000   </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-baqh">3</td>
                                            <td class="tg-0lax">Konsultasi dokter spesialis via telp   </td>
                                            <td class="tg-baqh">15.000   </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-baqh">4</td>
                                            <td class="tg-0lax">Perawatan &lt; 8   Jam </td>
                                            <td class="tg-baqh">21.500   </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-baqh">5</td>
                                            <td class="tg-0lax">Perawatan 8 s/d 24   Jam   </td>
                                            <td class="tg-baqh">51.000   </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-baqh">6</td>
                                            <td class="tg-0lax">Perawatan &gt; 24   Jam   </td>
                                            <td class="tg-baqh">120.000   </td>
                                        </tr>
                                        <tr>
                                            <td class="tg-baqh">7</td>
                                            <td class="tg-0lax">Tindakan    </td>
                                            <td class="tg-baqh">Sesuai PERDA   </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    </p>
                                </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
                                <div class="row">
                                <div class="col-md-12">
                                    <p>Pelayanan kegawatdaruratan terdiri dari :
                                    <br>Pelayanan pasien  ke gawat darurat 
                                    </p>
                                </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
                                <div class="row">
                                <div class="col-md-12">
                                    <p>1  Penanganan Pengaduan Tidak langsung
                                    <br>&nbsp;&nbsp;a.  Pengaduan / Keluhan melalui SMS
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1)  Petugas unit Costumer service / Humas membuka dan membaca layanan SMS
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2)  Petugas Unit Costumer servis atau humas membalas sms dengan ucapan terima kasih atas masukannya kepada bidang /bagian terkait
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3)  Petugas menginventarisir data pengadu kemudian menyampaikan kepad bidang/bagian terkait
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4)  Melakukan koordinasi ( Klarifikasi ) dengan bidang terkait sebagai bahan masukan dan penyelesaian masalah
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5)  Jawaban penyelesaian msalah disampaikan kembali oleh humas kepada pengirim
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6)  Unit costumer service / humas mencatat pada laporan harian.
                                    <br>&nbsp;&nbsp;b.  Pengaduan Melalui kotak Saran
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1)  Petugas  Petugas unit Costumer service / Humas membuka isi kotak saran setiap hari senin dan kamis
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2)  Petugas menginventarisir jenis pengaduan 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3)  Petugas costumer service melakukan koordinasi ( Klarifikasi ) dengan bidang terkait sesuai jenis pengaduan untuk penyelesaian pengaduan tersebut
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4)  Unit costumer service / humas melakukan dukumentasi
                                    <br>2 Penanganan Pengaduan Seacara Langsung
                                    <br>&nbsp;&nbsp;a.  Petugas unit terkait menerima complain dari pasien. Pasien / keluarga pada saat mengajukan komplain diharuskan menyebutkan : 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Identitas Pengadu secara lengkap 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- permasalahan yang diadukan 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- identitas petugas yang melayani 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- waktu dan lokasi kejadian
                                    <br>&nbsp;&nbsp;b.  Petugas unit tersebut menyelesaikan pengaduan pasien apabila tidak ada penyelesaian, maka dapat berkoordinasi dengan penanggung jawab unit untuk menyelesaikannya
                                    <br>&nbsp;&nbsp;c.  Jika permasalahan belum terselesaikan, penganggung jawab unit berkoordinasi dengan unit costumer service/humas rumah sakit 
                                    <br>&nbsp;&nbsp;d.  Unit costumer service / humas berkoordinasi dengan bagian terkait sesuai pengaduan/ keluhan yang disampaikan pasien tersebut dalam waktu 1x24 jam.
                                    <br>&nbsp;&nbsp;e.  Jika solusi atas permasalahan sudah didapatkan, unit costumer service / humas akan menyampaikan jawabanya kepada pasien maupun keluarganya dengan melibatkan petugas unit bersangkutan 
                                    <br>&nbsp;&nbsp;f.  Bila pasien tidak puas, unit costumer service / humas berkoordinasi secara berjenjang untuk mendiskusikan solusinya ( bila perlu)\
                                    <br>&nbsp;&nbsp;g.  Unit costumer service / humas mendokumentasikan setiap pengaduan/ keluhan
                                    Setiap pengaduan / keluhan yang terjadi akan dijadikan acuan untuk perbaikan, baik dari  SDM maupun Sistem. 
                                    </p>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="container pt-20 pb-100">
                <br>
                <div class="esc-heading lr-line left-heading mb-30">
                    <h4>Manufacturing ( Proses Pengelolaan Pelayanan di Internal Organisasi )</h4>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="vertical-tab">
                        <div class="nav flex-column nav-pills" id="v-pills-tab-2" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-10-tab" data-bs-toggle="pill" href="#v-pills-10" role="tab" aria-controls="v-pills-10" aria-selected="true">Dasar Hukum</a>
                            <a class="nav-link" id="v-pills-11-tab" data-bs-toggle="pill" href="#v-pills-11" role="tab" aria-controls="v-pills-11" aria-selected="false">Sarana, Prasarana dan Fasilitas</a>
                            <a class="nav-link" id="v-pills-13-tab" data-bs-toggle="pill" href="#v-pills-12" role="tab" aria-controls="v-pills-12" aria-selected="false">Kompetensi Pelaksana</a>
                            <a class="nav-link" id="v-pills-14-tab" data-bs-toggle="pill" href="#v-pills-13" role="tab" aria-controls="v-pills-13" aria-selected="false">Pengawasan Internal</a>
                            <a class="nav-link" id="v-pills-15-tab" data-bs-toggle="pill" href="#v-pills-14" role="tab" aria-controls="v-pills-14" aria-selected="false">Jumlah Pelaksana</a>
                            <a class="nav-link" id="v-pills-16-tab" data-bs-toggle="pill" href="#v-pills-15" role="tab" aria-controls="v-pills-15" aria-selected="false">Jaminan Pelaksanaan</a>
                            <a class="nav-link" id="v-pills-17-tab" data-bs-toggle="pill" href="#v-pills-16" role="tab" aria-controls="v-pills-16" aria-selected="false">Jaminan Keamanan dan Keselamatan Pelayanan</a>
                            <a class="nav-link" id="v-pills-18-tab" data-bs-toggle="pill" href="#v-pills-17" role="tab" aria-controls="v-pills-17" aria-selected="false">Evaluasi Kinerja Pelaksana</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-10" role="tabpanel" aria-labelledby="v-pills-10-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <p>1. Undang-undang Republik Indonesia Nomor 36 Tahun 2009 Tentang Kesehatan (Lembaran Negara Republik Indonesia Tahun 2009 Nomor 144, Tambahan Lembaran Negara Republik Indonesia Nomor 5063);
                                    <br>2.  Undang-undang Republik Indonesia Nomor 44 Tahun 2009 Tentang Rumah Sakit (Lembaran Negara Republik Indonesia Tahun 2009 Nomor 153, Tambahan Lembaran Negara Republik Indonesia Nomor 5072);
                                    <br>3.  Undang-undang Republik Indonesia Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;
                                    <br>4.  Undang-undang Republik Indonesia Nomor 43 Tahun 1999 Perubahan Undang-undang Nomor 8 Tahun 1974 tentang Pokok-pokok Kepegawaian (Lembaran Negara Republik Indonesia Tahun 1999 Nomor 169, Tambahan Lembaran Negara Republik Indonesia Nomor 3890)
                                    <br>5.  Peraturan Pemerintah Republik Indonesia Nomor 32 Tahun 1996 Tentang Tenaga Kesehatan (Lembaran Negara Republik Indonesia Tahun 1999 Nomor 49, Tambahan Lembaran Negara Republik Indonesia Nomor 3637);
                                    <br>6.  Keputusan Presiden Republik Indonesia Nomor 87 Tahun 1999 tentang Rumpun Jabatan Fungsional;
                                    <br>7.  Peraturan Menteri Negara Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 26 Tahun 2011 tentang Pedoman Perhitungan Jumlah Kebutuhan Pegawai Negeri Sipil Untuk Daerah
                                    <br>8.  Peraturan Daerah Kabupaten Ciamis Nomor 17 Tahun 2008 Tentang Organisasi Perangkat Daerah Kabupaten Ciamis Sebagaimana Telah Diubah Dengan Peraturan Daerah Kabupaten Ciamis Nomor 4 Tahun 2010 Tentang Perubahan Atas Peraturan Daerah Kabupaten Ciamis Nomor 17 Tahun 2008 Tentang Organisasi Perangkat Daerah Kabupaten Ciamis;
                                    <br>9.  Peraturan Bupati Ciamis Nomor 62 Tahun 2008 Tentang Tugas, Fungsi Dan Tata Kerja Unsur Organisasi RSUD;
                                    <br>10. Keputusan Bupati Ciamis Nomor 061/Kpts.789-Huk/2010 Tentang Pembentukan Tim Penilai Usulan Penetapan Status Pola Pengelolaan Keuangan Badan Layanan Umum Daerah (PPK-BLUD) Pada Rumah Sakit Umum Daerah (RSUD) Kelas C Kabupaten Ciamis;
                                    Keputusan Bupati Ciamis Nomor 061/Kpts.789-Huk/2010 Tentang Pembentukan Tim Penilai Usulan Penetapan Status Pola Pengelolaan Keuangan Badan Layanan Umum Daerah (PPK-BLUD) Pada Rumah Sakit Umum Daerah (RSUD) Kelas C Kabupaten Ciamis
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-11" role="tabpanel" aria-labelledby="v-pills-11-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- <img class="float-start flip pr-20" width="300" src="http://placehold.it/155x90" alt="images"> -->
                                <p>Instalasi Gawat Darurat berdiri pada lahan seluas 145 m3. Instalasi Gawat Darurat memiliki fasilitas yang terdiri dari :
                                    <br>1.  1 Ruang Triage
                                    <br>2.  1 Ruang Resusitasi
                                    <br>3.  1 Ruang Observasi
                                    <br>4.  1 Ruang Tindakan
                                    <br>5.  2 ruang pemerikaaan Anak dan  1 pemeriksaan neonatus
                                    <br>6.  1 Ruang nurses Station
                                    <br>7.  1 Kamar mandi pasien
                                    <br>8.  1 Kamar mandi petugas IGD
                                    <br>9.  1 Ruang Spoolhook
                                    <br>10. 1 Ruang tunggu Pasien
                                    <br>11. 1 Kamar Dokter
                                    <br>12. 1 Kamar Perawat/bidan
                                    <br>13. 1 Wastafel
                                    <br>14. 1 Tangga evakuasi
                                    <br>&nbsp;&nbsp;1.  Ruang Triage
                                    Ruang triage dengan ukuran 4m X 4m.. Ruang ini digunakan untuk penerimaan pertama pasien masuk ke IGD.
                                    Fasilitas yang tersedia pada ruang Triage adalah :
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Blangkar.
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Scherem.
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Kursi Roda.
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Tangga Pasien
                                    <br>&nbsp;&nbsp;2.  Ruang Resusitasi
                                    Ruang resusitasi dengan ukuran 5m X 5m. Dengan tembok terbuat dari bata dengan ketebalan 20cm dilapisi dengan semen setebal ±2mm.
                                    Fasilitas yang tersedia pada ruang Resusitasi adalah : 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 4 Tempat tidur
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Troli Emergensi 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Oksigen Sentral
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Tiang Infus 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Tangga Pasien
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Tensi meter
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Termometer 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Jam dinding
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Stetoskop
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 2 Infus pump
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 2 siringe pump
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 2 monitor pasien
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 1 oximetri
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 1 suction
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 1 AED(rusak)
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 2 LARINGOSCOP
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- defibrilator
                                    <br>&nbsp;&nbsp;3.  Ruang tindakan
                                    Ruang tindakan dengan ukuran 5m X 5m satu ruangan.Fasilitas yang tersedia pada ruang observasi  adalah :
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Tempat Tidur
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Meja Pasien
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Troli
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Tempat sampah 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Tangga pasien 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Tiang infus 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Oksigen sentral
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Tensi meter
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Termometer 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Jam dinding
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Stetoskop
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Lemari Alat
                                    <br>&nbsp;&nbsp;4.  Ruang Observasi
                                    Ruang observasi dengan ketersediaan 8 Tempat Tidur
                                    Fasilitas yang tersedia pada ruang observasi  adalah :
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Tempat Tidur
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Meja Pasien
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Troli
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Tempat sampah 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Tangga pasien 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Tiang infus 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Oksigen sentral
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Tensi meter
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Termometer 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Jam dinding
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Stetoskop
                                    <br>&nbsp;&nbsp;5.  Ruang Kebidanan
                                    Ruang kebidanan dan neonatal dengan ukuran 5m X 4m. tembok terbuat dari bata dengan ketebalan 20cm dilapisi dengan kemarik setebal 2mm. Digunakan untuk tindakan  yang berkaitan dengan kebidanan dan neonatal.
                                    Fasilitas yang tersedia pada ruang Kebidanan adalah :
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Meja Gynekologi
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Tempat tidur pasien
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Infant Warmer
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Inkubator
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Lemari alat-alat
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Troli/meja
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Oksigen sentral dan manual
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Lampu sorot 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Tensi meter
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Termometer 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Jam dinding
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Stetoskop
                                    <br>&nbsp;&nbsp;6.  Ruang nurses Station
                                    Ruang nurses station terletak ditengah ruang IGD yang merupakan tempat untuk tenaga dokter, bidan dan perawat (petugas IGD) dalam mendokumentasikan hasil pemeriksaan terhadap pasien dan asuhan yang diberikan.
                                    Fasilitas yang tersedia pada ruang nurses station adalah :
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Meja nurses station 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Lemari arsip
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Alat tulis dan kantor (ATK)
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Formulir-formulir dokumentasi
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Kursi
                                    <br>&nbsp;&nbsp;7.  Kamar mandi pasien
                                    Kamar mandi pasien dengan ukuran 2m X 1,5m. tembok terbuat dari bata dengan ketebalan 20cm dilapisi dengan kemarik setebal 2mm. Pintu menghadap kedalam.
                                    Fasilitas yang tersedia pada kamar mandi pasien adalah :
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Kloset jongkok 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Kran
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Ember 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Gayung 
                                    <br>&nbsp;&nbsp;8.  Kamar mandi petugas 
                                    Kamar mandi pasien dengan ukuran 2m X 1,5m. tembok terbuat dari bata dengan ketebalan 20cm dilapisi dengan kemarik setebal 2mm. Pintu menghadap kedalam.
                                    Fasilitas yang tersedia pada kamar mandi petugas adalah :
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Kloset jongkok 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Kran
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Ember 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Gayung 
                                    <br>&nbsp;&nbsp;9.  Ruang Spoolhook
                                    Ruang spoolhook berukuran 3m X 2m. Dengan dilapisi oleh tembok dan keramik digunakan untuk memproses alat-alat yang sudah digunakan untuk tindakan kepada pasien.
                                    Fasilitas yang tersedia pada ruang spoolhook adalah :
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Kran 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Tempat dekontminasi
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Ember 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Tempat cuci bilas.
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Kompor gas 
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Kalakat (panci susun)
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Klorin
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Air DTT (desinfeksi tingkat tinggi)
                                    <br>&nbsp;&nbsp;10. Ruang Tunggu Pasien
                                    Ruang tunggu pasien digunakan untuk menunggu keluarga pasien saat pasien dilakukan tindakan di IGD.Terletak didekat pintu masuk IGD berhadapan dengan ruangan administrasi.
                                    Fasilitas yang tersedia pada ruang tunggu pasien adalah :
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Tempat duduk
                                    <br>&nbsp;&nbsp;11. Kamar Dokter
                                    Kamar dokter dengan ukuran 3m X 3m. tembok terbuat dari bata dengan ketebalan 20cm dilapisi dengan keramik setebal 2mm. 
                                    Fasilitas yang tersedia pada kamar dokter adalah :
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Tempat tidur
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Lemari
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Televisi
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Ac
                                    <br>&nbsp;&nbsp;12. Kamar Perawat/bidan
                                    Kamar perawat/bidan dengan ukuran 3m X 3m. tembok terbuat dari bata dengan ketebalan 20cm dilapisi dengan keramik setebal 2mm. 
                                    Fasilitas yang tersedia pada kamar perawat/bidan adalah :
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- kasur
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- lemari/loker petugas
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- bantal
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-12" role="tabpanel" aria-labelledby="v-pills-12-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>1.Kepala Instalasi 
                            <br>&nbsp;&nbsp;2.  Seorang Dokter yang telah mendalami spesialisasi anesthesiologi, ilmu penyakit dalam, bedah, ilmu kesehatan anak, atau bagian lain dan pernah menjalani pelatihan dan pendidikan formal di bidang kedokteran keperawatan intensif.
                            <br>&nbsp;&nbsp;3.  Seorang Dokter yang bekerja full time atau 50% waktu kerjanya di IGD arahkan untuk memberikan pelayanan intensif dan secara fisik dapat dihubungi dan tidak terikat kewajiban lain yang menyita waktu dan kedudukannya sebagai Kepala Instalasi Ruang IGD.
                            <br>&nbsp;&nbsp;4.  Memiliki tanggung jawab medis dan administratif untuk bagian yang dibawahinya dan sebaiknya tidak dirangkap dengan tanggung jawab sebagai atasan di bagian lain atau di fasilitas lain di Rumah Sakit.
                            <br>&nbsp;&nbsp;5.  Memiliki STR/SIK.
                            <br>2.Dokter Jaga
                            <br>&nbsp;Syarat – Syarat Menjadi Dokter Jaga 
                            <br>&nbsp;&nbsp;6.  Pendidikan    : S1 kedokteran dan Profesi
                            <br>&nbsp;&nbsp;7.  Kursus/Pelatihan    : mengikuti ACLS ATLS
                            <br>&nbsp;&nbsp;8.  Pengalaman kerja      :               Seorang dokter pelaksana 3-5 tahun
                            <br>&nbsp;&nbsp;9.  Kondisi Fisik   : Sehat Jasmani dan Rohani
                            <br>3.Kepala Ruangan
                            <br>&nbsp;&nbsp;1.Sarjana Keperawatan dengan pengalaman sebagai pelaksana minimal 1 tahun
                            <br>&nbsp;&nbsp;2.DIII keperawatan dengan pengalaman sebagai pelaksana minimal 2 tahun.
                            <br>&nbsp;&nbsp;3.Memiliki sertifikat pelatihan manajemen keperawatan dan pelatihan keperawatan intensif.
                            <br>&nbsp;&nbsp;4.Memiliki kemampuan memimpin dan berwibawa.
                            <br>&nbsp;&nbsp;5.Sehat jasmani dan rohani.
                            <br>&nbsp;&nbsp;6.Bertanggung jawab secara administratif dan fungsional kepada kepala Bidang Keperawatan
                            <br>&nbsp;&nbsp;7.Secara teknis medis operasional, bertanggung jawab kepada dokter Penanggung Jawab IGD/dokter yang berwenang
                            <br>&nbsp;&nbsp;8.Memiliki STR/SIPP 1
                            <br>4. Wakil Kepala Ruangan
                            <br>&nbsp;&nbsp;• Perawat yang telah mendapatkan pelatihan dan pendidikan di bidang perawatan atau terapi intensif sekurang-kurangnya 6 bulan atau perawat yang telah bekerja pada pelayanan di IGD minimal 1 tahun.
                            <br>&nbsp;&nbsp;• Perawat yang bertugas di IGD harus memahami fungsi IGD, tata kerja dan peralatan yang digunakan untuk menjaga mutu pelayanan, mencegah timbulnya penyulit dan mencegah kerusakan pada alat-alat canggih.
                            <br>&nbsp;&nbsp;• Memiliki STR/SIPP 1
                            <br>&nbsp;&nbsp;• Pendidikan Minimal  : Ahli   Madya   Keperawatan / Kebidanan
                            <br>&nbsp;&nbsp;• Kursus/Pelatihan    :Manajemen Pelayanan Keperawatan Ruang / Bangsal
                            <br>&nbsp;&nbsp;• Pengalaman kerja  : Seorang perawat pelaksana 3-5 tahun
                            <br>&nbsp;&nbsp;• Kondisi Fisik   : Sehat Jasmani dan Rohani
                            <br>5. Clinical Instruktur (CI)
                            <br>&nbsp;Syarat – syarat Diangkat menjadi Clinical Instruktur ( CI )
                            <br>&nbsp;&nbsp;a.  Pendidikan Minimal  : Ahli   Madya   Keperawatan/Kebidanan
                            <br>&nbsp;&nbsp; b.  Kursus/Pelatihan    : Mengikuti pelatihan clinical instruktur
                            <br>&nbsp;&nbsp;c.  Pengalaman kerja  : Seorang perawat pelaksana 3-5 tahun
                            <br>&nbsp;&nbsp;d.  Kondisi Fisik   : Sehat Jasmani dan Rohani
                            <br>6. Perawat Primer/Bidan Ahli
                            <br>&nbsp;&nbsp;a.  Pendidikan :  Berijazah pendidikan formal keperawatan/kebidanan dansemua jenjang pendidikan yang disahkan oleh pemerintah/yang berwenang.
                            <br>&nbsp;&nbsp;b.  Kursus/Pelatihan   : Memiliki   sertifikat   KursusPerawatan Gawat DaruratPengalaman Kerja :Sebagai Pelaksana Perawatan diPoliklinik 5 tahun
                            <br>&nbsp;&nbsp;c.  Kondisi Fisik : Sehat Jasmani dan Rohani
                            <br>7.Administrasi
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-13" role="tabpanel" aria-labelledby="v-pills-13-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Pengawasan internal dilaksanakan oleh atasan langsung dan supervisi (setiap Shif).</p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-14" role="tabpanel" aria-labelledby="v-pills-14-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Jumlah petugas medis (dokter, perawat ) dalam melakukan Triage dan Screening dilakukan 2 orang perawat dan 1 orang dokter .
                            2 orang petugas  administrasi untuk pengklaiman pasen pulang dan pendaftaran pasen masuk IGD
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-15" role="tabpanel" aria-labelledby="v-pills-15-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>1.Adanya SPM
                            <br>2. Adanya SPO
                            <br>3. Sarana dan Prasarana Pendukung
                            <br>4.Kepastian Persyaratan
                            <br>5. Kepastian Biaya
                            <br>6. SDM yang berkopenten di bidangnya
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-16" role="tabpanel" aria-labelledby="v-pills-16-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>1. Petugas IGD yang telah diberi dan di fasilitasi APD level 1
                            <br>2.  Pembatasan Pengunjung 
                            <br>3.  Penggunaan Hepafilter
                            <br>4.  Petugas IGD yang telah diberi pelatihan APAR
                            <br>5.  Sarana dan prasarana yang digunakan dalam rangka pelayanan tidak membahayakan pasien
                            <br>6.  Ruang pelayanan yang bersih dan rapi
                            <br>7.  Alat pemadam kebakaran
                            <br>8.  Ada jalur evakuasi
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-17" role="tabpanel" aria-labelledby="v-pills-17-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Evaluasi kinerja pelaksana dilaksanakan secara berkala berdasarkan evaluasi internal,hasil IKM, dan kotak kepuasan pasien.
                            </p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="container pt-20 pb-100">
                <h2 class="heading-border" align="center">STANDAR PELAYANAN PUBLIK
                PADA RUMAS SAKIT UMUM DAERAH CIAMIS
                PELAYANAN IGD COVID
                </h2>
                <br>
                <div class="esc-heading lr-line left-heading mb-30">
                <h4>Service Delivery ( Proses Penyampaian Pelayanan )</h4>
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
                        <a class="nav-link" id="v-pills-26-tab" data-bs-toggle="pill" href="#v-pills-26" role="tab" aria-controls="v-pills-26" aria-selected="false">Penanganan Pengaduan, Saran dan Masukan</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-21" role="tabpanel" aria-labelledby="v-pills-21-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>1. Kartu Tanda Penduduk atau Kartu Keluarga
                            <br>2.  Surat Rujukan Dari Fasilitas Pelayanan Kesehatan, hasil pemeriksaan penunjang ( Pasien Rujukan ) berupa antigen (+) dan PCR (+)
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-22" role="tabpanel" aria-labelledby="v-pills-22-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <!-- <img class="float-start flip pr-20" width="300" src="http://placehold.it/155x90" alt="images"> -->
                            <p>1. Kriteria pasien adalah pasien dengan gejala sedang, berat dan kritis dan telah di setujui oleh DPJP Covid untuk di rawat di ruang isolasi Covid , jika hasil swab antigen positif, petugas IGD/Screening menempatkan pasien di ruang IGD Covid.
                            <br>2.  Pasien dan keluarga pasien sudah di berikan inform concent oleh  petugas, serta di buktikan oleh lembar inform concentmengenai kesediaan pasien untuk di rujuk ke Rumah Sakit.
                            concent bermaterai mengenai kesediaan pasien untuk memenuhi 
                            <br>3.  Pasien di tempatkan di Ruang IGD COVID untuk asessment awal, tindakan gawat darurat yang di perlukan serta persiapan pemeriksaan untuk penunjang diagnostik. Proses administrasi serta kelengkapan rekam medis pasien dilaksanakan oleh petugas adminitrasi IGD
                            <br>4.  Petugas IGD, Dokter dan atau Perawat melengkapi lembar screening pasien dan FORM Penyelidikan Epidemologi COVID 19 dan melampirkan screening yang sudah dilakukan di Faskes Tk 1 atau Rumah Sakit Lainnya.
                            <br>5.  Apabila di temukan pasien yang di terima tidak sesuai kriteria, maka prosedur selanjutnya yang dilakukan adalah :
                            <br>6.  Pasien dilaporkan oleh Dokter dan atau Perawat IGD kepada Dokter Koordinator Pelayanan Medis COVID-19 untuk tatalaksana dan advis selanjutnya.
                            <br>&nbsp;&nbsp;a.  Untuk pasien dengan tanpa gejala serta gejala ringan, Dokter atau Perawat IGD melaporkan klinis pasien dan hasil penujang diagnostik  kepada DKPMC-19 untuk kelayakan apabila di perbolehkan untuk isolasi mandiri. Kepala Ruangan pada saat jam kerja atau Ketua Tim pada saat di luar jam kerja melaporkan kepada Bagian Pelayanan dan gugus tugas Covid 19 di RS untuk selanjutnya di teruskan ke Tim Gugus Tugas/Tim Lintas Batas COVID-19 untuk proses transfer atau penjemputan
                            <br>&nbsp;&nbsp;b.  Untuk pasien dengan gejala ringan sampai gejala sedang Dokter atau Perawat IGD melaporkan klinis pasien dan hasil penunjang diagnostik kepada DKPMC-19 untuk kelayakan apabila di perbolehkan untuk alih rawat ke RS Kawali atau Islamic Center.
                            Apabila sudah ada Advis alih rawat, maka kepala ruangan IGD pada saat jam kerja atau Manager On Duty (MOD) pada saat di luar jam kerja menghubungi pelayanan atau humas untuk selanjutnya di teruskan ke koordinator COVID-19 untuk mengkonfirmasi ketersediaan tempat tidur dan mapping pasien berdasarkan ketentuan yang berlaku.
                            <br>&nbsp;&nbsp;c.  Untuk pasien dengan gejala berat dan kritis, Dokter dan Perawat IGD melaporkan klinis pasien dan hasil penunjang diagnostik kepada DKPMC-19 untuk advis pengobatan serta penempatan perawatan pasien selanjutnya.
                            <br>7.  Pasien di laporkan oleh kepala ruangan IGD pada saat jam kerja atau oleh Ketua Tim  pada saat di luar jam kerja kepada Bagian Pelayanan untuk identitas pasien serta update jumlah pasien dan hubungannya dengan ketersediaan tempat tidur.
                            <br>8.  Apabila ruang isolasi tidak tersedia / penuh maka pasien tetap di ruang IGD COVID sampai ruangan isolasi tersedia atau setelah hasil dari pengambilan PCR ada. Apabila pasien memungkinkan untuk di pindah rawat karena ketidaktersediaan tempat perawatan di Rumah Sakit Umum Daerah Ciamis maka kpela ruangan IGD pada saat jam kerja atau oleh Ketua Tim  pada saat di luar jam kerja melaporkan kepada bagian pelayanan dan gugus tugas Covid 19 RS 
                            Untuk mengkoordinasikan Rumah Sakit atau Faskes tujuan serta prosedur transfer pasien.
                            <br>9.  Bila ruangan isolasi tersedia, maka pasien diantar oleh perawat dari ruangan IGD Covid setelah diselesaikan kelengkapan rekam medisnya.
                            <br>10. Pengisian SIMRS harus di lakukan secara real time, khususnya untuk identitas pasien sesuai KTP terlampir, diagnosa masuk, dokter penanggung jawab serta pengisian tanggal dan jam keluar masuk pasien

                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-23" role="tabpanel" aria-labelledby="v-pills-23-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>1.  Pemeriksaan awal pelayanan dari mulai pasien datang sampai dengan pasien diperiksa dokter maksimal 5 menit
                            <br>2. Pelayanan IGD maksimal 6 jam,atau lebih dengan kriteria
                            Pasien dengan PCR (+) dengan Gejala Covid Gejala Sedang dan Berat
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-24" role="tabpanel" aria-labelledby="v-pills-24-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Dana KEMENKES / BPJS</p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-25" role="tabpanel" aria-labelledby="v-pills-25-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Pelayanan pasien  Covid  19 dengan gejala sedang dan berat</p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-26" role="tabpanel" aria-labelledby="v-pills-26-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>1  Penanganan Pengaduan Tidak langsung
                            <br>&nbsp;&nbsp;a.  Pengaduan / Keluhan melalui SMS
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1)  Petugas unit Costumer service / Humas membuka dan membaca layanan SMS
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2)  Petugas Unit Costumer servis atau humas membalas sms dengan ucapan terima kasih atas masukannya kepada bidang /bagian terkait
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3)  Petugas menginventarisir data pengadu kemudian menyampaikan kepad bidang/bagian terkait
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4)  Melakukan koordinasi ( Klarifikasi ) dengan bidang terkait sebagai bahan masukan dan penyelesaian masalah
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5)  Jawaban penyelesaian msalah disampaikan kembali oleh humas kepada pengirim
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6)  Unit costumer service / humas mencatat pada laporan harian.
                            <br>&nbsp;&nbsp;b.  Pengaduan Melalui kotak Saran
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1)  Petugas  Petugas unit Costumer service / Humas membuka isi kotak saran setiap hari senin dan kamis
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2)  Petugas menginventarisir jenis pengaduan 
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3)  Petugas costumer service melakukan koordinasi ( Klarifikasi ) dengan bidang terkait sesuai jenis pengaduan untuk penyelesaian pengaduan tersebut
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4)  Unit costumer service / humas melakukan dukumentasi
                            <br>2 Penanganan Pengaduan Seacara Langsung
                            <br>&nbsp;&nbsp;a.  Petugas unit terkait menerima complain dari pasien. Pasien / keluarga pada saat mengajukan komplain diharuskan menyebutkan : 
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Identitas Pengadu secara lengkap 
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- permasalahan yang diadukan 
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- identitas petugas yang melayani 
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- waktu dan lokasi kejadian
                            <br>&nbsp;&nbsp;b.  Petugas unit tersebut menyelesaikan pengaduan pasien apabila tidak ada penyelesaian, maka dapat berkoordinasi dengan penanggung jawab unit untuk menyelesaikannya
                            <br>&nbsp;&nbsp;c.  Jika permasalahan belum terselesaikan, penganggung jawab unit berkoordinasi dengan unit costumer service/humas rumah sakit 
                            <br>&nbsp;&nbsp;d.  Unit costumer service / humas berkoordinasi dengan bagian terkait sesuai pengaduan/ keluhan yang disampaikan pasien tersebut dalam waktu 1x24 jam.
                            <br>&nbsp;&nbsp;e.  Jika solusi atas permasalahan sudah didapatkan, unit costumer service / humas akan menyampaikan jawabanya kepada pasien maupun keluarganya dengan melibatkan petugas unit bersangkutan 
                            <br>&nbsp;&nbsp;f.  Bila pasien tidak puas, unit costumer service / humas berkoordinasi secara berjenjang untuk mendiskusikan solusinya ( bila perlu)\
                            <br>&nbsp;&nbsp;g.  Unit costumer service / humas mendokumentasikan setiap pengaduan/ keluhan
                            Setiap pengaduan / keluhan yang terjadi akan dijadikan acuan untuk perbaikan, baik dari  SDM maupun Sistem. 
                            </p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <br>
                <div class="esc-heading lr-line left-heading mb-30">
                <h4>Manufacturing ( Proses Pengelolaan Pelayanan di Internal Organisasi )</h4>
                </div>
                <div class="row">
                <div class="col-md-3">
                    <div class="vertical-tab">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link" id="v-pills-010-tab" data-bs-toggle="pill" href="#v-pills-010" role="tab" aria-controls="v-pills-010" aria-selected="true">Dasar Hukum</a>
                        <a class="nav-link active" id="v-pills-011-tab" data-bs-toggle="pill" href="#v-pills-011" role="tab" aria-controls="v-pills-011" aria-selected="true">Sarana, Prasarana dan Fasilitas</a>
                        <a class="nav-link" id="v-pills-013-tab" data-bs-toggle="pill" href="#v-pills-012" role="tab" aria-controls="v-pills-012" aria-selected="false">Kompetensi Pelaksana</a>
                        <a class="nav-link" id="v-pills-014-tab" data-bs-toggle="pill" href="#v-pills-013" role="tab" aria-controls="v-pills-013" aria-selected="false">Pengawasan Internal</a>
                        <a class="nav-link" id="v-pills-015-tab" data-bs-toggle="pill" href="#v-pills-014" role="tab" aria-controls="v-pills-014" aria-selected="false">Jumlah Pelaksana</a>
                        <a class="nav-link" id="v-pills-016-tab" data-bs-toggle="pill" href="#v-pills-015" role="tab" aria-controls="v-pills-015" aria-selected="false">Jaminan Pelaksanaan</a>
                        <a class="nav-link" id="v-pills-017-tab" data-bs-toggle="pill" href="#v-pills-016" role="tab" aria-controls="v-pills-016" aria-selected="false">Jaminan Keamanan dan Keselamatan Pelayanan</a>
                        <a class="nav-link" id="v-pills-018-tab" data-bs-toggle="pill" href="#v-pills-017" role="tab" aria-controls="v-pills-017" aria-selected="false">Evaluasi Kinerja Pelaksana</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-010" role="tabpanel" aria-labelledby="v-pills-010-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>1. Undang-undang Republik Indonesia Nomor 36 Tahun 2009 Tentang Kesehatan (Lembaran Negara Republik Indonesia Tahun 2009 Nomor 144, Tambahan Lembaran Negara Republik Indonesia Nomor 5063);
                            <br>2.  Undang-undang Republik Indonesia Nomor 44 Tahun 2009 Tentang Rumah Sakit (Lembaran Negara Republik Indonesia Tahun 2009 Nomor 153, Tambahan Lembaran Negara Republik Indonesia Nomor 5072);
                            <br>3.  Undang-undang Republik Indonesia Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;
                            <br>4.  Undang-undang Republik Indonesia Nomor 43 Tahun 1999 Perubahan Undang-undang Nomor 8 Tahun 1974 tentang Pokok-pokok Kepegawaian (Lembaran Negara Republik Indonesia Tahun 1999 Nomor 169, Tambahan Lembaran Negara Republik Indonesia Nomor 3890)
                            <br>5.  Peraturan Pemerintah Republik Indonesia Nomor 32 Tahun 1996 Tentang Tenaga Kesehatan (Lembaran Negara Republik Indonesia Tahun 1999 Nomor 49, Tambahan Lembaran Negara Republik Indonesia Nomor 3637);
                            <br>6.  Keputusan Presiden Republik Indonesia Nomor 87 Tahun 1999 tentang Rumpun Jabatan Fungsional;
                            <br>7.  Peraturan Menteri Negara Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 26 Tahun 2011 tentang Pedoman Perhitungan Jumlah Kebutuhan Pegawai Negeri Sipil Untuk Daerah
                            <br>8.  Peraturan Daerah Kabupaten Ciamis Nomor 17 Tahun 2008 Tentang Organisasi Perangkat Daerah Kabupaten Ciamis Sebagaimana Telah Diubah Dengan Peraturan Daerah Kabupaten Ciamis Nomor 4 Tahun 2010 Tentang Perubahan Atas Peraturan Daerah Kabupaten Ciamis Nomor 17 Tahun 2008 Tentang Organisasi Perangkat Daerah Kabupaten Ciamis;
                            <br>9.  Peraturan Bupati Ciamis Nomor 62 Tahun 2008 Tentang Tugas, Fungsi Dan Tata Kerja Unsur Organisasi RSUD;
                            <br>10. Keputusan Bupati Ciamis Nomor 061/Kpts.789-Huk/2010 Tentang Pembentukan Tim Penilai Usulan Penetapan Status Pola Pengelolaan Keuangan Badan Layanan Umum Daerah (PPK-BLUD) Pada Rumah Sakit Umum Daerah (RSUD) Kelas C Kabupaten Ciamis;
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-011" role="tabpanel" aria-labelledby="v-pills-011-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <!-- <img class="float-start flip pr-20" width="300" src="http://placehold.it/155x90" alt="images"> -->
                            <p>Ruang administrasi, Ruang Triage,, Ruang Kebidanan, Ruang Zona Merah, Zona Kuning, Zona Hijau
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-012" role="tabpanel" aria-labelledby="v-pills-012-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>1.Kepala Instalasi 
                            <br>&nbsp;&nbsp;2.  Seorang Dokter yang telah mendalami spesialisasi anesthesiologi, ilmu penyakit dalam, bedah, ilmu kesehatan anak, atau bagian lain dan pernah menjalani pelatihan dan pendidikan formal di bidang kedokteran keperawatan intensif.
                            <br>&nbsp;&nbsp;3.  Seorang Dokter yang bekerja full time atau 50% waktu kerjanya di IGD arahkan untuk memberikan pelayanan intensif dan secara fisik dapat dihubungi dan tidak terikat kewajiban lain yang menyita waktu dan kedudukannya sebagai Kepala Instalasi Ruang IGD.
                            <br>&nbsp;&nbsp;4.  Memiliki tanggung jawab medis dan administratif untuk bagian yang dibawahinya dan sebaiknya tidak dirangkap dengan tanggung jawab sebagai atasan di bagian lain atau di fasilitas lain di Rumah Sakit.
                            <br>&nbsp;&nbsp;5.  Memiliki STR/SIK.
                            <br>2.Dokter Jaga
                            <br>&nbsp;Syarat – Syarat Menjadi Dokter Jaga 
                            <br>&nbsp;&nbsp;6.  Pendidikan    : S1 kedokteran dan Profesi
                            <br>&nbsp;&nbsp;7.  Kursus/Pelatihan    : mengikuti ACLS ATLS
                            <br>&nbsp;&nbsp;8.  Pengalaman kerja      :               Seorang dokter pelaksana 3-5 tahun
                            <br>&nbsp;&nbsp;9.  Kondisi Fisik   : Sehat Jasmani dan Rohani
                            <br>3.Kepala Ruangan
                            <br>&nbsp;&nbsp;1.Sarjana Keperawatan dengan pengalaman sebagai pelaksana minimal 1 tahun
                            <br>&nbsp;&nbsp;2.DIII keperawatan dengan pengalaman sebagai pelaksana minimal 2 tahun.
                            <br>&nbsp;&nbsp;3.Memiliki sertifikat pelatihan manajemen keperawatan dan pelatihan keperawatan intensif.
                            <br>&nbsp;&nbsp;4.Memiliki kemampuan memimpin dan berwibawa.
                            <br>&nbsp;&nbsp;5.Sehat jasmani dan rohani.
                            <br>&nbsp;&nbsp;6.Bertanggung jawab secara administratif dan fungsional kepada kepala Bidang Keperawatan
                            <br>&nbsp;&nbsp;7.Secara teknis medis operasional, bertanggung jawab kepada dokter Penanggung Jawab IGD/dokter yang berwenang
                            <br>&nbsp;&nbsp;8.Memiliki STR/SIPP 1
                            <br>4. Wakil Kepala Ruangan
                            <br>&nbsp;&nbsp;• Perawat yang telah mendapatkan pelatihan dan pendidikan di bidang perawatan atau terapi intensif sekurang-kurangnya 6 bulan atau perawat yang telah bekerja pada pelayanan di IGD minimal 1 tahun.
                            <br>&nbsp;&nbsp;• Perawat yang bertugas di IGD harus memahami fungsi IGD, tata kerja dan peralatan yang digunakan untuk menjaga mutu pelayanan, mencegah timbulnya penyulit dan mencegah kerusakan pada alat-alat canggih.
                            <br>&nbsp;&nbsp;• Memiliki STR/SIPP 1
                            <br>&nbsp;&nbsp;• Pendidikan Minimal  : Ahli   Madya   Keperawatan / Kebidanan
                            <br>&nbsp;&nbsp;• Kursus/Pelatihan    :Manajemen Pelayanan Keperawatan Ruang / Bangsal
                            <br>&nbsp;&nbsp;• Pengalaman kerja  : Seorang perawat pelaksana 3-5 tahun
                            <br>&nbsp;&nbsp;• Kondisi Fisik   : Sehat Jasmani dan Rohani
                            <br>5. Clinical Instruktur (CI)
                            <br>&nbsp;Syarat – syarat Diangkat menjadi Clinical Instruktur ( CI )
                            <br>&nbsp;&nbsp;a.  Pendidikan Minimal  : Ahli   Madya   Keperawatan/Kebidanan
                            <br>&nbsp;&nbsp; b.  Kursus/Pelatihan    : Mengikuti pelatihan clinical instruktur
                            <br>&nbsp;&nbsp;c.  Pengalaman kerja  : Seorang perawat pelaksana 3-5 tahun
                            <br>&nbsp;&nbsp;d.  Kondisi Fisik   : Sehat Jasmani dan Rohani
                            <br>6. Perawat Primer/Bidan Ahli
                            <br>&nbsp;&nbsp;a.  Pendidikan :  Berijazah pendidikan formal keperawatan/kebidanan dansemua jenjang pendidikan yang disahkan oleh pemerintah/yang berwenang.
                            <br>&nbsp;&nbsp;b.  Kursus/Pelatihan   : Memiliki   sertifikat   KursusPerawatan Gawat DaruratPengalaman Kerja :Sebagai Pelaksana Perawatan diPoliklinik 5 tahun
                            <br>&nbsp;&nbsp;c.  Kondisi Fisik : Sehat Jasmani dan Rohani
                            <br>7.Administrasi
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-013" role="tabpanel" aria-labelledby="v-pills-013-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Pengawasan internal dilaksanakan oleh atasan langsung dan supervisi (setiap Shif).</p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-014" role="tabpanel" aria-labelledby="v-pills-014-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Jumlah petugas medis (dokter, perawat ) dalam melakukan Triage dan Screening dilakukan 2 orang perawat dan 1 orang dokter .
                            2 orang petugas  administrasi untuk pengklaiman pasen pulang dan pendaftaran pasen masuk IGD
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-015" role="tabpanel" aria-labelledby="v-pills-015-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>1.Adanya SPM
                            <br>2. Adanya SPO
                            <br>3. Sarana dan Prasarana Pendukung
                            <br>4.Kepastian Persyaratan
                            <br>5. Kepastian Biaya
                            <br>6. SDM yang berkopenten di bidangnya
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-016" role="tabpanel" aria-labelledby="v-pills-016-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>1. Petugas IGD yang telah diberi dan di fasilitasi APD level 1
                            <br>2.  Pembatasan Pengunjung 
                            <br>3.  Penggunaan Hepafilter
                            <br>4.  Petugas IGD yang telah diberi pelatihan APAR
                            <br>5.  Sarana dan prasarana yang digunakan dalam rangka pelayanan tidak membahayakan pasien
                            <br>6.  Ruang pelayanan yang bersih dan rapi
                            <br>7.  Alat pemadam kebakaran
                            <br>8.  Ada jalur evakuasi
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-017" role="tabpanel" aria-labelledby="v-pills-017-tab">
                        <div class="row">
                        <div class="col-md-12">
                            <p>Evaluasi kinerja pelaksana dilaksanakan secara berkala berdasarkan evaluasi internal,hasil IKM, dan kotak kepuasan pasien.
                            </p>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
