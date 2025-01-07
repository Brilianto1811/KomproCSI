

<?php
    $title = 'Project Sldier';
    $subtitle = 'Project Sldier';
?>


<?php $__env->startSection('content'); ?>

     <!-- recent project areas tart -->
     <div class="recent-project-area tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="<?php echo e(asset('assets/images/services/section-custom-menubar.png ')); ?>" alt="Corporate_service">
                            <span class="subtitle">Recent Blog</span>
                        </div>
                        <h2 class="title split-collab">Our Latest Project</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="recent-project-area-wrapper-swiper">
                        <div class="swiper mySwiper-recent-product">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tmp-single-portfolio-item">
                                        <a href="<?php echo e(route('projects-details')); ?>" class="thumbnail">
                                            <img src="<?php echo e(asset('assets/images/product/05.jpg')); ?>" alt="personal_portfolio">
                                        </a>
                                        <div class="tmp-inner-content">
                                            <div class="top-item">
                                                <span class="left">Mobile App Design</span>
                                                <span class="left">25 likes</span>
                                            </div>
                                            <a href="<?php echo e(route('projects-details')); ?>">
                                                <h2 class="title">Mobile App Design UI/UX <br>
                                                In Figma</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tmp-single-portfolio-item">
                                        <a href="<?php echo e(route('projects-details')); ?>" class="thumbnail">
                                            <img src="<?php echo e(asset('assets/images/product/06.jpg')); ?>" alt="personal_portfolio">
                                        </a>
                                        <div class="tmp-inner-content">
                                            <div class="top-item">
                                                <span class="left">Mobile App Design</span>
                                                <span class="left">25 likes</span>
                                            </div>
                                            <a href="<?php echo e(route('projects-details')); ?>">
                                                <h2 class="title">Mobile App Design UI/UX <br>
                                                In Figma</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tmp-single-portfolio-item">
                                        <a href="<?php echo e(route('projects-details')); ?>" class="thumbnail">
                                            <img src="<?php echo e(asset('assets/images/product/07.jpg')); ?>" alt="personal_portfolio">
                                        </a>
                                        <div class="tmp-inner-content">
                                            <div class="top-item">
                                                <span class="left">Mobile App Design</span>
                                                <span class="left">25 likes</span>
                                            </div>
                                            <a href="<?php echo e(route('projects-details')); ?>">
                                                <h2 class="title">Mobile App Design UI/UX <br>
                                                In Figma</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tmp-single-portfolio-item">
                                        <a href="<?php echo e(route('projects-details')); ?>" class="thumbnail">
                                            <img src="<?php echo e(asset('assets/images/product/05.jpg')); ?>" alt="personal_portfolio">
                                        </a>
                                        <div class="tmp-inner-content">
                                            <div class="top-item">
                                                <span class="left">Mobile App Design</span>
                                                <span class="left">25 likes</span>
                                            </div>
                                            <a href="<?php echo e(route('projects-details')); ?>">
                                                <h2 class="title">Mobile App Design UI/UX <br>
                                                In Figma</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tmp-single-portfolio-item">
                                        <a href="<?php echo e(route('projects-details')); ?>" class="thumbnail">
                                            <img src="<?php echo e(asset('assets/images/product/06.jpg')); ?>" alt="personal_portfolio">
                                        </a>
                                        <div class="tmp-inner-content">
                                            <div class="top-item">
                                                <span class="left">Mobile App Design</span>
                                                <span class="left">25 likes</span>
                                            </div>
                                            <a href="<?php echo e(route('projects-details')); ?>">
                                                <h2 class="title">Mobile App Design UI/UX <br>
                                                In Figma</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tmp-single-portfolio-item">
                                        <a href="<?php echo e(route('projects-details')); ?>" class="thumbnail">
                                            <img src="<?php echo e(asset('assets/images/product/07.jpg')); ?>" alt="personal_portfolio">
                                        </a>
                                        <div class="tmp-inner-content">
                                            <div class="top-item">
                                                <span class="left">Mobile App Design</span>
                                                <span class="left">25 likes</span>
                                            </div>
                                            <a href="<?php echo e(route('projects-details')); ?>">
                                                <h2 class="title">Mobile App Design UI/UX <br>
                                                In Figma</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next" data-tmp-cursor="md transparent fw-bold" data-tmp-cursor-text="Next"></div>
                            <div class="swiper-button-prev" data-tmp-cursor="md transparent fw-bold" data-tmp-cursor-text="Prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- recent project areas end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Theme\Themes Park\Bizper\Laravel\Bizper\resources\views/pages/project-slider.blade.php ENDPATH**/ ?>