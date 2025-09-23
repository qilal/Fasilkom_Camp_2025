document.addEventListener("DOMContentLoaded", function () {
    // --- Smooth scrolling untuk link navigasi (Tetap sama) ---
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            // --- Tambahan: handle active menu ---
            document.querySelectorAll('.navbar .nav-link').forEach(link => {
                link.classList.remove('active');
            });
            this.classList.add('active');
            // --- Smooth scroll ---
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
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

// Pastikan DOM sudah dimuat sepenuhnya
document.addEventListener("DOMContentLoaded", function () {

    // Pilih elemen navbar
    const customNavbar = document.querySelector('.navbar');

    // Fungsi untuk menangani perubahan style navbar saat scroll
    function handleNavbarScroll() {
        // Jika posisi scroll lebih besar dari 50px
        if (window.scrollY > 50) {
            // Hapus class 'navbar-transparent' dan tambahkan 'navbar-scrolled'
            customNavbar.classList.remove('navbar-transparent');
            customNavbar.classList.add('navbar-scrolled');
        } else {
            // Hapus class 'navbar-scrolled' dan tambahkan 'navbar-transparent'
            customNavbar.classList.remove('navbar-scrolled');
            customNavbar.classList.add('navbar-transparent');
        }
    }

    // Tambahkan event listener untuk event 'scroll' pada window
    window.addEventListener('scroll', handleNavbarScroll);

});