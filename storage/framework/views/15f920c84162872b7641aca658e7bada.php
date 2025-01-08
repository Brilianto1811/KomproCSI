<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Tambah User Baru</h2>
        <form action="<?php echo e(route('user.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="email_user">Email</label>
                <input type="email" name="email_user" id="email_user" class="form-control" placeholder="Masukkan email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Gawe\cp-pt-csi\KomproCSI\resources\views/OnePage/create.blade.php ENDPATH**/ ?>