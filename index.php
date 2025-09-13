<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Kampunganyar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #28a745;
            --secondary-color: #34495e;
        }
        
        .navbar-brand img {
            height: 40px;
        }
        
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), 
                        url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="1200" height="600" viewBox="0 0 1200 600"><rect width="1200" height="600" fill="%23228B22"/><circle cx="200" cy="150" r="30" fill="%23006400"/><circle cx="400" cy="200" r="25" fill="%23006400"/><circle cx="800" cy="100" r="35" fill="%23006400"/><circle cx="1000" cy="180" r="20" fill="%23006400"/><path d="M0,400 Q300,350 600,400 T1200,400 L1200,600 L0,600 Z" fill="%231e7b1e"/></svg>');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
            min-height: 80vh;
            display: flex;
            align-items: center;
        }
        
        .hero-content h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 12px 30px;
            border-radius: 25px;
        }
        
        .btn-outline-light {
            padding: 12px 30px;
            border-radius: 25px;
        }
        
        .section-padding {
            padding: 80px 0;
        }
        
        .kepala-desa-section {
            background-color: #f8f9fa;
        }
        
        .kepala-desa-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid var(--primary-color);
        }
        
        .map-container {
            height: 400px;
            background: #e9ecef;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        
        .map-placeholder {
            background: linear-gradient(45deg, #28a745, #20c997);
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
        }
        
        .aparatur-card {
            text-align: center;
            padding: 30px 20px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        
        .aparatur-card:hover {
            transform: translateY(-10px);
        }
        
        .aparatur-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
            object-fit: cover;
        }
        
        .stats-section {
            background-color: var(--primary-color);
            color: white;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
        }
        
        .apb-section {
            background-color: #f8f9fa;
        }
        
        .apb-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .news-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        
        .news-card:hover {
            transform: translateY(-5px);
        }
        
        .news-img {
            height: 200px;
            object-fit: cover;
        }
        
        .wisata-section {
            background: linear-gradient(135deg, var(--primary-color), #20c997);
            color: white;
        }
        
        .wisata-card {
            background: white;
            color: #333;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .wisata-img {
            height: 200px;
            object-fit: cover;
        }
        
        .gallery-section {
            background-color: #f8f9fa;
        }
        
        .gallery-img {
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s;
        }
        
        .gallery-img:hover {
            transform: scale(1.05);
        }
        
        .footer {
            background-color: #2c3e50;
            color: white;
            padding: 50px 0 20px;
        }
        
        .social-icons a {
            color: white;
            font-size: 1.5rem;
            margin-right: 15px;
            transition: color 0.3s;
        }
        
        .social-icons a:hover {
            color: var(--primary-color);
        }
        
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2rem;
            }
            
            .stat-number {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='40' viewBox='0 0 40 40'><rect width='40' height='40' fill='%2328a745'/><text x='20' y='25' text-anchor='middle' fill='white' font-family='Arial' font-size='12' font-weight='bold'>DK</text></svg>" alt="Logo">
                <span class="ms-2 fw-bold">Desa Kampunganyar</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#profil">Profil Desa</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pemerintahan">Pemerintahan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#informasi">Informasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#layanan">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#galeri">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero-content">
                        <h1>Selamat Datang di<br>Desa Kampunganyar</h1>
                        <p class="lead mb-4">Website resmi desa yang menyajikan informasi terkini tentang pemerintahan, layanan, dan kegiatan masyarakat Desa Kampunganyar.</p>
                        <div>
                            <a href="#profil" class="btn btn-primary me-3">Selengkapnya</a>
                            <a href="#kontak" class="btn btn-outline-light">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kepala Desa Section -->
    <section id="profil" class="section-padding kepala-desa-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="mb-4">Sambutan Kepala Desa</h2>
                    <h4 class="text-primary mb-3">SUMARDI</h4>
                    <p>Assalamu'alaikum Wr. Wb dan salam sejahtera bagi kita semua.</p>
                    <p>Puji syukur kita panjatkan kepada Allah SWT yang telah melimpahkan rahmat dan hidayah-Nya kepada kita semua. Website desa ini hadir sebagai media informasi dan komunikasi antara pemerintah desa dengan masyarakat.</p>
                    <p>Melalui website ini, diharapkan masyarakat dapat dengan mudah mengakses informasi tentang program-program pembangunan, layanan administrasi, dan berbagai kegiatan yang ada di desa kita.</p>
                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='150' height='150' viewBox='0 0 150 150'><circle cx='75' cy='75' r='75' fill='%23e9ecef'/><circle cx='75' cy='60' r='25' fill='%236c757d'/><path d='M30,120 Q75,90 120,120 L120,150 L30,150 Z' fill='%236c757d'/></svg>" alt="Kepala Desa" class="kepala-desa-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Peta Desa Section -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>Peta Desa Kampunganyar</h2>
                    <p>Lokasi dan Batas Wilayah Desa Kampunganyar</p>
                </div>
                <div class="col-12">
                    <div class="map-container">
                        <div class="map-placeholder">
                            <div class="text-center">
                                <i class="fas fa-map-marked-alt fa-3x mb-3"></i>
                                <p>Peta Desa Kampunganyar</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Aparatur Desa Section -->
    <section id="pemerintahan" class="section-padding kepala-desa-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>Aparatur Desa</h2>
                    <p>Struktur Pemerintahan Desa Kampunganyar</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="aparatur-card bg-white">
                        <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'><circle cx='50' cy='50' r='50' fill='%23e9ecef'/><circle cx='50' cy='40' r='15' fill='%236c757d'/><path d='M25,75 Q50,60 75,75 L75,100 L25,100 Z' fill='%236c757d'/></svg>" alt="Aparatur" class="aparatur-img">
                        <h5>Rudi Hartono</h5>
                        <p class="text-muted">Sekretaris Desa</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="aparatur-card bg-white">
                        <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'><circle cx='50' cy='50' r='50' fill='%23e9ecef'/><circle cx='50' cy='40' r='15' fill='%236c757d'/><path d='M25,75 Q50,60 75,75 L75,100 L25,100 Z' fill='%236c757d'/></svg>" alt="Aparatur" class="aparatur-img">
                        <h5>Sugianto</h5>
                        <p class="text-muted">Kaur Keuangan</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="aparatur-card bg-white">
                        <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'><circle cx='50' cy='50' r='50' fill='%23e9ecef'/><circle cx='50' cy='40' r='15' fill='%236c757d'/><path d='M25,75 Q50,60 75,75 L75,100 L25,100 Z' fill='%236c757d'/></svg>" alt="Aparatur" class="aparatur-img">
                        <h5>Ratna Sari Dewi</h5>
                        <p class="text-muted">Kaur Umum</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="aparatur-card bg-white">
                        <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'><circle cx='50' cy='50' r='50' fill='%23e9ecef'/><circle cx='50' cy='40' r='15' fill='%236c757d'/><path d='M25,75 Q50,60 75,75 L75,100 L25,100 Z' fill='%236c757d'/></svg>" alt="Aparatur" class="aparatur-img">
                        <h5>Agung</h5>
                        <p class="text-muted">Kadus</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Administrasi Penduduk Section -->
    <section class="section-padding stats-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>Administrasi Penduduk</h2>
                    <p>Data kependudukan Desa Kampunganyar berdasarkan data terbaru</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stat-number">4.933</div>
                    <p>Jumlah Penduduk</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stat-number">1.843</div>
                    <p>Jumlah KK</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stat-number">2.435</div>
                    <p>Laki-laki</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stat-number">2.498</div>
                    <p>Perempuan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- APB Desa Section -->
    <section id="layanan" class="section-padding apb-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>APB <span class="text-primary">Desa</span> 2025</h2>
                    <p>Anggaran Pendapatan dan Belanja Desa Tahun 2025</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="apb-card text-center">
                        <div class="mb-4">
                            <i class="fas fa-file-invoice-dollar fa-4x text-primary"></i>
                        </div>
                        <h4>Pendapatan Desa</h4>
                        <h3 class="text-primary">Rp 2.345.678.000</h3>
                        <hr>
                        <h4>Belanja Desa</h4>
                        <h3 class="text-primary">Rp 2.245.621.000</h3>
                        <div class="mt-4">
                            <a href="#" class="btn btn-primary">Download APB</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita Desa Section -->
    <section id="informasi" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>Berita <span class="text-primary">Desa</span></h2>
                    <p>Informasi terkini dan kegiatan Desa Kampunganyar</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card news-card border-0">
                        <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='400' height='200' viewBox='0 0 400 200'><rect width='400' height='200' fill='%2328a745'/><text x='200' y='100' text-anchor='middle' fill='white' font-family='Arial' font-size='16'>Musyawarah Desa</text></svg>" class="card-img-top news-img" alt="Berita">
                        <div class="card-body">
                            <h5 class="card-title">Musyawarah Desa Bahas Rencana Pembangunan</h5>
                            <p class="card-text">Kegiatan musyawarah desa membahas rencana pembangunan tahun 2025...</p>
                            <a href="#" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card news-card border-0">
                        <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='400' height='200' viewBox='0 0 400 200'><rect width='400' height='200' fill='%23007bff'/><text x='200' y='100' text-anchor='middle' fill='white' font-family='Arial' font-size='16'>Vaksinasi</text></svg>" class="card-img-top news-img" alt="Berita">
                        <div class="card-body">
                            <h5 class="card-title">Program Vaksinasi COVID-19 Tahap III</h5>
                            <p class="card-text">Pelaksanaan vaksinasi COVID-19 tahap ketiga bagi masyarakat desa...</p>
                            <a href="#" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card news-card border-0">
                        <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='400' height='200' viewBox='0 0 400 200'><rect width='400' height='200' fill='%23ffc107'/><text x='200' y='100' text-anchor='middle' fill='white' font-family='Arial' font-size='16'>Festival Desa</text></svg>" class="card-img-top news-img" alt="Berita">
                        <div class="card-body">
                            <h5 class="card-title">Festival Budaya Desa Kampunganyar</h5>
                            <p class="card-text">Perayaan festival budaya tahunan yang menampilkan kesenian lokal...</p>
                            <a href="#" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-outline-primary">Lihat Semua Berita</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Wisata Desa Section -->
    <section class="section-padding wisata-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>Wisata Desa</h2>
                    <p>Destinasi wisata menarik yang ada di Desa Kampunganyar</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card wisata-card">
                        <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='400' height='200' viewBox='0 0 400 200'><rect width='400' height='200' fill='%2320c997'/><circle cx='100' cy='50' r='30' fill='%2317a2b8'/><circle cx='300' cy='80' r='25' fill='%2317a2b8'/><path d='M0,150 Q200,100 400,150 L400,200 L0,200 Z' fill='%2328a745'/><text x='200' y='175' text-anchor='middle' fill='white' font-family='Arial' font-size='14'>Kali Kedung</text></svg>" class="card-img-top wisata-img" alt="Wisata">
                        <div class="card-body text-center">
                            <h5 class="card-title">Kali Kedung</h5>
                            <p class="card-text">Objek wisata alam berupa sungai dengan pemandangan yang indah dan udara yang sejuk.</p>
                            <a href="#" class="btn btn-primary">Kunjungi</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-outline-light">Lihat Semua Wisata</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri Section -->
    <section id="galeri" class="section-padding gallery-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>Galeri <span class="text-primary">Desa</span></h2>
                    <p>Dokumentasi kegiatan dan pemandangan Desa Kampunganyar</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4">
                    <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='500' height='250' viewBox='0 0 500 250'><rect width='500' height='250' fill='%2328a745'/><text x='250' y='125' text-anchor='middle' fill='white' font-family='Arial' font-size='18'>Kegiatan Masyarakat</text></svg>" class="img-fluid gallery-img" alt="Galeri">
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='500' height='250' viewBox='0 0 500 250'><rect width='500' height='250' fill='%23007bff'/><text x='250' y='125' text-anchor='middle' fill='white' font-family='Arial' font-size='18'>Pemandangan Desa</text></svg>" class="img-fluid gallery-img" alt="Galeri">
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-primary">Lihat Semua Galeri</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="kontak" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5>Kontak Kami</h5>
                    <p><i class="fas fa-map-marker-alt me-2"></i>Jl. Raya Kampunganyar No. 123</p>
                    <p><i class="fas fa-phone me-2"></i>+62 123 456 789</p>
                    <p><i class="fas fa-envelope me-2"></i>info@desakampunganyar.go.id</p>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5>Link Penting</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light">Pemerintah Kabupaten</a></li>
                        <li><a href="#" class="text-light">Pemerintah Provinsi</a></li>
                        <li><a href="#" class="text-light">Kementerian Desa</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5>Media Sosial</h5>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="row">
                <div class="col-12 text-center">
                    <p>&copy; 2025 Desa Kampunganyar. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('bg-white', 'shadow');
            } else {
                navbar.classList.remove('bg-white', 'shadow');
            }
        });
<?php //include 'includes/header.php'; ?>
<?php //include 'includes/footer.php'; ?>
