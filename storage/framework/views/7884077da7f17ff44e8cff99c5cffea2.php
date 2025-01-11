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

            <div class="form-group">
                <label for="bukti_proyek">Dokumentasi Proyek (Opsional)</label>
                <input type="file" name="bukti_proyek[]" id="bukti_proyek" class="form-control" multiple>
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

            <div class="form-group">
                <label for="partner_proyek">Partner Proyek (Opsional)</label>
                <input type="text" name="partner_proyek" id="partner_proyek" class="form-control"
                    value="<?php echo e(old('partner_proyek', $proyek->partner_proyek)); ?>">
            </div>

            <div class="form-group">
                <label for="tgl_mulai">Tanggal Mulai</label>
                <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control"
                    value="<?php echo e(old('tgl_mulai', $proyek->tgl_mulai ? date('Y-m-d', strtotime($proyek->tgl_mulai)) : '')); ?>">
            </div>

            <div class="form-group">
                <label for="tgl_selesai">Tanggal Selesai</label>
                <input type="date" name="tgl_selesai" id="tgl_selesai" class="form-control"
                    value="<?php echo e(old('tgl_selesai', $proyek->tgl_selesai ? date('Y-m-d', strtotime($proyek->tgl_selesai)) : '')); ?>">
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

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="<?php echo e(route('proyek.index')); ?>" class="btn btn-secondary">Kembali</a>
        </form>
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

<?php echo $__env->make('layouts.layoutdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Gawe\cp-pt-csi\KomproCSI\resources\views/OnePage/proyek/edit.blade.php ENDPATH**/ ?>