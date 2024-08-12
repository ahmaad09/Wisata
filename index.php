<?php
include ("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata</title>
    <link rel="stylesheet" href="<?= $main_url ?>assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

    <!-- Awal jumbotron -->
    <div class="jumbotron " data-aos="fade-up">
        <img src="assets/image/desktop.adapt.1920.high.jpg" alt="" class="jumbotron">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/image/gday-in-lockup-shadow.png" alt="" width="400px" class="img-fluid gambar">
            </div>
        </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Awal Konten -->
    <main class="my-5">
        <div class="container">
            <div class="row">
                <!-- Gambar 1: Bogor -->
                <div class="col-md-4 position-relative" data-aos="fade-up">
                    <img src="assets/image/bogor-v1.jpg" alt="" class="gambar-content" data-bs-toggle="modal"
                        data-bs-target="#modalBogor">
                    <div class="text-overlay">Bogor</div>
                </div>

                <!-- Modal untuk Bogor -->
                <div class="modal fade" id="modalBogor" tabindex="-1" aria-labelledby="modalLabelBogor"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLabelBogor">Wisata Bogor</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="assets/image/bogor-v1.jpg" alt="" class="img-fluid">
                                <p class=" mt-3">
                                    Bogor, yang dikenal dengan sebutan Kota Hujan, adalah salah satu destinasi wisata
                                    populer di Jawa Barat. Dengan udara yang sejuk dan pemandangan alam yang indah,
                                    Bogor menawarkan berbagai atraksi menarik seperti Kebun Raya Bogor yang merupakan
                                    salah satu kebun raya tertua di Asia, Istana Bogor yang bersejarah, dan berbagai air
                                    terjun yang eksotis. Selain itu, Bogor juga terkenal dengan kuliner khasnya seperti
                                    asinan Bogor dan toge goreng.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <a href="pesanan.php" class="btn btn-primary" data-bs-dismiss="modal">Pesan</a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gambar 2: Pulau Padar -->
                <div class="col-md-4 position-relative" data-aos="fade-up">
                    <img src="assets/image/pulau-padar-v1.jpg" alt="" class="gambar-content" data-bs-toggle="modal"
                        data-bs-target="#modalPadar">
                    <div class="text-overlay">Pulau Padar</div>
                </div>

                <!-- Modal untuk Pulau Padar -->
                <div class="modal fade" id="modalPadar" tabindex="-1" aria-labelledby="modalLabelPadar"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLabelPadar">Wisata Pulau Padar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="assets/image/pulau-padar-v1.jpg" alt="" class="img-fluid">
                                <p class="mt-3">
                                    Informasi Wisata Pulau Padar:
                                    Pulau Padar adalah bagian dari Taman Nasional Komodo di Nusa Tenggara Timur dan
                                    terkenal dengan pemandangan alamnya yang memukau. Pulau ini menawarkan lanskap
                                    perbukitan dengan jalur trekking yang menantang namun sangat memuaskan dengan
                                    pemandangan panorama laut dan pulau-pulau sekitarnya. Pulau Padar juga menjadi spot
                                    favorit untuk fotografi karena memiliki pantai dengan pasir berwarna merah muda dan
                                    pemandangan matahari terbit yang spektakuler.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <a href="pesanan.php" class="btn btn-primary" data-bs-dismiss="modal">Pesan</a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gambar 3: Likupang -->
                <div class="col-md-4 position-relative" data-aos="fade-up">
                    <img src="assets/image/Likupang.jpg" alt="" class="gambar-content" data-bs-toggle="modal"
                        data-bs-target="#modalLikupang">
                    <div class="text-overlay">Likupang</div>
                </div>

                <!-- Modal untuk Likupang -->
                <div class="modal fade" id="modalLikupang" tabindex="-1" aria-labelledby="modalLabelLikupang"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLabelLikupang">Wisata Likupang</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="assets/image/Likupang.jpg" alt="" class="img-fluid">
                                <p class="mt-3">
                                    Informasi Wisata Likupang:
                                    Likupang adalah sebuah kawasan wisata di Sulawesi Utara yang sedang berkembang dan
                                    menjadi destinasi super prioritas di Indonesia. Terkenal dengan pantai-pantai
                                    berpasir putihnya yang bersih dan perairan yang jernih, Likupang menawarkan
                                    pengalaman snorkeling dan diving yang menakjubkan dengan terumbu karang yang masih
                                    alami. Selain pantai, Likupang juga menawarkan pengalaman budaya dengan mengunjungi
                                    desa-desa lokal yang masih mempertahankan tradisi dan adat istiadat mereka.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <a href="pesanan.php" class="btn btn-primary">Pesan</a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Akhir Konten -->


    <!-- Konten 2 -->
    <div class="row my-5" data-aos="fade-up">
        <div class="col-md-12">
            <div class="container">
                <img src="assets/image/danau.avif" alt="" width="100%" class="gamb-conten2">
                <span>
                    <a href="https://www.kemenparekraf.go.id/dsp/danau-toba" class="btn btn-outline-light p-3">Lihat Selengkapnya</button>
                </span>butt
            </div>
        </div>
    </div>
    <!-- Konten 2 -->

    <!-- Tempat Populer -->
    <div class="container my-5">
        <h2>TEMPAT POPULER UNTUK DI KUNJUNGI</h2>
        <div class="menu mt-3 mb-3">
            <button type="button" class="btn btn-light">Populer</button>
            <button type="button" class="btn btn-light">Kota</button>
            <button type="button" class="btn btn-light">Pedesaan</button>
            <button type="button" class="btn btn-light">Pulau</button>
            <button type="button" class="btn btn-light">Alam</button>
        </div>
        <div class="row">
            <a href="aceh.php" class="col position-relative" data-aos="fade-up">
                <img src="assets/image/Jelajah Masjid Thumbnail 2).jpg" alt="" width="100%" class="gam-populer">
                <div class="text-overlay">Masjid</div>
            </a>
            <div class="col position-relative" data-aos="fade-up">
                <img src="assets/image/Jakarta_thumbnail.jpg" alt="" width="100%" class="gam-populer">
                <div class="text-overlay">Jakarta</div>
            </div>
            <div class="col position-relative" data-aos="fade-up">
                <img src="assets/image/thumbnail (1).jpg" alt="" width="100%" class="gam-populer">
                <div class="text-overlay">Pulau</div>
            </div>
            <div class="col position-relative" data-aos="fade-up">
                <img src="assets/image/thumbnail-morotai.jpg" alt="" width="100%" class="gam-populer">
                <div class="text-overlay">Morotai</div>
            </div>
        </div>
        <div class="row my-2">
            <div class="col position-relative" data-aos="fade-up">
                <img src="assets/image/toba-thumbnail.jpg" alt="" width="100%" class="gam-populer">
                <div class="text-overlay">Toba</div>
            </div>
            <div class="col position-relative" data-aos="fade-up">
                <img src="assets/image/Likupang.jpg" alt="" width="100%" class="gam-populer">
                <div class="text-overlay">Likupang</div>
            </div>
            <div class="col position-relative" data-aos="fade-up">
                <img src="assets/image/rajaampatbaruu-v1.jpg" alt="" width="100%" class="gam-populer">
                <div class="text-overlay">Raja Ampat</div>
            </div>
            <a href="labuhan-bajo.php" class="col position-relative" data-aos="fade-up">
                <img src="assets/image/Labuan-Bajo-Thumbnail-v1.jpg" alt="" width="100%" class="gam-populer">
                <div class="text-overlay">Labuan Bajo</div>
            </a>
        </div>
    </div>
    <hr class="container">
    <!-- akhir tempat populer -->

    <!-- konten 3 -->
    <div class="container my-5 position-relative" data-aos="fade-up">
        <img src="assets/image/headerborobudur.jpg" alt="" class="header-img img-fluid" width="100%">
        <div class="text-overlay borobudur">Jelajahi Borobudur
        </div>
        <p class="text container">Borobudur cocok untuk semua orang <br>. Dapatkan tip tentang berwisata di Jogja bagi
            penyandang disabilitas <br>r dan pelajari cara menjadikan perjalanan Anda tak akan terlupakan.</p>
    </div>
    <!-- konten 3 -->

    <!-- panduan -->
    <div class="container">
        <h2 id="panduan" data-aos="fade-up">Panduan Perjalanan</h2>
        <div class="row">
            <div class="col-sm-4 position-relative">
                <img src="assets/image/idocare.jpg" alt="" class="panduan" data-aos="fade-up">
                <div class="text-keteranga">Teks InDonesia CARE</div>
                <p data-aos="fade-up">Kementerian Pariwisata dan Ekonomi Kreatif mempersembahkan InDOnesia CARE, sebuah
                    simbol dukungan berupa panduan protokol kesehatan pariwisata yang mengedepankan usaha terbaik dalam
                    mewujudkan kebersihan, kesehatan, keselamatan, dan kelestarian lingkungan bersama di destinasi
                    pariwisata Indonesia.</p>
            </div>
            <div class="col-sm-4 position-relative">
                <img src="assets/image/e-paspor.jpg" alt="" data-aos="fade-up" class="panduan">
                <div class="text-keteranga">E-Visa</div>
                <p data-aos="fade-up">Pastikan untuk mempelajari semua persyaratan keimigrasian yang harus dipenuhi
                    sebelum mengunjungi Indonesia, termasuk e-paspor dan e-visa.</p>
            </div>
            <div class="col-sm-4 position-relative">
                <img src="assets/image/informasi-umum-v1.jpg" alt="" class="panduan" data-aos="fade-up">
                <div class="text-keteranga">Informasi Umum</div>
                <p data-aos="fade-up">Temukan semua yang perlu Sobat Pesona ketahui tentang cara menuju ke sini,
                    peraturan apa yang harus diperhatikan, dan banyak hal penting lainnya dalam mengatur rencana
                    perjalanan Sobat Pesona ke Indonesia. </p>
            </div>

        </div>
    </div>
    <!-- akhir panduan -->

    <!-- Why AVIATOUR -->
    <div class="AVIATOUR container">
        <h2 class="text-center mb-5" data-aos="fade-up">Why AVIATOUR</h2>
        <div class="row">
            <div class="col-md-3">
                <h3 class="text-left" data-aos="fade-up">Pelayanan Terbaik dan Personal</h3>
                <p class="text-left" data-aos="fade-up">Kami mengetahui bahwa kepentingan anda lebih utama dari program
                    apapun yang dapat kami tawarkan. Penyediaan layanan yang terbaik bagi setiap pribadi menjadi prinsip
                    kami dalam menyempurnakan perjalanan anda.</p>
            </div>
            <div class="col-md-3">
                <img src="assets/image/DMMTt38W0AEczNR1.jpg" alt="" width="100%" data-aos="fade-up" class="rounded">
            </div>
            <div class="col-md-3">
                <img src="assets/image/kangguru.jpg" alt="" width="100%" data-aos="fade-up">
            </div>
            <div class="col-md-3">
                <h3 class="text-right" data-aos="fade-up">Pelayanan Terbaik dan Personal</h3>
                <p class="text-right" data-aos="fade-up">Kami mengetahui bahwa kepentingan anda lebih utama dari program
                    apapun yang dapat kami tawarkan. Penyediaan layanan yang terbaik bagi setiap pribadi menjadi prinsip
                    kami dalam menyempurnakan perjalanan anda.</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <h3 class="text-left" data-aos="fade-up">Pelayanan Terbaik dan Personal</h3>
                <p class="text-left" data-aos="fade-up">Kami mengetahui bahwa kepentingan anda lebih utama dari program
                    apapun yang dapat kami tawarkan. Penyediaan layanan yang terbaik bagi setiap pribadi menjadi prinsip
                    kami dalam menyempurnakan perjalanan anda.</p>
            </div>
            <div class="col-md-3">
                <img src="assets/image/borobudur-v1.jpg" alt="" width="100%" data-aos="fade-up" class="card">
            </div>
            <div class="col-md-3">
                <img src="assets/image/18514134_699802516873350_6954135892898349056_n1.jpg" alt="" width="100%"
                    data-aos="fade-up" class="rounded">
            </div>
            <div class="col-md-3">
                <h3 class="text-right" data-aos="fade-up">Pelayanan Terbaik dan Personal</h3>
                <p class="text-right" data-aos="fade-up">Kami mengetahui bahwa kepentingan anda lebih utama dari program
                    apapun yang dapat kami tawarkan. Penyediaan layanan yang terbaik bagi setiap pribadi menjadi prinsip
                    kami dalam menyempurnakan perjalanan anda.</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <?php
    include ("footer.php");
    ?>
</body>

</html>