document.addEventListener("DOMContentLoaded", function () {
    // --- Smooth scrolling untuk link navigasi (Tetap sama) ---
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

    // --- Efek background pada Navbar saat di-scroll (Tetap sama) ---
    window.addEventListener('scroll', function () {
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