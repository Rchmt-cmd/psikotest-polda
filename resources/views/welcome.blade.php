<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }} - Landing Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">
        
        <!-- Vendor CSS Files -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/aos/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/remixicon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/style.css') }}">
        
        <link rel="stylesheet" href="{{ asset('assets/vendors/simple-datatables/style.css') }}">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
            

            <header id="header" class="header fixed-top">
                <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            
                    <a href="index.html" class="logo d-flex align-items-center">
                        <img src="{{ asset('assets/img/Lambang_Polda_Sulsel 1.png') }}" alt="logo-polda" lazy>
                        <span>POLDA SULSEL</span>
                    </a>
            
                    <nav id="navbar" class="navbar">
                        <ul>
                            <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                            <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                            <li><a class="nav-link scrollto" href="#alur-tes">Alur Tes</a></li>
                            <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
                            <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                            <li>
                                @if (Route::has('login'))
                                    @auth
                                    <a href="{{ url('/home') }}" class="getstarted scrollto">Home</a>
                                    @else
                                    <a href="{{ route('login') }}" class="getstarted scrollto">Log in</a>
                                    @endauth
                                @endif
                            </li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->
            
                </div>
            </header><!-- End Header -->

            <section id="hero" class="hero d-flex align-items-center">
            
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 d-flex flex-column justify-content-center">
                            <h1 data-aos="fade-up">Tes Psikologi Online</h1>
                            <h2 data-aos="fade-up" data-aos-delay="400">Kepolisian Daerah Sulawesi Selatan</h2>
                            <div data-aos="fade-up" data-aos-delay="600">
                                <div class="text-center text-lg-start">
                                    @if (Route::has('login'))
                                    @auth
                                    <a href="{{ url('/home') }}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">Home</a>
                                    @else
                                    <a href="{{ route('login') }}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                        <span>Login</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                    @endauth
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                            <img src="{{ asset('assets/img/hero-img-3.png') }}" class="img-fluid" loading="lazy" alt="hero-image" >
                        </div>
                    </div>
                </div>
            
            </section><!-- End Hero -->

            <main id="main">
                <!-- ======= About Section ======= -->
                <section id="about" class="about">
            
                    <div class="container" data-aos="fade-up">
                        <div class="row gx-0">
            
                            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                                <div class="content">
                                    <h3>Tentang Tes Psikologi Online</h3>
                                    <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat
                                        corrupti reprehenderit.</h2>
                                    <p>
                                        Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor
                                        consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam
                                        et est corrupti.
                                    </p>
                                    <div class="text-center text-lg-start">
                                        <a href="#"
                                            class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                            <span>Selengkapnya</span>
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
            
                            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                                <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid" alt="about-image" loading="lazy">
                            </div>
            
                        </div>
                    </div>
            
                </section><!-- End About Section -->
            
                <!-- ======= Values Section ======= -->
                <section id="alur-tes" class="alur-tes">
            
                    <div class="container" data-aos="fade-up">
            
                        <header class="section-header">
                            <h2>Alur Tes</h2>
                            <p>Berikut Alur Tes Psikologi Online</p>
                        </header>
            
                        <div class="row">
            
                            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="box">
                                    <img src="{{ asset('assets/img/undraw-values-1.png') }}" class="img-fluid" alt="value-1" loading="lazy">
                                    <h3>Ad cupiditate sed est odio</h3>
                                    <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.
                                    </p>
                                </div>
                            </div>
            
                            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                                <div class="box">
                                    <img src="{{ asset('assets/img/undraw-values-2.png') }}" class="img-fluid" alt="value-2" loading="lazy">
                                    <h3>Voluptatem voluptatum alias</h3>
                                    <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.
                                    </p>
                                </div>
                            </div>
            
                            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                                <div class="box">
                                    <img src="{{ asset('assets/img/undraw-values-3.png') }}" class="img-fluid" alt="value-3" loading="lazy">
                                    <h3>Fugit cupiditate alias nobis.</h3>
                                    <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.
                                    </p>
                                </div>
                            </div>
            
                        </div>
                    </div>
                    <div class="features container">
                        <div class="row feture-tabs" data-aos="fade-up">
                            <div class="col-lg-6">
                                <h3>Neque officiis dolore maiores et exercitationem quae est seda lidera pat claero</h3>
            
                                <!-- Tabs -->
                                <ul class="nav nav-pills mb-3">
                                    <li>
                                        <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Saepe fuga</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" data-bs-toggle="pill" href="#tab2">Voluptates</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" data-bs-toggle="pill" href="#tab3">Corrupti</a>
                                    </li>
                                </ul><!-- End Tabs -->
            
                                <!-- Tab Content -->
                                <div class="tab-content">
            
                                    <div class="tab-pane fade show active" id="tab1">
                                        <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita.
                                            Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="bi bi-check2"></i>
                                            <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                                        </div>
                                        <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi
                                            dolorum non eveniet magni quaerat nemo et.</p>
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="bi bi-check2"></i>
                                            <h4>Incidunt non veritatis illum ea ut nisi</h4>
                                        </div>
                                        <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta
                                            tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at.
                                            Dolorem quo tempora. Quia et perferendis.</p>
                                    </div><!-- End Tab 1 Content -->
            
                                    <div class="tab-pane fade show" id="tab2">
                                        <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita.
                                            Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="bi bi-check2"></i>
                                            <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                                        </div>
                                        <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi
                                            dolorum non eveniet magni quaerat nemo et.</p>
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="bi bi-check2"></i>
                                            <h4>Incidunt non veritatis illum ea ut nisi</h4>
                                        </div>
                                        <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta
                                            tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at.
                                            Dolorem quo tempora. Quia et perferendis.</p>
                                    </div><!-- End Tab 2 Content -->
            
                                    <div class="tab-pane fade show" id="tab3">
                                        <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita.
                                            Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="bi bi-check2"></i>
                                            <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                                        </div>
                                        <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi
                                            dolorum non eveniet magni quaerat nemo et.</p>
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="bi bi-check2"></i>
                                            <h4>Incidunt non veritatis illum ea ut nisi</h4>
                                        </div>
                                        <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta
                                            tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at.
                                            Dolorem quo tempora. Quia et perferendis.</p>
                                    </div><!-- End Tab 3 Content -->
            
                                </div>
            
                            </div>
            
                            <div class="col-lg-6">
                                <img src="{{ asset('assets/img/features-2.png') }}" class="img-fluid" alt="feature" loading="lazy">
                            </div>
            
                        </div>
                    </div>
            
                </section><!-- End Values Section -->
            
                <!-- ======= F.A.Q Section ======= -->
                <section id="faq" class="faq">
            
                    <div class="container" data-aos="fade-up">
            
                        <header class="section-header">
                            <h2>F.A.Q</h2>
                            <p>Frequently Asked Questions</p>
                        </header>
            
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- F.A.Q List 1-->
                                <div class="accordion accordion-flush" id="faqlist1">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq-content-1">
                                                Non consectetur a erat nam at lectus urna duis?
                                            </button>
                                        </h2>
                                        <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                            <div class="accordion-body">
                                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                                laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor
                                                rhoncus dolor purus non.
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq-content-2">
                                                Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                                            </button>
                                        </h2>
                                        <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                            <div class="accordion-body">
                                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                                interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                                scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                                Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq-content-3">
                                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                                            </button>
                                        </h2>
                                        <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                            <div class="accordion-body">
                                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                                Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                                                suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                                                convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                            </div>
                                        </div>
                                    </div>
            
                                </div>
                            </div>
            
                            <div class="col-lg-6">
            
                                <!-- F.A.Q List 2-->
                                <div class="accordion accordion-flush" id="faqlist2">
            
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq2-content-1">
                                                Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                                            </button>
                                        </h2>
                                        <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                            <div class="accordion-body">
                                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                                interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                                scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                                Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq2-content-2">
                                                Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                                            </button>
                                        </h2>
                                        <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                            <div class="accordion-body">
                                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim
                                                suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan.
                                                Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit
                                                turpis cursus in
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq2-content-3">
                                                Varius vel pharetra vel turpis nunc eget lorem dolor?
                                            </button>
                                        </h2>
                                        <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                            <div class="accordion-body">
                                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies
                                                leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet.
                                                Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu
                                                scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla
                                                phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                                            </div>
                                        </div>
                                    </div>
            
                                </div>
                            </div>
            
                        </div>
            
                    </div>
            
                </section><!-- End F.A.Q Section -->
            
                <!-- ======= Contact Section ======= -->
                <section id="contact" class="contact">
            
                    <div class="container" data-aos="fade-up">
            
                        <header class="section-header">
                            <h2>Kontak</h2>
                            <p>Kontak Kami</p>
                        </header>
            
                        <div class="row gy-4">
            
                            <div class="col-lg-6">
            
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <i class="bi bi-geo-alt"></i>
                                            <h3>Alamat</h3>
                                            <p>A108 Adam Street,<br>New York, NY 535022</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <i class="bi bi-telephone"></i>
                                            <h3>Telepon Kami</h3>
                                            <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <i class="bi bi-envelope"></i>
                                            <h3>Email Kami</h3>
                                            <p>info@example.com<br>contact@example.com</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <i class="bi bi-clock"></i>
                                            <h3>Jam Kerja</h3>
                                            <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                                        </div>
                                    </div>
                                </div>
            
                            </div>
            
                            <div class="col-lg-6">
                                <form action="" method="post" class="php-email-form">
                                    <div class="row gy-4">
            
                                        <div class="col-md-6">
                                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                        </div>
            
                                        <div class="col-md-6 ">
                                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                        </div>
            
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                                        </div>
            
                                        <div class="col-md-12">
                                            <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                                required></textarea>
                                        </div>
            
                                        <div class="col-md-12 text-center">
                                            <div class="loading">Loading</div>
                                            <div class="error-message"></div>
                                            <div class="sent-message">Your message has been sent. Thank you!</div>
            
                                            <button type="submit">Send Message</button>
                                        </div>
            
                                    </div>
                                </form>
            
                            </div>
            
                        </div>
            
                    </div>
            
                </section><!-- End Contact Section -->
            
            </main><!-- End #main -->

            <footer id="footer" class="footer">
                <div class="footer-top">
                    <div class="container">
                        <div class="row gy-4">
                            <div class="col-lg-5 col-md-12 footer-info">
                                <a href="{{ route('landing-page') }}" class="logo d-flex align-items-center">
                                    <img src="{{ asset('assets/img/Lambang_Polda_Sulsel 1.png') }}" alt="logo-polda" loading="lazy">
                                    <span>POLDA SULSEL</span>
                                </a>
                                <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                                    valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                                <div class="social-links mt-3">
                                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
            
                            <div class="col-lg-6 col-md-12 footer-contact text-center text-md-start">
                                <h4>Contact Us</h4>
                                <p>
                                    A108 Adam Street <br>
                                    New York, NY 535022<br>
                                    United States <br><br>
                                    <strong>Phone:</strong> +1 5589 55488 55<br>
                                    <strong>Email:</strong> info@example.com<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="container">
                    <div class="copyright">
                        &copy; Copyright <strong><span>Polda Sulsel</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        Designed by <a href="https://linktr.ee/ikattekreatif">Ikatte Kreatif</a>
                    </div>
                </div>
            </footer><!-- End Footer -->
            
            <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                    class="bi bi-arrow-up-short"></i></a>
            <!-- Vendor JS Files -->
            <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
            <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
            <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
            <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
            <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
            <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
            <!-- Template Main JS File -->
            <script src="{{ asset('assets/vendor/main.js') }}"></script>
    </body>
</html>
