<?php
    $bodyClass = 'onepage';
?>

<?php $__env->startSection('content'); ?>
    <div class="container p-4 bg-light rounded shadow-sm">
        <h1 class="mb-4 text-center bg-success text-white p-3 rounded">Detail Proyek: <?php echo e($proyek->judul_proyek); ?></h1>
        <table class="table table-bordered">
            <tr>
                <th>Deskripsi Proyek</th>
                <td style="text-align: justify;"><?php echo e($proyek->deskripsi_proyek); ?></td>
            </tr>
            <tr>
                <th>Partner Proyek</th>
                <td><?php echo e($proyek->partner_proyek ?? 'Tidak ada'); ?></td>
            </tr>
            <tr>
                <th>Tanggal Mulai:</th>
                <td><?php echo e(\Carbon\Carbon::parse($proyek->tgl_mulai)->translatedFormat('d F Y')); ?></td>
            </tr>
            <tr>
                <th>Tanggal Selesai:</th>
                <td><?php echo e(\Carbon\Carbon::parse($proyek->tgl_selesai)->translatedFormat('d F Y')); ?></td>
            </tr>
        </table>

        <h3 class="mt-4">Dokumentasi Proyek</h3>
        <hr>
        <div class="row">
            <?php if($proyek->bukti_proyek): ?>
                <?php $__currentLoopData = explode(',', $proyek->bukti_proyek); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
                    ?>
                    <div class="col-md-6 mb-3">
                        <div class="border p-3 shadow-sm">
                            <?php if($fileExtension === 'pdf'): ?>
                                <iframe src="<?php echo e(asset($file)); ?>" width="100%" height="300px"></iframe>
                            <?php elseif(in_array($fileExtension, ['jpg', 'jpeg', 'png'])): ?>
                                <img src="<?php echo e(asset($file)); ?>" alt="Dokumentasi Proyek" class="img-fluid shadow">
                            <?php elseif(in_array($fileExtension, ['doc', 'docx'])): ?>
                                <iframe src="https://docs.google.com/gview?url=<?php echo e(urlencode(asset($file))); ?>&embedded=true"
                                    width="100%" height="300px"></iframe>
                            <?php else: ?>
                                <p>Tipe file tidak dikenali.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <p class="text-center">Tidak ada bukti file.</p>
            <?php endif; ?>
        </div>

        <div class="d-flex justify-content-center mt-4 mb-4">
            <a href="<?php echo e(route('onepage-eight')); ?>" class="btn btn-secondary btn-lg px-5 py-3 fw-bold">Kembali</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Documents\PROJEK WEB CSI\KomproCSI\resources\views/OnePage/showproyek.blade.php ENDPATH**/ ?>