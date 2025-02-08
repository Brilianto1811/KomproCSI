<?php $__env->startSection('content'); ?>
    <div class="container p-4 bg-light shadow-lg rounded-lg">
        <h2 class="mb-4 text-center bg-success text-white p-3 rounded">Daftar Proyek Publik</h2>

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php elseif(session('error')): ?>
            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
        <?php endif; ?>
        <div>
            <form action="<?php echo e(route('proyek.indexPublik')); ?>" method="GET" class="form-inline">
                <input type="text" name="search" class="input-field" placeholder="Cari berdasarkan Judul/Deskripsi/Partner"
                    value="<?php echo e($searchTerm ?? ''); ?>"
                    style="width: 380px; height: 38px; border-radius: 5px; border:1px solid">
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

<?php echo $__env->make('layouts.layoutdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Documents\PROJEK WEB CSI\KomproCSI\resources\views/OnePage/proyek/indexPublik.blade.php ENDPATH**/ ?>