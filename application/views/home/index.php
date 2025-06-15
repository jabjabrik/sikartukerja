<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Profile Web SiKartuKerja</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/favicon/apple-touch-icon.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/favicon/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/favicon/favicon-16x16.png'); ?>">
    <link rel="manifest" href="<?= base_url('assets/favicon/site.webmanifest'); ?>">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/profile/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/profile/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/profile/vendor/aos/aos.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/profile/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/profile/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?= base_url('assets/profile/css/main.css') ?>" rel="stylesheet">
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container position-relative d-flex align-items-center">
            <a href="<?= base_url(); ?>" class="logo d-flex align-items-center me-auto">
                <h1 class="sitename">SiKartuKerja</h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#features">Visi Misi</a></li>
                    <li><a href="#contact">Kontak</a></li>
                    <li><a href="<?= base_url('auth'); ?>">Login</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main">
        <section id="hero" class="hero section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1>Selamat Datang Ke Website SiKartuKerja (Sistem Informasi Kartu Kuning dan Kerja)</h1>
                        <p>Dinas Perindustrian Dan Tenaga Kerja Kota Probolinggo</p>
                        <div class="d-flex">
                            <a href="#about" class="btn-get-started">Mulai Sekarang</a>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 hero-img">
                        <img src="<?= base_url('assets/profile/img/hero-img.png') ?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="about section">
            <div class="container" data-aos="fade-up">
                <div class="row gx-0">
                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="https://disnakerpmptsp.malangkota.go.id/wp-content/uploads/2021/06/PHOTO-2021-06-02-16-29-21-1-1024x577.jpg" class="img-fluid shadow rounded" alt="">
                        <!-- <img src="<?= base_url('assets/profile/img/about.jpg') ?>" class="img-fluid" alt=""> -->
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h2>Tentang Dinas Perindustrian Dan Tenaga Kerja.</h2>
                            <p>
                                Dinas Perindustrian dan Tenaga Kerja Kota Probolinggo merupakan penggabungan urusan perindustrian dan urusan ketenagakerjaan (yang sebelumnya digabung di dinas koperasi usaha kecil menengah perindustrian dan perdagangan kota probolinggo dan Dinas Penanaman modal PTSP dan Tenaga Kerja Kota Probolinggo), dan UPT Balai Pelatihan Kerja.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="features" class="features section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                        <h3>Visi</h3>
                        <p class="fst-italic">Mewujudkan pembangunan Kota Probolinggo yang inklusif, berdaya saing, dan berkelanjutan.</p>
                        <h3>Misi</h3>
                        <ul style="list-style-type: none;">
                            <li class="mt-1"><i class="bi bi-check2-all"></i> <span>Mewujudkan pembangunan ekonomi yang berdaya saing berbasis sektor potensial, sumber daya manusia dan kesejahteraan sosial yang berkualitas, tata kelola pemerintahan dan pelayanan publik yang baik.</span></li>
                            <li class="mt-1"><i class="bi bi-check2-all"></i> <span>Pembinaan Hubungan Industrial, Perlindungan dan Pengawasan Ketenagakerjaan serta Peningkatan Kesejahteraan Pekerja</span></li>
                            <li class="mt-1"><i class="bi bi-check2-all"></i> <span>Memberdayakan Transmigran dan Penduduk Sekitarnya menuju Masyarakat Mandiri dalam Rangka Menunjang Pembangunan Daerah</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="https://cdn.tadatodays.com/posts/2019/12/06/20191206072107.jpg" alt="" class="shadow rounded img-fluid">
                        <!-- <img src="<?= base_url('assets/profile/img/working-1.jpg') ?>" alt="" class="img-fluid"> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Lowongan Kerja</h2>
            </div>
            <div class="container">
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        <?php foreach ($loker as $item): ?>
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                                <div class="portfolio-content h-100">
                                    <img src="<?= base_url("file/$item->foto") ?>" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4>Kriteria : <?= $item->kriteria ?></h4>
                                        <p>Lulusan : <?= $item->lulusan ?></p>
                                        <a href="<?= base_url("file/$item->foto") ?>" title="<?= $item->keterangan ?>" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <div class="portfolio-content h-100">
                                <img src="<?= base_url('assets/profile/img/portfolio/product-1.jpg') ?>" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Product 1</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="<?= base_url('assets/profile/img/portfolio/product-1.jpg') ?>" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <div class="portfolio-content h-100">
                                <img src="<?= base_url('assets/profile/img/portfolio/branding-1.jpg') ?>" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Branding 1</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="<?= base_url('assets/profile/img/portfolio/branding-1.jpg') ?>" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                            <div class="portfolio-content h-100">
                                <img src="<?= base_url('assets/profile/img/portfolio/books-1.jpg') ?>" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Books 1</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="<?= base_url('assets/profile/img/portfolio/books-1.jpg') ?>" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="<?= base_url('assets/profile/img/portfolio/app-2.jpg') ?>" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="<?= base_url('assets/profile/img/portfolio/app-2.jpg') ?>" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <div class="portfolio-content h-100">
                                <img src="<?= base_url('assets/profile/img/portfolio/product-2.jpg') ?>" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Product 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="<?= base_url('assets/profile/img/portfolio/product-2.jpg') ?>" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <div class="portfolio-content h-100">
                                <img src="<?= base_url('assets/profile/img/portfolio/branding-2.jpg') ?>" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Branding 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="<?= base_url('assets/profile/img/portfolio/branding-2.jpg') ?>" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                            <div class="portfolio-content h-100">
                                <img src="<?= base_url('assets/profile/img/portfolio/books-2.jpg') ?>" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Books 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="<?= base_url('assets/profile/img/portfolio/books-2.jpg') ?>" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="<?= base_url('assets/profile/img/portfolio/app-3.jpg') ?>" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="<?= base_url('assets/profile/img/portfolio/app-3.jpg') ?>" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <div class="portfolio-content h-100">
                                <img src="<?= base_url('assets/profile/img/portfolio/product-3.jpg') ?>" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Product 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="<?= base_url('assets/profile/img/portfolio/product-3.jpg') ?>" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <div class="portfolio-content h-100">
                                <img src="<?= base_url('assets/profile/img/portfolio/branding-3.jpg') ?>" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Branding 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="<?= base_url('assets/profile/img/portfolio/branding-3.jpg') ?>" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                            <div class="portfolio-content h-100">
                                <img src="<?= base_url('assets/profile/img/portfolio/books-3.jpg') ?>" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Books 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="<?= base_url('assets/profile/img/portfolio/books-3.jpg') ?>" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <section id="services" class="services section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Tata Nilai</h2>
            </div>
            <div class="container">
                <div class="row gy-4">
                    <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-activity icon"></i></div>
                            <h4>Integritas</h4>
                            <p>Perilaku yang mencerminkan kesesuaian antara pikiran, perkataan dan perbuatan.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                            <h4>Profesionalisme</h4>
                            <p>Sigap melaksanakan tugas sesuai dengan kemampuan serta pengetahuan dengan bertanggung jawab dan kreatifitas tinggi.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                            <h4>Magni Dolores</h4>
                            <p>Tata peraturan, patuh pada pimpinan, serta menjaga kesatuan hati antara pimpinan dengan karyawan demi melindungi nilai dan mencapai suatu visi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="call-to-action" class="call-to-action section light-background">
            <img src="<?= base_url('assets/profile/img/cta-bg.jpg') ?>" alt="">
            <div class="container">
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-9 text-center text-xl-start">
                        <h3>Daftar Kartu Pencari Kerja/AK1</h3>
                        <p>Segera daftarkan diri Anda untuk mendapatkan Kartu AK-1 melalui aplikasi SiKartuKerja. Kartu ini akan sangat membantu Anda dalam proses pencarian kerja dan meningkatkan peluang Anda untuk mendapatkan pekerjaan.</p>
                    </div>
                    <div class="col-xl-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="<?= base_url('auth/register') ?>">Mendaftar</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kontak</h2>
                <p>Temukan jawaban atas pertanyaan Anda. Hubungi tim layanan kami.</p>
            </div><!-- End Section Title -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-12">
                        <div class="row gy-4 text-center">
                            <div class="col-md-6">
                                <div class="info-item " data-aos="fade" data-aos-delay="200">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Alamat</h3>
                                    <p>Jl. Slamet Riyadi No.20, Kanigaran, Kecamatan kanigaran, Kota Probolinggo</p>
                                    <p>Jawa Timur, Kode Pos 67213</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-item " data-aos="fade" data-aos-delay="400">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Kami</h3>
                                    <p>disperinnaker@probolinggokota.go.id</p>
                                    <br>
                                </div>
                            </div>
                            <div class="col-12">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3299.491256654405!2d113.20896777412014!3d-7.76726417704056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7ad75eed180c3%3A0xdad3e0ee3bd1aff4!2sDinas%20Tenaga%20Kerja%20Kota%20Probolinggo!5e1!3m2!1sid!2sid!4v1736405138618!5m2!1sid!2sid" class="shadow rounded" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer" class="footer light-background">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-md-6 footer-about">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span class="sitename">SiKartuKerja</span>
                        </a>
                        <div class="footer-contact pt-3">
                            <p>Jl. Slamet Riyadi No.20, Kanigaran, Kecamatan kanigaran</p>
                            <p>Kota Probolinggo, Jawa Timur</p>
                            <p>Kode Pos 67213</p>
                            <p class="mt-3"><strong>No Telepon:</strong> <span> (0335) 422 121</span></p>
                            <p><strong>Instagram:</strong> <span>@disnaskerja</span></p>
                            <p><strong>Email:</strong> <span>disperinnaker@probolinggokota.go.id</span></p>
                        </div>
                    </div>
                    <div class="col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#hero" class="active">Home</a></li>
                            <li><a href="#about">Tentang</a></li>
                            <li><a href="#features">Visi Misi</a></li>
                            <li><a href="#contact">Kontak</a></li>
                            <li><a href="<?= base_url('auth'); ?>">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright text-center">
            <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div>
                        © Copyright <strong><span>SiKartuKerja</span></strong>.
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/profile/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/profile/vendor/php-email-form/validate.js') ?>"></script>
    <script src="<?= base_url('assets/profile/vendor/aos/aos.js') ?>"></script>
    <script src="<?= base_url('assets/profile/vendor/glightbox/js/glightbox.min.js') ?>"></script>
    <script src="<?= base_url('assets/profile/vendor/imagesloaded/imagesloaded.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('assets/profile/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('assets/profile/vendor/swiper/swiper-bundle.min.js') ?>"></script>

    <!-- Main JS File -->
    <script src="<?= base_url('assets/profile/js/main.js') ?>"></script>
</body>

</html>