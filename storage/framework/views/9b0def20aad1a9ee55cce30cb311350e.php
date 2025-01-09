<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="mb-4">Tambah Proyek Baru</h1>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('proyek.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="judul_proyek">Judul Proyek</label>
                <input type="text" name="judul_proyek" id="judul_proyek" class="form-control"
                    value="<?php echo e(old('judul_proyek')); ?>" required>
            </div>

            <div class="form-group">
                <label for="deskripsi_proyek">Deskripsi Proyek</label>
                <textarea name="deskripsi_proyek" id="deskripsi_proyek" class="form-control" required><?php echo e(old('deskripsi_proyek')); ?></textarea>
            </div>

            <div class="form-group">
                <label for="file_proyek">File Proyek</label>
                <input type="file" name="file_proyek[]" id="file_proyek" class="form-control" multiple>
            </div>

            <div class="form-group">
                <label for="bukti_proyek">Bukti Proyek</label>
                <input type="file" name="bukti_proyek[]" id="bukti_proyek" class="form-control" multiple>
            </div>

            <div class="form-group">
                <label for="partner_proyek">Partner Proyek (Opsional)</label>
                <input type="text" name="partner_proyek" id="partner_proyek" class="form-control"
                    value="<?php echo e(old('partner_proyek')); ?>">
            </div>

            <div class="form-group">
                <label for="tgl_mulai">Tanggal Mulai</label>
                <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control" value="<?php echo e(old('tgl_mulai')); ?>">
            </div>

            <div class="form-group">
                <label for="tgl_selesai">Tanggal Selesai</label>
                <input type="date" name="tgl_selesai" id="tgl_selesai" class="form-control"
                    value="<?php echo e(old('tgl_selesai')); ?>">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <?php if(Auth::check() && Auth::user()->id_role == 1): ?>
                        <!-- Jika id_role = 1, tampilkan semua pilihan -->
                        <option value="P" <?php echo e(old('status') == 'P' ? 'selected' : ''); ?>>Publik</option>
                        <option value="I" <?php echo e(old('status') == 'I' ? 'selected' : ''); ?>>Internal</option>
                    <?php elseif(Auth::check() && Auth::user()->id_role == 2): ?>
                        <!-- Jika id_role = 2, hanya tampilkan 'Internal' -->
                        <option value="I" <?php echo e(old('status') == 'I' ? 'selected' : ''); ?>>Internal</option>
                    <?php else: ?>
                        <!-- Jika tidak ada role, tampilkan pilihan default atau kosong -->
                        <option value="" disabled selected>Pilih Status</option>
                    <?php endif; ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Proyek</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Gawe\cp-pt-csi\KomproCSI\resources\views/OnePage/proyek/create.blade.php ENDPATH**/ ?>