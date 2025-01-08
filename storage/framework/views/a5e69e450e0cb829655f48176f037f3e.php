<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Update Password for <?php echo e($user->username_user); ?></h1>
    <form action="<?php echo e(route('user.updatePassword', $user->id_user)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="password" class="form-label">New Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm New Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Update Password</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Gawe\cp-pt-csi\KomproCSI\resources\views/OnePage/user/edit-password.blade.php ENDPATH**/ ?>