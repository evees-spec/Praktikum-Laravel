

<?php $__env->startSection('judul', 'Ubah Alat'); ?>

<?php $__env->startSection('konten'); ?>

    <h2>Form Ubah Alat</h2>

    <?php if($errors->any()): ?>
        <ul style="color:red">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($e); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('alat.update', $alat)); ?>">

        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <p>
            Kode:
            <input name="kode"
                value="<?php echo e(old('kode', $alat->kode)); ?>">
        </p>

        <p>
            Nama:
            <input name="nama"
                value="<?php echo e(old('nama', $alat->nama)); ?>">
        </p>

        <p>
            Stok:
            <input type="number" name="stok"
                value="<?php echo e(old('stok', $alat->stok)); ?>">
        </p>

        <p>
            Kondisi:
            <select name="kondisi">

                <option value="baik"
                    <?php echo e(old('kondisi', $alat->kondisi) == 'baik' ? 'selected' : ''); ?>>
                    baik
                </option>

                <option value="rusak ringan"
                    <?php echo e(old('kondisi', $alat->kondisi) == 'rusak ringan' ? 'selected' : ''); ?>>
                    rusak ringan
                </option>

                <option value="rusak berat"
                    <?php echo e(old('kondisi', $alat->kondisi) == 'rusak berat' ? 'selected' : ''); ?>>
                    rusak berat
                </option>

            </select>
        </p>

        <button type="submit">Perbarui</button>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - Politeknik Elektronika Negeri Surabaya\SEM 3\Prak. Teknologi Web Multimedia\PRAKTIKUM LARAVEL\sipinjam\resources\views/alat/edit.blade.php ENDPATH**/ ?>