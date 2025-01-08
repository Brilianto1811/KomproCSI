<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="mb-4">Edit Proyek: <?php echo e($proyek->judul_proyek); ?></h1>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('proyek.update', $proyek->uid_proyek)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?> <!-- Form method PUT untuk update data -->

            <div class="form-group">
                <label for="judul_proyek">Judul Proyek</label>
                <input type="text" name="judul_proyek" id="judul_proyek" class="form-control"
                    value="<?php echo e(old('judul_proyek', $proyek->judul_proyek)); ?>" required>
            </div>

            <div class="form-group">
                <label for="deskripsi_proyek">Deskripsi Proyek</label>
                <textarea name="deskripsi_proyek" id="deskripsi_proyek" class="form-control" required><?php echo e(old('deskripsi_proyek', $proyek->deskripsi_proyek)); ?></textarea>
            </div>

            <div class="form-group">
                <label for="file_proyek">File Proyek (Opsional)</label>
                <input type="file" name="file_proyek[]" id="file_proyek" class="form-control" multiple>
                <?php if($proyek->file_proyek): ?>
                    <div class="mt-2">
                        <strong>File yang sudah ada:</strong>
                        <a href="<?php echo e(Storage::url($proyek->file_proyek)); ?>" target="_blank">Unduh File Proyek</a>
                    </div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="bukti_proyek">Bukti Proyek (Opsional)</label>
                <input type="file" name="bukti_proyek[]" id="bukti_proyek" class="form-control" multiple>
                <?php if($proyek->bukti_proyek): ?>
                    <div class="mt-2">
                        <strong>Bukti yang sudah ada:</strong>
                        <a href="<?php echo e(Storage::url($proyek->bukti_proyek)); ?>" target="_blank">Lihat Bukti Proyek</a>
                    </div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="partner_proyek">Partner Proyek (Opsional)</label>
                <input type="text" name="partner_proyek" id="partner_proyek" class="form-control"
                    value="<?php echo e(old('partner_proyek', $proyek->partner_proyek)); ?>">
            </div>

            <div class="form-group">
                <label for="tgl_mulai">Tanggal Mulai</label>
                <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control"
                    value="<?php echo e(old('tgl_mulai', $proyek->tgl_mulai)); ?>">
            </div>

            <div class="form-group">
                <label for="tgl_selesai">Tanggal Selesai</label>
                <input type="date" name="tgl_selesai" id="tgl_selesai" class="form-control"
                    value="<?php echo e(old('tgl_selesai', $proyek->tgl_selesai)); ?>">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="P" <?php echo e(old('status', $proyek->status) == 'P' ? 'selected' : ''); ?>>Proses</option>
                    <option value="I" <?php echo e(old('status', $proyek->status) == 'I' ? 'selected' : ''); ?>>Selesai</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="<?php echo e(route('proyek.index')); ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Gawe\cp-pt-csi\KomproCSI\resources\views/OnePage/proyek/edit.blade.php ENDPATH**/ ?>