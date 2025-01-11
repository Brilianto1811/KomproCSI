<?php
    $bodyClass = 'onepage';
?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="mb-4">Detail Proyek: <?php echo e($proyek->judul_proyek); ?></h1>

        <div class="mb-4">
            <strong>Deskripsi Proyek:</strong>
            <p style="text-align: justify;"><?php echo e($proyek->deskripsi_proyek); ?></p>
        </div>

        <div class="mb-4">
            <strong>Partner Proyek:</strong>
            <p><?php echo e($proyek->partner_proyek ?? 'Tidak ada'); ?></p>
        </div>

        <div class="mb-4">
            <strong>Tanggal Mulai:</strong>
            <p><?php echo e(\Carbon\Carbon::parse($proyek->tgl_mulai)->format('d-m-Y')); ?></p>
        </div>

        <div class="mb-4">
            <strong>Tanggal Selesai:</strong>
            <p><?php echo e(\Carbon\Carbon::parse($proyek->tgl_selesai)->format('d-m-Y')); ?></p>
        </div>

        

        <div class="mb-4">
            <strong>Dokumentasi Proyek:</strong>
            <?php if($proyek->bukti_proyek): ?>
                <?php $__currentLoopData = explode(',', $proyek->bukti_proyek); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
                    ?>
                    <?php if($fileExtension === 'pdf'): ?>
                        <iframe src="<?php echo e(asset($file)); ?>" width="100%" height="600px"></iframe>
                    <?php elseif(in_array($fileExtension, ['jpg', 'jpeg', 'png'])): ?>
                        <img src="<?php echo e(asset($file)); ?>" alt="Bukti Proyek" class="img-fluid">
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

        <a href="<?php echo e(route('onepage-eight')); ?>" class="btn btn-secondary">Kembali ke Home</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Gawe\cp-pt-csi\KomproCSI\resources\views/OnePage/showproyek.blade.php ENDPATH**/ ?>