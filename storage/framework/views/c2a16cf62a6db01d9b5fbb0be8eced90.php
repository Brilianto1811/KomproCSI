<script src="<?php echo e(asset('assets/js/vendor/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/vendor/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/vendor/waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/vendor/jquery.counterup.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/swiper.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/plugins/gsap.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/splittext.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/scrolltigger.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/scrolltoplugins.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/plugins/cursor.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/vendor/metismenu.js')); ?>"></script>
<!-- bootstrap Js-->
<script src="<?php echo e(asset('assets/js/vendor/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/vendor/waw.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/vendor/sal.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/isotop.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/vendor/contact-form.js')); ?>"></script>
<!-- custom Js -->
<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 5, // Jumlah slide yang ditampilkan sekaligus
        spaceBetween: 30, // Jarak antar slide
        loop: true, // Untuk looping slider
        autoplay: {
            delay: 2500, // Waktu per slide (dalam milidetik)
            disableOnInteraction: false, // Tetap autoplay meskipun user berinteraksi
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true, // Pagination dapat diklik
        },
        breakpoints: {
            768: {
                slidesPerView: 10, // Tampilan 2 slide pada layar lebih kecil
            },
            480: {
                slidesPerView: 1, // Tampilan 1 slide pada layar lebih kecil
            }
        }
    });
</script>
<?php /**PATH C:\Users\ACER\Documents\PROJEK WEB CSI\KomproCSI\resources\views/components/scripts.blade.php ENDPATH**/ ?>