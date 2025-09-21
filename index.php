<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Kebontunggul</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
                            <a href="#profil" class="btn btn-primary me-2 mb-2">Selengkapnya</a>
                            <a href="#kontak" class="btn btn-outline-light mb-2">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="profil" class="section-padding kepala-desa-section">
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

    <section id="pemerintahan" class="section-padding kepala-desa-section">
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
    <?php include 'includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>