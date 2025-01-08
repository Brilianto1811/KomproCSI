<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>List of Users</h1>
        <a href="<?php echo e(route('user.create')); ?>" class="btn btn-primary">Add User</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($user->username_user); ?></td>
                        <td><?php echo e($user->email_user); ?></td>
                        <td>
                            <!-- Update Password -->
                            <a href="<?php echo e(route('user.editPassword', $user->id_user)); ?>" class="btn btn-warning">Update
                                Password</a>

                            <!-- Delete -->
                            <button class="btn btn-danger"
                                onclick="confirmDelete('<?php echo e($user->id_user); ?>', '<?php echo e($user->username_user); ?>')">Delete</button>

                            <!-- Form for delete -->
                            <form id="delete-form-<?php echo e($user->id_user); ?>" action="<?php echo e(route('user.destroy', $user->id_user)); ?>"
                                method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <script>
        function confirmDelete(id, username) {
            if (confirm(`Apakah Anda yakin ingin menghapus username ${username}?`)) {
                document.getElementById(`delete-form-${id}`).submit();
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Gawe\cp-pt-csi\KomproCSI\resources\views/OnePage/user/index.blade.php ENDPATH**/ ?>