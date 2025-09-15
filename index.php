<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Kebontunggul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #28a745;
            --secondary-color: #34495e;
        }

        body {
            padding-top: 70px; /* PERBAIKAN: Memberi ruang untuk navbar fixed-top */
        }

        .navbar-brand img {
            height: 40px;
        }

        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="1200" height="600" viewBox="0 0 1200 600"><rect width="1200" height="600" fill="%23228B22"/><circle cx="200" cy="150" r="30" fill="%23006400"/><circle cx="400" cy="200" r="25" fill="%23006400"/><circle cx="800" cy="100" r="35" fill="%23006400"/><circle cx="1000" cy="180" r="20" fill="%23006400"/><path d="M0,400 Q300,350 600,400 T1200,400 L1200,600 L0,600 Z" fill="%231e7b1e"/></svg>');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            min-height: 80vh;
            display: flex;
            align-items: center;
        }

        .hero-content h1 {
            font-size: 3rem;
            font-weight: bold;
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

        .aparatur-card {
            text-align: center;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s;
            height: 100%; /* PERBAIKAN: Membuat semua kartu sama tinggi */
        }

        .aparatur-card:hover {
            transform: translateY(-10px);
        }

        .aparatur-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto 15px; /* PERBAIKAN: Posisi & margin lebih baik */
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

        /* PERBAIKAN: Media query lebih lengkap untuk mobile */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.2rem;
            }

            .hero-section {
                text-align: center;
            }

            .section-padding {
                padding: 60px 0;
            }
            
            .kepala-desa-section .text-center {
                margin-top: 30px;
            }

            .stat-number {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm"> <div class="container">
            <a class="navbar-brand" href="#home">
                <img src="img/Logo Desa Kebontunggal.png" alt="Logo_Desa">
                <span class="ms-2 fw-bold">Desa Kebontunggul</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#profil">Profil Desa</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pemerintahan">Pemerintahan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#layanan">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#galeri">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

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
                    <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='150' height='150' viewBox='0 0 150 150'><circle cx='75' cy='75' r='75' fill='%23e9ecef'/><circle cx='75' cy='60' r='25' fill='%236c757d'/><path d='M30,120 Q75,90 120,120 L120,150 L30,150 Z' fill='%236c757d'/></svg>" alt="Kepala Desa" class="kepala-desa-img">
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>Peta Desa Kebontunggul</h2>
                    <p class="text-muted">Lokasi dan Batas Wilayah Desa Kebontunggul</p>
                </div>
                <div class="col-12">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.578663678018!2d112.4389916152758!3d-7.511883394582158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78086338e55e51%3A0x442e31641031a0e!2sBalai%20Desa%20Kebontunggul!5e0!3m2!1sen!2sid!4v1663162734185!5m2!1sen!2sid"
                            width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
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
            <div id="aparaturCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" id="aparaturCarouselInner">
                    </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#aparaturCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#aparaturCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <div id="aparaturData" class="d-none">
        <div class="aparatur-item">
            <img src="https://via.placeholder.com/100" alt="Aparatur">
            <h5>Rudi Hartono</h5>
            <p class="text-muted">Sekretaris Desa</p>
        </div>
        <div class="aparatur-item">
            <img src="https://via.placeholder.com/100" alt="Aparatur">
            <h5>Sugianto</h5>
            <p class="text-muted">Kaur Keuangan</p>
        </div>
        <div class="aparatur-item">
            <img src="https://via.placeholder.com/100" alt="Aparatur">
            <h5>Ratna Sari Dewi</h5>
            <p class="text-muted">Kaur Umum</p>
        </div>
        <div class="aparatur-item">
            <img src="https://via.placeholder.com/100" alt="Aparatur">
            <h5>Agung</h5>
            <p class="text-muted">Kadus</p>
        </div>
        <div class="aparatur-item">
            <img src="https://via.placeholder.com/100" alt="Aparatur">
            <h5>Sri Wahyuni</h5>
            <p class="text-muted">Kasi Pemerintahan</p>
        </div>
        <div class="aparatur-item">
            <img src="https://via.placeholder.com/100" alt="Aparatur">
            <h5>Budi Santoso</h5>
            <p class="text-muted">Kasi Pelayanan</p>
        </div>
        <div class="aparatur-item">
            <img src="https://via.placeholder.com/100" alt="Aparatur">
            <h5>Lestari</h5>
            <p class="text-muted">Kasi Kesejahteraan</p>
        </div>
        <div class="aparatur-item">
            <img src="https://via.placeholder.com/100" alt="Aparatur">
            <h5>Hendra</h5>
            <p class="text-muted">Kadus II</p>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.remove('bg-light');
                navbar.classList.add('bg-white');
            } else {
                navbar.classList.add('bg-light');
                navbar.classList.remove('bg-white');
            }
        });

        // PERBAIKAN: Logika Carousel Aparatur Desa yang Responsif
        document.addEventListener("DOMContentLoaded", function() {
            const aparaturItems = document.querySelectorAll("#aparaturData .aparatur-item");
            const carouselInner = document.getElementById("aparaturCarouselInner");

            function setupCarousel() {
                // Hapus item lama sebelum membuat yang baru
                carouselInner.innerHTML = '';
                
                let itemsPerSlide = 4;
                if (window.innerWidth < 768) {
                    itemsPerSlide = 1; // 1 item di layar HP
                } else if (window.innerWidth < 992) {
                    itemsPerSlide = 2; // 2 item di layar tablet
                }

                // Kelompokkan item ke dalam slide
                for (let i = 0; i < aparaturItems.length; i += itemsPerSlide) {
                    const slide = document.createElement("div");
                    slide.className = "carousel-item";
                    if (i === 0) {
                        slide.classList.add("active");
                    }

                    const row = document.createElement("div");
                    row.className = "row g-4"; // g-4 untuk memberi jarak antar kartu

                    // Ambil beberapa item untuk slide ini
                    const itemsForThisSlide = Array.from(aparaturItems).slice(i, i + itemsPerSlide);
                    
                    itemsForThisSlide.forEach(itemData => {
                        const col = document.createElement("div");
                        // Tentukan class kolom Bootstrap berdasarkan jumlah item per slide
                        if (itemsPerSlide === 4) col.className = "col-lg-3 col-md-6";
                        else if (itemsPerSlide === 2) col.className = "col-md-6";
                        else col.className = "col-12";
                        
                        // Buat struktur kartu di dalam kolom
                        col.innerHTML = `
                            <div class="aparatur-card bg-white">
                                ${itemData.innerHTML}
                            </div>
                        `;
                        row.appendChild(col);
                    });

                    slide.appendChild(row);
                    carouselInner.appendChild(slide);
                }
            }

            // Panggil fungsi saat halaman dimuat
            setupCarousel();

            // Panggil kembali fungsi saat ukuran window berubah
            window.addEventListener('resize', setupCarousel);
        });
    </script>
</body>

</html>
<?php //include 'includes/header.php'; 
?>
<?php //include 'includes/footer.php'; 
?>