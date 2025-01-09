<?php $__env->startSection('content'); ?>
    <div class="container text-center mt-5">
        <h1>Dashboard</h1>
        <div class="row justify-content-center mt-4">
            <?php if(auth()->user()->id_role == 1): ?>
                <!-- Menu Staff -->
                <div class="col-md-4">
                    <a href="<?php echo e(route('user.index')); ?>" class="btn btn-primary btn-lg btn-block">Staff</a>
                </div>
            <?php endif; ?>

            <!-- Menu Proyek -->
            <div class="col-md-4">
                <a href="<?php echo e(route('proyek.index')); ?>" class="btn btn-success btn-lg btn-block">Proyek</a>
            </div>
        </div>

        <!-- Tombol Logout -->
        <div class="mt-5">
            <form action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-danger btn-lg">Logout</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Gawe\cp-pt-csi\KomproCSI\resources\views/dashboard.blade.php ENDPATH**/ ?>