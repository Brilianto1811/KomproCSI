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
            <strong>Status:</strong>
            <p><?php echo e($proyek->status == 'P' ? 'Publik' : 'Internal'); ?></p>
        </div>

        <div class="mb-4">
            <strong>File Proyek:</strong>
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
            <strong>Dokumentasi Proyek:</strong>
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

        <a href="<?php echo e(route('proyek.index')); ?>" class="btn btn-secondary">Kembali ke Daftar Proyek</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layoutdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Documents\PROJEK WEB CSI\KomproCSI\resources\views/OnePage/proyek/show.blade.php ENDPATH**/ ?>