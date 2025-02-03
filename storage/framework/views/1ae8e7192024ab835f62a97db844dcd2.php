<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="mb-4">Daftar Proyek Publik</h1>

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php elseif(session('error')): ?>
            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
        <?php endif; ?>
        <div>
            <form action="<?php echo e(route('proyek.indexPublik')); ?>" method="GET" class="form-inline">
                <input type="text" name="search" class="input-field" placeholder="Cari berdasarkan Judul/Deskripsi/Partner"
                    value="<?php echo e($searchTerm ?? ''); ?>" style="width: 300px; height: 25px; border-radius: 5px">
                <button type="submit" class="btn btn-info ml-2">Cari</button>
            </form>
        </div>

        

        <table class="table">
            <thead>
                <tr>
                    <th>Judul Proyek</th>
                    <th>Deskripsi Proyek</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Partner</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $proyek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($item->judul_proyek); ?></td>
                        <td><?php echo e(Str::limit($item->deskripsi_proyek, 50)); ?></td>
                        <td><?php echo e(\Carbon\Carbon::parse($item->tgl_mulai)->format('d-m-Y')); ?></td>
                        <td><?php echo e(\Carbon\Carbon::parse($item->tgl_selesai)->format('d-m-Y')); ?></td>
                        <td><?php echo e($item->partner_proyek); ?></td>
                        <td>
                            <a href="<?php echo e(route('proyek.show', $item->uid_proyek)); ?>" class="btn btn-info">Lihat</a>
                            <a href="<?php echo e(route('proyek.edit', $item->uid_proyek)); ?>" class="btn btn-warning">Edit</a>
                            <form action="<?php echo e(route('proyek.destroy', $item->uid_proyek)); ?>" method="POST"
                                style="display: inline-block;">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="text-center">Data Proyek Publik Kosong</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layoutdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Documents\PROJEK WEB CSI\KomproCSI\resources\views/OnePage/proyek/indexPublik.blade.php ENDPATH**/ ?>