<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Kebontunggul</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <?php include 'includes/header.php';
    ?>

    <section id="home" class="hero-section">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-start">
                <div class="col-lg-8 col-md-10">
                    <div class="hero-content">
                        <h1>Selamat Datang di<br>Desa Kebontunggul</h1>
                        <p class="lead mb-4">Website resmi desa yang menyajikan informasi terkini tentang pemerintahan, layanan, dan kegiatan masyarakat Desa Kebontunggul.</p>
                        <div>
                            <a href="#profil" class="btn btn-Selengkapnya me-2 mb-2">Selengkapnya</a>
                            <a href="#kontak" class="btn btn-outline-light mb-2">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="profil" class="section-padding kepala-desa-section bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="mb-4">Sambutan Kepala Desa</h2>
                    <h4 class="text-primary">S I A N D I, SH. MM.</h4>
                    <p class="text-muted">Kepala Desa</p>
                    <p>Assalamu'alaikum Wr. Wb dan salam sejahtera bagi kita semua.</p>
                    <p>Puji syukur kita panjatkan kepada Allah SWT yang telah melimpahkan rahmat dan hidayah-Nya kepada kita semua. Website desa ini hadir sebagai media informasi dan komunikasi antara pemerintah desa dengan masyarakat.</p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="img/image.png" alt="Kepala Desa" class="kepala-desa-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps -->
    <section id="peta" class="map-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="map-header">
                        <h2>Peta Desa <span class="span-highlight">Kebontunggul</span></h2>
                        <p>Menampilkan Peta Desa Dengan <i>Interest Point</i> Desa Kebontunggul</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.5519522067993!2d112.48125757481665!3d-7.623630792391854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7871734f5c1f69%3A0x3c949750b0651e3f!2zS2FudG9yIEtlcGFsYSBEZXNhIEtlYm9udHVuZ2d1bCDqpo_qpqTqp4DqpqDqprrqprTqpoLqpo_qprzqpqXqpq3qpqPqprrqprHqpo_qprzqpqfqprrqprTqpqTqp4DqpqDqprjqppTqp4DqppLqprjqpq3qp4A!5e0!3m2!1sid!2sid!4v1758502084632!5m2!1sid!2sid"
                            width="600" height="450"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Perangkat Desa -->
    <section id="pemerintahan" class="section-padding kepala-desa-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>Aparatur Desa</h2>
                    <p class="text-muted">Struktur Pemerintahan Desa Kebontunggul</p>
                </div>
            </div>
            <!-- Ambil data dari database -->
            <div class="slider-wrapper">
                <div class="aparatur-container" id="aparaturSlider">
                    <div class="aparatur-card">
                        <img src="https://i.pravatar.cc/100?img=10" class="aparatur-img" alt="Aparatur">
                        <h5>Rudi Hartono</h5>
                        <p class="text-muted">Sekretaris Desa</p>
                    </div>
                    <div class="aparatur-card">
                        <img src="https://i.pravatar.cc/100?img=11" class="aparatur-img" alt="Aparatur">
                        <h5>Sugianto</h5>
                        <p class="text-muted">Kaur Keuangan</p>
                    </div>
                    <div class="aparatur-card">
                        <img src="https://i.pravatar.cc/100?img=12" class="aparatur-img" alt="Aparatur">
                        <h5>Ratna Sari Dewi</h5>
                        <p class="text-muted">Kaur Umum</p>
                    </div>
                    <div class="aparatur-card">
                        <img src="https://i.pravatar.cc/100?img=4" class="aparatur-img" alt="Aparatur">
                        <h5>Agung</h5>
                        <p class="text-muted">Kadus</p>
                    </div>
                    <div class="aparatur-card">
                        <img src="https://i.pravatar.cc/100?img=5" class="aparatur-img" alt="Aparatur">
                        <h5>Sri Wahyuni</h5>
                        <p class="text-muted">Kasi Pemerintahan</p>
                    </div>
                    <div class="aparatur-card">
                        <img src="https://i.pravatar.cc/100?img=6" class="aparatur-img" alt="Aparatur">
                        <h5>Budi Santoso</h5>
                        <p class="text-muted">Kasi Pelayanan</p>
                    </div>
                    <div class="aparatur-card">
                        <img src="https://i.pravatar.cc/100?img=7" class="aparatur-img" alt="Aparatur">
                        <h5>Lestari</h5>
                        <p class="text-muted">Kasi Kesejahteraan</p>
                    </div>
                    <div class="aparatur-card">
                        <img src="https://i.pravatar.cc/100?img=8" class="aparatur-img" alt="Aparatur">
                        <h5>Hendra</h5>
                        <p class="text-muted">Kadus II</p>
                    </div>
                </div>

                <button class="slider-btn prev-btn" id="prevBtn"><i class="bi bi-chevron-left"></i></button>
                <button class="slider-btn next-btn" id="nextBtn"><i class="bi bi-chevron-right"></i></button>
            </div>
        </div>
    </section>

    <!-- jumlah Penduduk -->
    <section class="population-stats-section">
        <div class="container">
            <div class="population-header">
                <h2 class="section-title">Administrasi Penduduk</h2>
                <p class="section-subtitle">Sistem digital yang berfungsi mempermudah pengelolaan data dan informasi terkait dengan kependudukan dan pendayagunaannya untuk pelayanan publik yang efektif dan efisien</p>
            </div>

            <div class="row text-center">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item-card">
                        <div class="stat-figure">4.933</div>
                        <div class="stat-description">Total Penduduk</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stat-item-card">
                        <div class="stat-figure">1.843</div>
                        <div class="stat-description">Kepala Keluarga</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stat-item-card">
                        <div class="stat-figure">2.435</div>
                        <div class="stat-description">Laki-Laki</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stat-item-card">
                        <div class="stat-figure">2.498</div>
                        <div class="stat-description">Perempuan</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- APB DESA -->
    <section class="apb-section-custom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="img/icon-statistik.webp" alt="Ilustrasi APB Desa" class="apb-image">
                </div>

                <div class="col-lg-6">
                    <div class="apb-content">
                        <h2>APB Desa <span class="year-highlight">2025</span></h2>
                        <p class="subtitle">Akses cepat dan transparan terhadap APB Desa serta proyek pembangunan</p>

                        <div class="info-box pendapatan">
                            <span class="info-label">Pendapatan Desa</span>
                            <span class="info-value">Rp2.329.523.173</span>
                        </div>

                        <div class="info-box belanja">
                            <span class="info-label">Belanja Desa</span>
                            <span class="info-value">Rp2.329.523.173</span>
                        </div>

                        <a href="#" class="btn-details">Lihat Detail Lengkap</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Wisata Desa -->
    <section class="custom-tourism-section">
        <div class="container">
            <div class="tourism-section-header">
                <h2 class="heading-title">Wisata Desa</h2>
                <p class="heading-subtitle">Tempat Wisata Rekreasi yang nyaman, sendiri oke, bersama banyak orang juga oke</p>
            </div>

            <div id="wisataCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner tourism-slider-container">

                    <div class="carousel-item active tourism-slide-item">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <img src="img/pemandangan.png" class="slide-image" alt="Wisata Jopuro">
                            </div>
                            <div class="col-lg-5">
                                <div class="tourism-info-panel">
                                    <h3 class="info-panel-title">Wisata Jopuro</h3>
                                    <p class="info-panel-description">
                                        Wisata Jopuro merupakan pemandian berasal dari sumber mata air yang mengalir ke kolam untuk berenang dan bermain air. Wisata Jopuro juga dilengkapi dengan wahan...
                                    </p>
                                    <a href="#" class="btn-tourism-details">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item tourism-slide-item">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <img src="img/pemandangan.png" class="slide-image" alt="Air Terjun Indah">
                            </div>
                            <div class="col-lg-5">
                                <div class="tourism-info-panel">
                                    <h3 class="info-panel-title">Air Terjun Indah</h3>
                                    <p class="info-panel-description">
                                        Nikmati kesegaran dan keindahan alam di Air Terjun Indah yang mempesona. Cocok untuk melepas penat dan mencari ketenangan di akhir pekan.
                                    </p>
                                    <a href="#" class="btn-tourism-details">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev slider-custom-control ms-2" type="button" data-bs-target="#wisataCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true">
                        </span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next slider-custom-control me-1" type="button" data-bs-target="#wisataCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>


            <div class="text-center mt-4">
                <a href="#" class="btn-view-more-tourism">Lihat Wisata Lainnya</a>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>