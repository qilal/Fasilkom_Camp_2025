<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Kebontunggul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #28a745;
            --secondary-color: #34495e;
        }

        body {
            padding-top: 70px;
            /* Memberi ruang untuk navbar fixed-top */
        }

        .navbar-brand img {
            height: 40px;
        }

        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url('img/R.jpeg');
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

        .aparatur-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto 15px;
            object-fit: cover;
        }

        /* --- CSS SLIDER APARATUR (DITAMBAHKAN & DISESUAIKAN) --- */
        .slider-wrapper {
            position: relative;
            padding-inline: 30px; /* Memberi ruang agar tombol tidak terlalu menempel ke tepi */
        }

        .aparatur-container {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding-block: 20px;
            gap: 1.5rem;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .aparatur-container::-webkit-scrollbar {
            display: none;
        }

        .aparatur-card {
            flex: 0 0 240px; /* Lebar tetap 240px, tidak membesar atau mengecil */
            background-color: white;
            text-align: center;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s;
        }
        
        .aparatur-card:hover {
            transform: translateY(-10px);
        }

        .slider-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            background-color: rgba(40, 167, 69, 0.85); /* Menggunakan warna --primary-color */
            color: white;
            border: none;
            border-radius: 15px;
            width: 50px;
            height: 90px;
            font-size: 1.8rem;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .slider-btn:hover {
            background-color: rgba(33, 136, 56, 1);
        }

        .prev-btn {
            left: 0px;
        }

        .next-btn {
            right: 0px;
        }
        /* --- AKHIR DARI CSS SLIDER --- */

        .stats-section {
            background-color: var(--primary-color);
            color: white;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
        }

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
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
        <div class="container">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // --- Smooth scrolling untuk link navigasi (Tetap sama) ---
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
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

        // --- Efek background pada Navbar saat di-scroll (Tetap sama) ---
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('bg-white', 'shadow');
            } else {
                navbar.classList.remove('bg-white', 'shadow');
            }
        });

        // --- JAVASCRIPT SLIDER APARATUR (KODE BARU DENGAN AUTOPLAY) ---
        const sliderWrapper = document.querySelector('.slider-wrapper'); // Ambil wrapper utama
        const slider = document.getElementById('aparaturSlider');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        
        const scrollAmount = slider.querySelector('.aparatur-card').offsetWidth + 24; // Lebar 1 card + gap
        let autoScrollInterval;

        // Fungsi untuk menggeser ke slide berikutnya
        const slideNext = () => {
            // Cek jika sudah di ujung slider
            // slider.scrollWidth = total lebar konten
            // slider.clientWidth = lebar area yang terlihat
            // slider.scrollLeft = posisi scroll saat ini
            if (slider.scrollLeft >= (slider.scrollWidth - slider.clientWidth - 1)) {
                // Jika sudah di akhir, kembali ke awal
                slider.scrollLeft = 0;
            } else {
                // Jika belum, geser ke kanan
                slider.scrollLeft += scrollAmount;
            }
        };
        
        // Fungsi untuk memulai auto-scroll
        const startAutoScroll = () => {
            // Hapus interval sebelumnya untuk menghindari duplikasi
            clearInterval(autoScrollInterval); 
            autoScrollInterval = setInterval(slideNext, 2500); // Geser setiap 2,5 detik
        };
        
        // Fungsi untuk menghentikan auto-scroll
        const stopAutoScroll = () => {
            clearInterval(autoScrollInterval);
        };

        // Event listener untuk tombol Next
        nextBtn.addEventListener('click', () => {
            slideNext();
        });

        // Event listener untuk tombol Prev
        prevBtn.addEventListener('click', () => {
            slider.scrollLeft -= scrollAmount;
        });
        
        // Hentikan auto-scroll saat mouse masuk ke area slider
        sliderWrapper.addEventListener('mouseenter', stopAutoScroll);
        
        // Mulai lagi auto-scroll saat mouse keluar dari area slider
        sliderWrapper.addEventListener('mouseleave', startAutoScroll);

        // Mulai auto-scroll saat halaman pertama kali dimuat
        startAutoScroll();
        
    });
</script>
</body>

</html> 
<?php //include 'includes/header.php'; 
?>
<?php //include 'includes/footer.php'; 
?>