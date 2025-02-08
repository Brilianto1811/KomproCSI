<?php $__env->startSection('content'); ?>
    <style>
        .btn-group {
            display: flex;
            gap: 5px;
        }

        .table-responsive {
            overflow-x: auto;
            /* Pastikan table bisa di-scroll horizontal di layar kecil */
        }
    </style>
    <div class="container p-4 bg-gray-800 shadow-lg rounded-lg">
        <h2 class="mb-4 text-center bg-success text-white p-3 rounded">Daftar Proyek</h2>
        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php elseif(session('error')): ?>
            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
        <?php endif; ?>

        <!-- Kolom Pencarian -->
        <div class="d-flex justify-content-between mb-4">
            <div>
                <a href="<?php echo e(route('proyek.create')); ?>" class="btn btn-primary">Tambah Proyek Baru</a>
            </div>
            <div>
                <form action="<?php echo e(route('proyek.index')); ?>" method="GET" class="form-inline">
                    <input type="text" name="search" class="input-field"
                        placeholder="Cari berdasarkan Judul/Deskripsi/Partner" value="<?php echo e($searchTerm ?? ''); ?>"
                        style="width: 380px; height: 38px; border-radius: 5px; border:1px solid">
                    <!-- Ukuran kolom diperbesar -->
                    <button type="submit" class="btn btn-info">Cari</button> <!-- Warna hijau -->
                </form>
            </div>
        </div>


        <table class="table table-responsive">
            <thead>
                <tr>
                    <th class="text-center">Judul Proyek</th>
                    <th class="text-center">Deskripsi Proyek</th>
                    <th class="text-center">Tanggal Mulai</th>
                    <th class="text-center">Tanggal Selesai</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Partner</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $proyek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($item->judul_proyek); ?></td>
                        <td><?php echo e(Str::limit($item->deskripsi_proyek, 50)); ?></td>
                        <td><?php echo e(\Carbon\Carbon::parse($item->tgl_mulai)->format('d-m-Y')); ?></td>
                        <td><?php echo e(\Carbon\Carbon::parse($item->tgl_selesai)->format('d-m-Y')); ?></td>
                        <td><?php echo e($item->status == 'P' ? 'Publik' : 'Internal'); ?></td>
                        <td><?php echo e($item->partner_proyek); ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="<?php echo e(route('proyek.show', $item->uid_proyek)); ?>" class="btn btn-info">Lihat</a>
                                <a href="<?php echo e(route('proyek.edit', $item->uid_proyek)); ?>" class="btn btn-warning">Edit</a>
                                <form action="<?php echo e(route('proyek.destroy', $item->uid_proyek)); ?>" method="POST"
                                    style="display: inline-block;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus proyek ini?')">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="7" class="text-center">Data Proyek Kosong</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <!-- Pagination -->
        <?php echo e($proyek->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php if (isset($component)) { $__componentOriginal23a21c0d0f80992980c57ef2802ca540 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a21c0d0f80992980c57ef2802ca540 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.scripts','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('scripts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a21c0d0f80992980c57ef2802ca540)): ?>
<?php $attributes = $__attributesOriginal23a21c0d0f80992980c57ef2802ca540; ?>
<?php unset($__attributesOriginal23a21c0d0f80992980c57ef2802ca540); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a21c0d0f80992980c57ef2802ca540)): ?>
<?php $component = $__componentOriginal23a21c0d0f80992980c57ef2802ca540; ?>
<?php unset($__componentOriginal23a21c0d0f80992980c57ef2802ca540); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginal0f509fab02c45445826003a1e50db506 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0f509fab02c45445826003a1e50db506 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.head','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('head'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0f509fab02c45445826003a1e50db506)): ?>
<?php $attributes = $__attributesOriginal0f509fab02c45445826003a1e50db506; ?>
<?php unset($__attributesOriginal0f509fab02c45445826003a1e50db506); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0f509fab02c45445826003a1e50db506)): ?>
<?php $component = $__componentOriginal0f509fab02c45445826003a1e50db506; ?>
<?php unset($__componentOriginal0f509fab02c45445826003a1e50db506); ?>
<?php endif; ?>

<?php echo $__env->make('layouts.layoutdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Documents\PROJEK WEB CSI\KomproCSI\resources\views/OnePage/proyek/index.blade.php ENDPATH**/ ?>