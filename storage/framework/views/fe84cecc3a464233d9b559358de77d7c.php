<?php
    $bodyClass = 'onepage';
?>


<?php $__env->startSection('content'); ?>
    <!-- tmp header area  -->
    <header class="header-solid header--sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-solid-main-wrapper">
                        <div class="logo-area-start">
                            <a class="logo" href="<?php echo e(route('onepage-eight')); ?>">
                                <img src="<?php echo e(asset('assets/images/logo/csi_logo2.png')); ?>" alt="Corporate_business_logo"
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
    <?php if (isset($component)) { $__componentOriginal2880b66d47486b4bfeaf519598a469d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2880b66d47486b4bfeaf519598a469d6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2880b66d47486b4bfeaf519598a469d6)): ?>
<?php $attributes = $__attributesOriginal2880b66d47486b4bfeaf519598a469d6; ?>
<?php unset($__attributesOriginal2880b66d47486b4bfeaf519598a469d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2880b66d47486b4bfeaf519598a469d6)): ?>
<?php $component = $__componentOriginal2880b66d47486b4bfeaf519598a469d6; ?>
<?php unset($__componentOriginal2880b66d47486b4bfeaf519598a469d6); ?>
<?php endif; ?>

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
                        <p>PT Catur Samasta Indonusa adalah perusahaan konsultan yang bergerak di bidang manajemen,
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
                        <img src="<?php echo e(asset('assets/images/logo/wp1.jpg')); ?>"src="<?php echo e(asset('assets/images/logo/wp1.jpg')); ?>"
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
                            <img src="<?php echo e(asset('assets/images/services/agency-6.svg')); ?>"src="<?php echo e(asset('assets/images/services/agency-6.svg')); ?>"
                                alt="corporate_Business_Services_agency">
                        </div>
                        <div class="content">
                            <h2 class="title">Strategi Pengelolaan Hutan</h2>
                            <p class="description">
                                Solusi strategis untuk pengelolaan hutan yang berkelanjutan.
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
                            <img src="<?php echo e(asset('assets/images/services/agency-1.svg')); ?>"src="<?php echo e(asset('assets/images/services/agency-1.svg')); ?>"
                                alt="corporate_Business_Services_agency">

                        </div>
                        <div class="content">
                            <h2 class="title">Desain Sistem Informasi Kehutanan</h2>
                            <p class="description">
                                Pengembangan sistem informasi yang terintegrasi dan efisien.
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
                            <img src="<?php echo e(asset('assets/images/services/agency-2.svg')); ?>"src="<?php echo e(asset('assets/images/services/agency-2.svg')); ?>"
                                alt="corporate_Business_Services_Agency">

                        </div>
                        <div class="content">
                            <h2 class="title">Analisis Data Kehutanan</h2>
                            <p class="description">
                                Pengolahan dan analisis data untuk mendukung pengambilan keputusan.
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
                            <img src="<?php echo e(asset('assets/images/services/agency-3.svg')); ?>"src="<?php echo e(asset('assets/images/services/agency-3.svg')); ?>"
                                alt="corporate_Business_Services_agency">

                        </div>
                        <div class="content">
                            <h2 class="title">Konservasi &amp; Investasi Berkelanjutan</h2>
                            <p class="description">
                                Mendorong investasi yang berorientasi pada konservasi lingkungan.
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
                            Kami berdedikasi untuk menyediakan layanan konsultasi yang membantu klien kami dalam mencapai
                            tujuan pengelolaan hutan yang efektif dan berkelanjutan.
                        </h2>
                        <div class="discription-area">
                            <p class="disc">
                                Dengan pendekatan berbasis riset dan teknologi terkini, kami memastikan setiap solusi yang
                                diberikan dapat diimplementasikan secara praktis dan berdampak positif.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
        <div class="section-head">
            <div class="section-sub-title center-title">
                <span>OUR CLIENTS AND PARTNERS</span>
            </div>
            <h2 class="title split-collab">Meet Our Valued Clients and Partners</h2>
        </div>
    </div>


    <!-- about company wrapper -->
    <section class="about-company-area tmp-section-gapBottom" id="about">
        <div class="row align-items-center  plr_sm--15 plr_md--15">
            <div class="col-lg-4 offset-lg-2 mb_md--50 mb_sm--30">
                <div class="split-inner">
                    <h2 class="title sal-animate mb--40" data-sal="slide-up" data-sal-duration="700"
                        data-sal-delay="100">
                        What is Bizper?</h2>
                    <p class="description sal-animate mb--25" data-sal="slide-up" data-sal-duration="700"
                        data-sal-delay="300">Randomised words which don't look even slightly
                        believable. If you are to use a passage of Lorem Ipsum. You need to be
                        sure there isn't anything embarrassing hidden in the middle of text. in
                        some form, by injectedeed bedhumour, or randomised even.</p>
                    <p class="description sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                        You need to be
                        sure there isn't anything embarrassing hidden in the middle of text. in
                        some form, by injectedeed bedhumour, or randomised even.</p>
                    <ul class="split-list sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="20">
                        <li>- Doug DeMarco, Design Prototyping Manager</li>
                        <li>- 108 million paying subscribers</li>
                        <li>- Over 1.7 billion hours of music played monthly</li>
                        <li>- 4,000+ employees working across 16 offices</li>
                    </ul>
                    <div class="view-more-button mt--35 sal-animate d-flex" data-sal="slide-up" data-sal-duration="700"
                        data-sal-delay="300">
                        <a class="tmp-btn btn-primary" href="<?php echo e(route('contact')); ?>">Contact With Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="thumbnail image-right-content">
                    <img src="<?php echo e(asset('assets/images/about/about-large.jpg')); ?>"src="<?php echo e(asset('assets/images/about/about-large.jpg')); ?>"
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
                            <img src="<?php echo e(asset('assets/images/counter/05.svg')); ?>"src="<?php echo e(asset('assets/images/counter/05.svg')); ?>"
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
                            <img src="<?php echo e(asset('assets/images/counter/08.svg')); ?>"src="<?php echo e(asset('assets/images/counter/08.svg')); ?>"
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
                            <img src="<?php echo e(asset('assets/images/counter/06.svg')); ?>"src="<?php echo e(asset('assets/images/counter/06.svg')); ?>"
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
                            <img src="<?php echo e(asset('assets/images/counter/07.svg')); ?>"src="<?php echo e(asset('assets/images/counter/07.svg')); ?>"
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

    <!-- rmp portfolio mesonary area -->
    <div class="tmp-portfolio-area tmp-section-gapBottom" id="portfolio">
        <div class="tmp-product-area tmp-section-gapTop bg-product-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-head color-white">
                            <div class="section-sub-title center-title">
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
                                                <img src="<?php echo e(asset('assets/images/portfolio/portfolio-1.png')); ?>"src="<?php echo e(asset('assets/images/services/section-custom-menubar.png')); ?>"
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
                                                <img src="<?php echo e(asset('assets/images/portfolio/portfolio-2.png')); ?>"src="<?php echo e(asset('assets/images/services/section-custom-menubar.png')); ?>"
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
                                                <img src="<?php echo e(asset('assets/images/portfolio/portfolio-3.png')); ?>"src="<?php echo e(asset('assets/images/services/section-custom-menubar.png')); ?>"
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
                                                <img src="<?php echo e(asset('assets/images/portfolio/portfolio-4.png')); ?>"src="<?php echo e(asset('assets/images/services/section-custom-menubar.png')); ?>"
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
                                                <img src="<?php echo e(asset('assets/images/portfolio/portfolio-5.png')); ?>"src="<?php echo e(asset('assets/images/services/section-custom-menubar.png')); ?>"
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
                                                <img src="<?php echo e(asset('assets/images/portfolio/portfolio-6.png')); ?>"src="<?php echo e(asset('assets/images/services/section-custom-menubar.png')); ?>"
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
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next" data-tmp-cursor="md transparent fw-bold"
                                    data-tmp-cursor-text="Next"></div>
                                <div class="swiper-button-prev" data-tmp-cursor="md transparent fw-bold"
                                    data-tmp-cursor-text="Prev"></div>
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
                                <img src="<?php echo e(asset('assets/images/brand/01.png')); ?>"src="<?php echo e(asset('assets/images/brand/01.png')); ?>"
                                    alt="brand">
                            </a>
                            <a href="#">
                                <img src="<?php echo e(asset('assets/images/brand/02.png')); ?>"src="<?php echo e(asset('assets/images/brand/02.png')); ?>"
                                    alt="brand">
                            </a>
                            <a href="#">
                                <img src="<?php echo e(asset('assets/images/brand/03.png')); ?>"src="<?php echo e(asset('assets/images/brand/03.png')); ?>"
                                    alt="brand">
                            </a>
                            <a href="#">
                                <img src="<?php echo e(asset('assets/images/brand/08.png')); ?>"src="<?php echo e(asset('assets/images/brand/08.png')); ?>"
                                    alt="brand">
                            </a>
                            <a href="#">
                                <img src="<?php echo e(asset('assets/images/brand/05.png')); ?>"src="<?php echo e(asset('assets/images/brand/05.png')); ?>"
                                    alt="brand">
                            </a>
                        </div>
                        <div class="tmp-brand-section-start">
                            <a href="#">
                                <img src="<?php echo e(asset('assets/images/brand/06.png')); ?>"src="<?php echo e(asset('assets/images/brand/06.png')); ?>"
                                    alt="brand">
                            </a>
                            <a href="#">
                                <img src="<?php echo e(asset('assets/images/brand/07.png')); ?>"src="<?php echo e(asset('assets/images/brand/07.png')); ?>"
                                    alt="brand">
                            </a>
                            <a href="#">
                                <img src="<?php echo e(asset('assets/images/brand/08.png')); ?>"src="<?php echo e(asset('assets/images/brand/08.png')); ?>"
                                    alt="brand">
                            </a>
                            <a href="#">
                                <img src="<?php echo e(asset('assets/images/brand/09.png')); ?>"src="<?php echo e(asset('assets/images/brand/09.png')); ?>"
                                    alt="brand">
                            </a>
                            <a href="#">
                                <img src="<?php echo e(asset('assets/images/brand/10.png')); ?>"src="<?php echo e(asset('assets/images/brand/10.png')); ?>"
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
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolor magnaaliqua.
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
                                        <a class="contact-here" href="tel:+4733378901">+123 34598768</a>
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
                                        <a class="contact-here" href="mailto:webmaster@example.com">info@uibundle.com</a>
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
                                        <a class="contact-here" href="#">25/5 Double Street, Texas Houston USA</a>
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
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolor magnaaliqua.
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
                                <a href="<?php echo e(route('onepage-eight')); ?>">
                                    <img src="<?php echo e(asset('assets/images/logo/logo-02.svg')); ?>"src="<?php echo e(asset('assets/images/logo/logo-02.svg')); ?>"
                                        alt="logo">
                                </a>
                            </div>

                            <p class="description">
                                Proin Pretium Sem Libero, Nec Aliquet Augue Lobortis In. Phasellus Nibh Quam, Molestie Id
                                Est Sit Amet, Luctus Pulvinar
                            </p>


                            <div class="day-time">
                                <div class="icon"><i class="fa-solid fa-alarm-clock"></i></div>
                                <div class="content">
                                    <div class="day">Sunday - Friday:</div>
                                    <div class="time">9:00 AM – 8:00 PM</div>
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
                    <div class="col-lg-2 col-md-6">
                        <div class="single-footer-wrapper pl-50 pl_md--0 pl_sm--0">
                            <h5 class="ft-title">Services</h5>
                            <ul class="ft-link">
                                <li>
                                    <a href="<?php echo e(route('about')); ?>">About Company</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('team')); ?>">Meet Our Team</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('service')); ?>">Our Services</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('blog')); ?>">News & Media</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('contact')); ?>">Contact Us</a>
                                </li>

                                <li>
                                    <a href="<?php echo e(route('faq')); ?>">Support</a>
                                </li>

                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="single-footer-wrapper pl-50 pl_md--0 pl_sm--0">
                            <h5 class="ft-title">Solutions</h5>
                            <ul class="ft-link">
                                <li>
                                    <a href="#">Brand</a>
                                </li>
                                <li>
                                    <a href="#">Counter</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">News</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>

                                <li>
                                    <a href="<?php echo e(route('faq')); ?>">Support</a>
                                </li>

                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="single-footer-wrapper pl-50 pl_md--0 pl_sm--0">
                            <h5 class="ft-title">Company</h5>
                            <ul class="ft-link">
                                <li>
                                    <a href="<?php echo e(route('pricing')); ?>">Pricing</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('team')); ?>">Our Team</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('service')); ?>">Our Services</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('blog')); ?>">News & Media</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('contact')); ?>">Contact Us</a>
                                </li>

                                <li>
                                    <a href="<?php echo e(route('faq')); ?>">Support</a>
                                </li>

                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="single-footer-wrapper pl-50 pl_md--0 pl_sm--0">
                            <h5 class="ft-title">Quick Link</h5>
                            <ul class="ft-link">
                                <li>
                                    <a href="<?php echo e(route('about')); ?>">Company</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('team')); ?>"> Our Team</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('service')); ?>">Services</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('blog')); ?>">News & Media</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('contact')); ?>">Contact Us</a>
                                </li>

                                <li>
                                    <a href="<?php echo e(route('faq')); ?>">Support</a>
                                </li>

                            </ul>

                        </div>
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
                        <p>© Copyright 2024. All Rights Reserved by <a href="#">Bizper</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Area  -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Gawe\cp-pt-csi\KomproCSI\resources\views/OnePage/onepage_eight.blade.php ENDPATH**/ ?>