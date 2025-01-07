

<?php
    $title = 'Error Page';
    $subtitle = 'Not Found';
?>


<?php $__env->startSection('content'); ?>

<div class="error-page-area tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-inner text-center">
                        <div class="thumbnail">
                            <img src="<?php echo e(asset('assets/images/error/group2.png')); ?>" alt="error">
                            <img src="<?php echo e(asset('assets/images/error/404.png')); ?>" alt="error">
                            <img src="<?php echo e(asset('assets/images/error/group1.png')); ?>" alt="error">
                        </div>

                        <h2 class="title">Oops! Nothing Was Found</h2>
                        <p class="description text-center">Household shameless incommode at no objection behaviour. Especially do at he possession insensible sympathize boisterous it. Songs he on an widen me event truth.
                        </p>

                        <a href="<?php echo e(route('index')); ?>" class="tmp-btn btn-primary">Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Theme\Themes Park\Bizper\Laravel\Bizper\resources\views/pages/notFound.blade.php ENDPATH**/ ?>