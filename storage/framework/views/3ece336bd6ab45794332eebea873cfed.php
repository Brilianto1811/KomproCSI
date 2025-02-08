<?php $__env->startSection('content'); ?>
    <div class="container p-4 bg-light shadow-lg rounded-lg">
        <h2 class="mb-4 text-center bg-success text-white p-3 rounded">Detail Proyek: <?php echo e($proyek->judul_proyek); ?></h2>
        <div class="text-left mb-4">
            <a href="<?php echo e(route('proyek.index')); ?>" class="btn btn-secondary align-content-center">Kembali ke Daftar
                Proyek</a>
        </div>
        <div class="mb-4">
            <h4>Deskripsi Proyek:</h4>
            <p style="text-align: justify;"><?php echo e($proyek->deskripsi_proyek); ?></p>
        </div>

        <div class="mb-4">
            <h4>Partner Proyek:</h4>
            <p><?php echo e($proyek->partner_proyek ?? 'Tidak ada'); ?></p>
        </div>

        <div class="mb-4">
            <h4>Tanggal Mulai:</h4>
            <p><?php echo e(\Carbon\Carbon::parse($proyek->tgl_mulai)->translatedFormat('d F Y')); ?></p>
        </div>

        <div class="mb-4">
            <h4>Tanggal Selesai:</h4>
            <p><?php echo e(\Carbon\Carbon::parse($proyek->tgl_selesai)->translatedFormat('d F Y')); ?></p>
        </div>

        <div class="mb-4">
            <h4>Status:</h4>
            <p><?php echo e($proyek->status == 'P' ? 'Publik' : 'Internal'); ?></p>
        </div>

        <div class="mb-4">
            <h4>File Proyek:</h4>
            <?php if($proyek->file_proyek): ?>
                <?php $__currentLoopData = explode(',', $proyek->file_proyek); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
                    ?>
                    <?php if($fileExtension === 'pdf'): ?>
                        <!-- Untuk PDF, kita tampilkan dengan object -->
                        <object data="<?php echo e(url('/' . $file)); ?>" type="application/pdf" width="100%" height="600px">
                            <p>PDF tidak dapat ditampilkan. <a href="<?php echo e(url('/' . $file)); ?>" target="_blank">Unduh
                                    file PDF</a></p>
                        </object>
                    <?php elseif(in_array($fileExtension, ['jpg', 'jpeg', 'png'])): ?>
                        <!-- Untuk gambar, kita tampilkan menggunakan tag img -->
                        <img src="<?php echo e(url('/' . $file)); ?>" alt="File Proyek" class="img-fluid">
                    <?php elseif(in_array($fileExtension, ['doc', 'docx'])): ?>
                        <!-- Untuk dokumen Word, kita tampilkan menggunakan Google Docs Viewer -->
                        <div>
                            <a href="https://docs.google.com/gview?url=<?php echo e(urlencode(url('/' . $file))); ?>&embedded=true"
                                target="_blank">
                                Lihat dokumen Word
                            </a>
                        </div>
                    <?php else: ?>
                        <p>Tipe file tidak dikenali.</p>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <p>Tidak ada file.</p>
            <?php endif; ?>
        </div>

        <div class="mb-4">
            <h4>Dokumentasi Proyek:</h4>
            <?php if($proyek->bukti_proyek): ?>
                <?php $__currentLoopData = explode(',', $proyek->bukti_proyek); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
                    ?>
                    <?php if($fileExtension === 'pdf'): ?>
                        <iframe src="<?php echo e(asset($file)); ?>" width="100%" height="600px"></iframe>
                    <?php elseif(in_array($fileExtension, ['jpg', 'jpeg', 'png'])): ?>
                        <img src="<?php echo e(asset($file)); ?>" alt="Dokumentasi Proyek" class="img-fluid">
                    <?php elseif(in_array($fileExtension, ['doc', 'docx'])): ?>
                        <iframe src="https://docs.google.com/gview?url=<?php echo e(urlencode(asset($file))); ?>&embedded=true"
                            width="100%" height="600px">
                        </iframe>
                    <?php else: ?>
                        <p>Tipe file tidak dikenali.</p>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <p>Tidak ada bukti file.</p>
            <?php endif; ?>
        </div>
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

<?php echo $__env->make('layouts.layoutdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Documents\PROJEK WEB CSI\KomproCSI\resources\views/OnePage/proyek/show.blade.php ENDPATH**/ ?>