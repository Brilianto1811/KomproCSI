@extends('layouts.layout2')

@php
    $bodyClass = 'onepage';
@endphp


@section('content')
    <!-- tmp header area  -->
    <header class="header-solid header--sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-solid-main-wrapper">
                        <div class="logo-area-start">
                            <a class="logo" href="{{ route('onepage-eight') }}">
                                <img src="{{ asset('assets/images/logo/csi_logo2.png') }}" alt="Corporate_business_logo"
                                    width="75" height="50">
                            </a>
                        </div>

                        <div class="header-nav main-nav-one">
                            <nav>
                                <ul class="parent-nav">
                                    <li>
                                        <a class="nav-link " href="#home">
                                            <span class="rolling-text">HOME</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#service">
                                            <span class="rolling-text">SERVICES</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#about">
                                            <span class="rolling-text">ABOUT</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#portfolio">
                                            <span class="rolling-text">PORTFOLIO</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#contact">
                                            <span class="rolling-text">CONTACT</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="actions-area">
                            {{-- <!-- Tombol Login -->
                            <a href="{{ route('login') }}" class="tmp-btn btn-primary small-btn"
                                style="position: absolute; right: 20px;">
                                Login
                            </a> --}}
                            <!-- Tombol Side Collaps -->
                            <div class="tmp-side-collups-area" id="side-collups">
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect y="14" width="20" height="2" fill="#fff"></rect>
                                    <rect y="7" width="20" height="2" fill="#fff"></rect>
                                    <rect width="20" height="2" fill="#fff"></rect>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- tmp header area end -->
    <x-sidebar />

    <!-- tmp banner area -->
    <section class="section-banner-area-start tmp-section-gapTop pt_sm--10 pb--40" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-xl-1 order-md-2 order-sm-2 order-2 pl_md--30 pl_sm--30">
                    <div class="banner-company-area-main__wrapper">
                        <span class="pre-title">
                            Business, Environmental, and Social Consulting Experts
                        </span>
                        <h1 class="title">PT Catur Samasta Indonusa</h1>
                        <p style="text-align: justify">PT Catur Samasta Indonusa adalah perusahaan konsultan yang bergerak
                            di bidang manajemen,
                            lingkungan, dan sosial. Kami menyediakan berbagai layanan seperti feasibility study, tata ruang,
                            survei potensi hutan, social impact assessment, serta kajian sosial ekonomi budaya masyarakat.
                            Dengan tim profesional dan berpengalaman, kami berkomitmen memberikan solusi yang inovatif,
                            terpercaya, dan berbasis data untuk mendukung pengelolaan sumber daya alam yang berkelanjutan,
                            bertanggung jawab, serta berdampak positif bagi lingkungan dan masyarakat. Bidang-bidang yang
                            kami tangani antara lain Kehutanan, Pertanian, Perkebunan, Pertambangan, Perikanan, dan bidang
                            lainnya yang relevan.</p>
                        <div class="button-area-wrapper">
                            <a href="#contact" class="tmp-btn btn-success">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-xl-2 order-md-1 order-sm-1 order-1 mb_md--30 mb_sm--30">
                    <div class="frame-image-about-company">
                        <img src="{{ asset('assets/images/logo/wp1.jpg') }}"src="{{ asset('assets/images/logo/wp1.jpg') }}"
                            alt="Banner Images">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tmp banner area end -->

    <div class="best-service-we-provide pt--60 tmp-section-gapBottom" id="service">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service feature-service">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/logo_konsultasi.png') }}"src="{{ asset('assets/images/services/logo_konsultasi.png') }}"
                                alt="corporate_Business_Services_agency" width="150" height="50">
                        </div>
                        <div class="content">
                            <h2 class="title">Konsultasi Multidisiplin Profesional dan Kredibel</h2>
                            <p class="description">
                                Menyediakan layanan jasa konsultasi multidisiplin yang mengedepankan profesionalisme dan
                                kredibilitas.
                            </p>
                            <div class="three--dot">
                                <div class="dot dot-one"></div>
                                <div class="dot dot-two"></div>
                                <div class="dot dot-two"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service feature-service">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/logo_solusi.png') }}"src="{{ asset('assets/images/services/logo_solusi.png') }}"
                                alt="corporate_Business_Services_agency" width="150" height="50">

                        </div>
                        <div class="content">
                            <h2 class="title">Solusi Terbaik dan Menyeluruh untuk Pelanggan</h2>
                            <p class="description">
                                Menjadi rekanan yang memberikan solusi terbaik dan menyeluruh kepada pelanggan/pengguna.
                            </p>
                            <div class="three--dot">
                                <div class="dot dot-one"></div>
                                <div class="dot dot-two"></div>
                                <div class="dot dot-two"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="350" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service feature-service">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/logo_kepuasan2.png') }}"src="{{ asset('assets/images/services/logo_kepuasan.png') }}"
                                alt="corporate_Business_Services_Agency" width="150" height="50">

                        </div>
                        <div class="content">
                            <h2 class="title">Kepuasan Pelanggan dengan Kualitas, Kecepatan, dan Ketepatan Waktu</h2>
                            <p class="description">
                                Memenuhi kepuasan pelanggan dari segi kualitas, cepat, dan tepat waktu.
                            </p>
                            <div class="three--dot">
                                <div class="dot dot-one"></div>
                                <div class="dot dot-two"></div>
                                <div class="dot dot-two"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="450" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service feature-service">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/logo_esl.jpg') }}"src="{{ asset('assets/images/services/logo_esl.jpg') }}"
                                alt="corporate_Business_Services_agency" width="100" height="50">

                        </div>
                        <div class="content">
                            <h2 class="title">Mitra yang Mengedepankan Aspek Ekonomi, Sosial, dan Lingkungan</h2>
                            <p class="description">
                                Berkomitmen untuk menjadi mitra yang mengedepankan aspek ekonomi, sosial, dan lingkungan.
                            </p>
                            <div class="three--dot">
                                <div class="dot dot-one"></div>
                                <div class="dot dot-two"></div>
                                <div class="dot dot-two"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- short discription about company area  -->
    <div class="short-discription-area tmp-section-gapBottom">
        <div class="container  plr_sm--15">
            <div class="row">
                <div class="col-lg-12">
                    <div class="short-discription-between-area">
                        <h2 class="title">
                            Strategi kami yaitu Menggalang kerjasama dan membangun jaringan kerja/networking dengan berbagai
                            pihak sebagai sebuah kemitraan saling menguntungkan dan berkelanjutan.
                        </h2>
                        <div class="discription-area">
                            <p class="disc">
                                Meningkatkan kapasitas sumber daya manusia yang ada untuk menjaga kualitas dan membangun
                                kredibilitas. dan meningkatkan sarana prasarana sesuai dengan kebutuhan dalam rangka
                                mendukung peningkatan kinerja perusahaan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about company wrapper -->
    <section class="about-company-area tmp-section-gapBottom" id="about">
        <div class="row align-items-center  plr_sm--15 plr_md--15">
            <div class="col-lg-4 offset-lg-2 mb_md--50 mb_sm--30">
                <div class="split-inner">
                    <h2 class="title sal-animate mb--40" data-sal="slide-up" data-sal-duration="700"
                        data-sal-delay="100">
                        Apa itu PT. CSI?</h2>
                    <p class="description sal-animate mb--25" data-sal="slide-up" data-sal-duration="700"
                        data-sal-delay="300">PT Catur Samasta Indonusa adalah salah satu perusahaan yang bergerak dalam
                        bidang layanan jasa konsultasi, terkait dengan kajian-kajian tentang bisnis-manajemen dan lingkungan
                        hidup. jenis jenis layanan jasa konsultasi yang dimaksud antara lain, feasibility study, perencanaan
                        wilayah dan tata ruang, berbagai macam survey dan pemetaan, design engineering penilain dan kajian
                        lingkungan. </p>
                    <p class="description sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                        PT. Catur Samasta Indonusa memiliki tenaga tenaga ahli yang berpengalaman dibidangnya masing-masing,
                        diantaranya:</p>
                    <ul class="split-list sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="20">
                        <li>- Bidang konservasi SDAH</li>
                        <li>- Biodiversity dan Bioekologi</li>
                        <li>- Jasa Jasa Lingkungan</li>
                        <li>- Tata Ruang</li>
                        <li>- Hidrologi rehabilitasi dan bidang sosial ekonomi budaya masyarakat</li>
                    </ul>
                    <div class="view-more-button mt--35 sal-animate d-flex" data-sal="slide-up" data-sal-duration="700"
                        data-sal-delay="300">
                        <a class="tmp-btn btn-primary" href="{{ route('contact') }}">Contact With Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="thumbnail image-right-content">
                    <img src="{{ asset('assets/images/logo/wp1.jpg') }}"src="{{ asset('assets/images/logo/wp1.jpg') }}"
                        alt="split Images">
                </div>
            </div>
        </div>
    </section>
    <!-- about company wrapper end -->


    <!-- tmp counterup section area start -->
    <div class="tmp-section-gapBottom tmp-counterup-area">
        <div class="container">
            <div class="row g-5 counter_animation">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 counter__anim">
                    <div class="single-counterup-area-agency">
                        <div class="icon">
                            <img src="{{ asset('assets/images/counter/05.svg') }}"src="{{ asset('assets/images/counter/05.svg') }}"
                                alt="agency-service">
                        </div>
                        <div class="information">
                            <div class="counter-details">
                                <h2 class="title"><span class="counter animated fadeInDownBig">858</span>+</h2>
                                <p class="disc">Successful Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 counter__anim">
                    <div class="single-counterup-area-agency">
                        <div class="icon">
                            <img src="{{ asset('assets/images/counter/08.svg') }}"src="{{ asset('assets/images/counter/08.svg') }}"
                                alt="agency-service">
                        </div>
                        <div class="information">
                            <div class="counter-details">
                                <h2 class="title"><span class="counter animated fadeInDownBig">858</span>k+</h2>
                                <p class="disc">Happy Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 counter__anim">
                    <div class="single-counterup-area-agency">
                        <div class="icon">
                            <img src="{{ asset('assets/images/counter/06.svg') }}"src="{{ asset('assets/images/counter/06.svg') }}"
                                alt="agency-service">
                        </div>
                        <div class="information">
                            <div class="counter-details">
                                <h2 class="title"><span class="counter animated fadeInDownBig">758</span>+</h2>
                                <p class="disc">Media Active</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 counter__anim">
                    <div class="single-counterup-area-agency">
                        <div class="icon">
                            <img src="{{ asset('assets/images/counter/07.svg') }}"src="{{ asset('assets/images/counter/07.svg') }}"
                                alt="agency-service">
                        </div>
                        <div class="information">
                            <div class="counter-details">
                                <h2 class="title"><span class="counter animated fadeInDownBig">258</span>+</h2>
                                <p class="disc">Skill Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tmp counterup section area end -->

    <div class="col-lg-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" style="margin-top: -50px;">
        <div class="section-head">
            <div class="section-sub-title center-title">
                <span>OUR CLIENTS AND PARTNERS</span>
            </div>
            <h2 class="title split-collab">Meet Our Valued Clients and Partners</h2>
        </div>
    </div>

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <img src="{{ asset('assets/images/logo/logo_antam.png') }}"src="{{ asset('assets/images/logo/logo_antam.png') }}"
                    alt="Logo 1">
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide">
                <img src="{{ asset('assets/images/logo/logo_ipb.png') }}"src="{{ asset('assets/images/logo/logo_ipb.png') }}"
                    alt="Logo 2">
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide">
                <img src="{{ asset('assets/images/logo/logo_genting.png') }}"src="{{ asset('assets/images/logo/logo_genting.png') }}"
                    alt="Logo 3">
            </div>
            <!-- Slide 4 -->
            <div class="swiper-slide">
                <img src="{{ asset('assets/images/logo/logo_asj.png') }}"src="{{ asset('assets/images/logo/logo_asj.png') }}"
                    alt="Logo 4">
            </div>
            <!-- Slide 5 -->
            <div class="swiper-slide">
                <img src="{{ asset('assets/images/logo/logo_fsl.png') }}"src="{{ asset('assets/images/logo/logo_fsl.png') }}"
                    alt="Logo 5">
            </div>
            <!-- Slide 6 -->
            <div class="swiper-slide">
                <img src="{{ asset('assets/images/logo/logo_golden.jpeg') }}"src="{{ asset('assets/images/logo/logo_golden.jpeg') }}"
                    alt="Logo 6">
            </div>
            <!-- Slide 7 -->
            <div class="swiper-slide">
                <img src="{{ asset('assets/images/logo/logo_inhutani.png') }}"src="{{ asset('assets/images/logo/logo_inhutani.png') }}"
                    alt="Logo 7">
            </div>
            <!-- Slide 8 -->
            <div class="swiper-slide">
                <img src="{{ asset('assets/images/logo/logo_julong.png') }}"src="{{ asset('assets/images/logo/logo_julong.png') }}"
                    alt="Logo 8">
            </div>
            <!-- Slide 9 -->
            <div class="swiper-slide">
                <img src="{{ asset('assets/images/logo/logo_kjg.png') }}"src="{{ asset('assets/images/logo/logo_kjg.png') }}"
                    alt="Logo 9">
            </div>
            <!-- Slide 10 -->
            <div class="swiper-slide">
                <img src="{{ asset('assets/images/logo/logo_klhk.png') }}"src="{{ asset('assets/images/logo/logo_klhk.png') }}"
                    alt="Logo 10">
            </div>
            <!-- Slide 11 -->
            <div class="swiper-slide">
                <img src="{{ asset('assets/images/logo/logo_ksk.png') }}"src="{{ asset('assets/images/logo/logo_ksk.png') }}"
                    alt="Logo 11">
            </div>
            <!-- Slide 12 -->
            <div class="swiper-slide">
                <img src="{{ asset('assets/images/logo/logo_mcai.png') }}"src="{{ asset('assets/images/logo/logo_mcai.png') }}"
                    alt="Logo 12">
            </div>
            <!-- Slide 13 -->
            <div class="swiper-slide">
                <img src="{{ asset('assets/images/logo/logo_msl.jpeg') }}"src="{{ asset('assets/images/logo/logo_msl.jpeg') }}"
                    alt="Logo 13">
            </div>
            <!-- Slide 14 -->
            <div class="swiper-slide">
                <img src="{{ asset('assets/images/logo/logo_pertamina.png') }}"src="{{ asset('assets/images/logo/logo_pertamina.png') }}"
                    alt="Logo 14">
            </div>
            <!-- Slide 15 -->
            <div class="swiper-slide">
                <img src="{{ asset('assets/images/logo/logo_pupuk.png') }}"src="{{ asset('assets/images/logo/logo_pupuk.png') }}"
                    alt="Logo 15">
            </div>
            <!-- Slide 16 -->
            <div class="swiper-slide">
                <img src="{{ asset('assets/images/logo/logo_RNI.png') }}"src="{{ asset('assets/images/logo/logo_RNI.png') }}"
                    alt="Logo 16">
            </div>
            <!-- Slide 16 -->
            <div class="swiper-slide">
                <img src="{{ asset('assets/images/logo/logo_sel.png') }}"src="{{ asset('assets/images/logo/logo_sel.png') }}"
                    alt="Logo 16">
            </div>
            <!-- Add more slides as needed -->
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- rmp portfolio mesonary area -->
    <div class="tmp-portfolio-area tmp-section-gapBottom" id="portfolio">
        <div class="tmp-product-area tmp-section-gapTop bg-product-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-head color-white">
                            <div class="section-sub-title center-title" style="margin-top: -100px">
                                <span class="subtitle">OUR PORTFOLIO</span>
                            </div>
                            <h2 class="title split-collab">Let's Check Our Best Works </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-full">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- product swiper area start -->
                        <div class="product-swiper-area-one">

                            <div class="swiper mySwiper-portfolio-1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- single product area start -->
                                        <div class="signle-product-start"
                                            data-tmp-cursor="lg text-secondary transparent fw-bold"
                                            data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                            <a class="thumbnail">
                                                <img src="{{ asset('assets/images/portfolio/portfolio-1.png') }}"src="{{ asset('assets/images/services/section-custom-menubar.png') }}"
                                                    alt="corporate_business">
                                            </a>
                                            <div class="inner-content">
                                                <a>
                                                    <h5 class="title">Corporate Design</h5>
                                                </a>
                                                <span class="designation">Financial advisory</span>
                                                <div class="tag"></div>
                                            </div>
                                        </div>
                                        <!-- single product area end -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- single product area start -->
                                        <div class="signle-product-start"
                                            data-tmp-cursor="lg text-secondary transparent fw-bold"
                                            data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                            <a class="thumbnail">
                                                <img src="{{ asset('assets/images/portfolio/portfolio-2.png') }}"src="{{ asset('assets/images/services/section-custom-menubar.png') }}"
                                                    alt="corporate_business">
                                            </a>
                                            <div class="inner-content">
                                                <a>
                                                    <h5 class="title">Executive Design Kit</h5>
                                                </a>
                                                <span class="designation">Financial advisory</span>
                                                <div class="tag"></div>
                                            </div>
                                        </div>
                                        <!-- single product area end -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- single product area start -->
                                        <div class="signle-product-start"
                                            data-tmp-cursor="lg text-secondary transparent fw-bold"
                                            data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                            <a class="thumbnail">
                                                <img src="{{ asset('assets/images/portfolio/portfolio-3.png') }}"src="{{ asset('assets/images/services/section-custom-menubar.png') }}"
                                                    alt="corporate_business">
                                            </a>
                                            <div class="inner-content">
                                                <a>
                                                    <h5 class="title">Business Theme Pack</h5>
                                                </a>
                                                <span class="designation">Financial advisory</span>
                                                <div class="tag"></div>
                                            </div>
                                        </div>
                                        <!-- single product area end -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- single product area start -->
                                        <div class="signle-product-start"
                                            data-tmp-cursor="lg text-secondary transparent fw-bold"
                                            data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                            <a class="thumbnail">
                                                <img src="{{ asset('assets/images/portfolio/portfolio-4.png') }}"src="{{ asset('assets/images/services/section-custom-menubar.png') }}"
                                                    alt="corporate_business">
                                            </a>
                                            <div class="inner-content">
                                                <a>
                                                    <h5 class="title">Executive Layout Set</h5>
                                                </a>
                                                <span class="designation">Financial advisory</span>
                                                <div class="tag"></div>
                                            </div>
                                        </div>
                                        <!-- single product area end -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- single product area start -->
                                        <div class="signle-product-start"
                                            data-tmp-cursor="lg text-secondary transparent fw-bold"
                                            data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                            <a class="thumbnail">
                                                <img src="{{ asset('assets/images/portfolio/portfolio-5.png') }}"src="{{ asset('assets/images/services/section-custom-menubar.png') }}"
                                                    alt="corporate_business">
                                            </a>
                                            <div class="inner-content">
                                                <a>
                                                    <h5 class="title">Professional Design</h5>
                                                </a>
                                                <span class="designation">Financial advisory</span>
                                                <div class="tag"></div>
                                            </div>
                                        </div>
                                        <!-- single product area end -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- single product area start -->
                                        <div class="signle-product-start"
                                            data-tmp-cursor="lg text-secondary transparent fw-bold"
                                            data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                            <a class="thumbnail">
                                                <img src="{{ asset('assets/images/portfolio/portfolio-6.png') }}"src="{{ asset('assets/images/services/section-custom-menubar.png') }}"
                                                    alt="corporate_business">
                                            </a>
                                            <div class="inner-content">
                                                <a>
                                                    <h5 class="title">Business Layout Library</h5>
                                                </a>
                                                <span class="designation">Financial advisory</span>
                                                <div class="tag"></div>
                                            </div>
                                        </div>
                                        <!-- single product area end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product swiper area end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rmp portfolio mesonary area end -->

    <!-- tmp brand section start -->
    <div class="tmp-brand-section tmp-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-main-wrapper-company">
                        <div class="tmp-brand-section-start">
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/01.png') }}"src="{{ asset('assets/images/brand/01.png') }}"
                                    alt="brand">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/02.png') }}"src="{{ asset('assets/images/brand/02.png') }}"
                                    alt="brand">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/03.png') }}"src="{{ asset('assets/images/brand/03.png') }}"
                                    alt="brand">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/08.png') }}"src="{{ asset('assets/images/brand/08.png') }}"
                                    alt="brand">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/05.png') }}"src="{{ asset('assets/images/brand/05.png') }}"
                                    alt="brand">
                            </a>
                        </div>
                        <div class="tmp-brand-section-start">
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/06.png') }}"src="{{ asset('assets/images/brand/06.png') }}"
                                    alt="brand">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/07.png') }}"src="{{ asset('assets/images/brand/07.png') }}"
                                    alt="brand">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/08.png') }}"src="{{ asset('assets/images/brand/08.png') }}"
                                    alt="brand">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/09.png') }}"src="{{ asset('assets/images/brand/09.png') }}"
                                    alt="brand">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/images/brand/10.png') }}"src="{{ asset('assets/images/brand/10.png') }}"
                                    alt="brand">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- tmp brand section end -->

    <!-- tmp contact area -->
    <div class="contact-area tmp-section-gapBottom" id="contact">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="contact-inner">
                        <div class="section-head section-head-one-side text-align-left">
                            <span class="title">Contact Us</span>
                            <p class="description">
                                Jika Anda memiliki pertanyaan atau membutuhkan informasi lebih lanjut, jangan ragu untuk
                                menghubungi kami. Kami siap membantu Anda dengan segala kebutuhan Anda.
                            </p>
                        </div>

                        <ul class="ft-link ft-link-style-three">
                            <li>
                                <div class="single-contact background-transparent">
                                    <div class="icon">
                                        <i class="fa-light fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <span>Call Us</span>
                                        <a class="contact-here" href="tel:+4733378901">0251 - 7588409</a>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class="single-contact background-transparent">
                                    <div class="icon">
                                        <i class="fa-solid fa-envelope-open-text"></i>
                                    </div>

                                    <div class="content">
                                        <span>E-mail</span>
                                        <a class="contact-here"
                                            href="mailto:csi_samasta@yahoo.com">csi_samasta@yahoo.com</a>
                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="single-contact background-transparent">
                                    <div class="icon">
                                        <i class="fa-regular fa-map-location-dot"></i>
                                    </div>
                                    <div class="content">
                                        <span>Address</span>
                                        <a class="contact-here" href="#">Green View Residence Blok E No.4, Jl. CIFOR
                                            Situgede Bogor 16115 - Jawa Barat Indonesia</a>
                                    </div>
                                </div>
                            </li>

                        </ul>

                        <div class="tmp-tag-list tag-list-one">
                            <a class="tag-list" href="#">Facebook</a>
                            <a class="tag-list" href="#">Twitter</a>
                            <a class="tag-list" href="#">Linkedin</a>
                            <a class="tag-list" href="#">Skype</a>
                            <a class="tag-list" href="#">Pinterest</a>
                        </div>



                    </div>

                </div>
                <div class="col-lg-7">

                    <div class="contact-inner">
                        <div class="section-head section-head-one-side text-align-left">
                            <span class="title">GET IN TOUCH</span>
                            <p class="description">
                                Kami siap membantu Anda! Jika Anda memiliki pertanyaan atau ingin berdiskusi lebih lanjut,
                                silakan hubungi kami melalui informasi yang tersedia di bawah ini. Kami akan segera
                                merespons.
                            </p>
                        </div>
                        <div class="contact-form style-two">
                            <div id="form-messages"></div>
                            <form id="contact-form" action="mailer.php" method="post">
                                <div class="contact-form-wrapper row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" name="name" placeholder="Name"
                                                id="contact-name" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" name="contact-phone" placeholder="Phone"
                                                type="text">
                                        </div>
                                    </div>


                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" name="email" placeholder="Email" type="email"
                                                required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" type="text" id="subject"
                                                placeholder="Subject" name="subject">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="input-field" placeholder="How can we help" name="message" id="contact-message"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-submit-group">
                                            <button name="submit" class="tmp-btn btn-primary" type="submit"
                                                id="submit">
                                                Submit Now
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- tmp contact area -->

    <!-- Start Footer Area  -->
    <footer class="footer-area footer-style-one-wrapper bg-color-footer bg-image-none tmp-section-gap">
        <div class="container">
            <div class="footer-main footer-style-one mt--0">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-wrapper border-right mr--20">
                            <div class="logo">
                                <a href="{{ route('onepage-eight') }}">
                                    <img src="{{ asset('assets/images/logo/csi_logo2.png') }}"src="{{ asset('assets/images/logo/csi_logo2.png') }}"
                                        alt="logo">
                                </a>
                            </div>

                            <p class="description">
                                PT Catur Samasta Indonusa adalah perusahaan konsultan yang bergerak
                                di bidang manajemen,
                                lingkungan, dan sosial. Kami menyediakan berbagai layanan seperti feasibility study, tata
                                ruang,
                                survei potensi hutan, social impact assessment, serta kajian sosial ekonomi budaya
                                masyarakat.
                                Dengan tim profesional dan berpengalaman, kami berkomitmen memberikan solusi yang inovatif,
                                terpercaya, dan berbasis data untuk mendukung pengelolaan sumber daya alam yang
                                berkelanjutan,
                                bertanggung jawab, serta berdampak positif bagi lingkungan dan masyarakat. Bidang-bidang
                                yang
                                kami tangani antara lain Kehutanan, Pertanian, Perkebunan, Pertambangan, Perikanan, dan
                                bidang
                                lainnya yang relevan.
                            </p>


                            <div class="day-time">
                                <div class="icon"><i class="fa-solid fa-alarm-clock"></i></div>
                                <div class="content">
                                    <div class="day">Monday - Friday:</div>
                                    <div class="time">9:00 AM – 17:00 PM</div>
                                </div>
                            </div>

                            <ul class="social-icons solid-social-icons rounded-social-icons">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-8">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.9293900183523!2d106.74838108144093!3d-6.557294524003736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5d62e19e26f%3A0x624586ceef32cbbc!2sGreen%20View%20Residence!5e0!3m2!1sid!2sid!4v1736434788511!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright-area-one bg-colorsame">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-wrapper">
                        <p>© Copyright 2025. All Rights Reserved by <a href="#">PT Catur Samasta Indonusa</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Area  -->

    <x-loader />
@endsection
