

<?php $__env->startSection('judul', 'Tambah Buku'); ?>

<?php $__env->startSection('konten'); ?>

    <h2>Form Tambah Buku</h2>

    <?php if($errors->any()): ?>
        <ul style="color:red">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('buku.store')); ?>">

        <?php echo csrf_field(); ?>

        <p>
            ISBN:
            <input name="isbn" value="<?php echo e(old('isbn')); ?>">
        </p>

        <p>
            Judul:
            <input name="judul" value="<?php echo e(old('judul')); ?>">
        </p>

        <p>
            Penulis:
            <input name="penulis" value="<?php echo e(old('penulis')); ?>">
        </p>

        <p>
            Stok:
            <input type="number" name="stok"
                value="<?php echo e(old('stok')); ?>">
        </p>

        <button type="submit">Simpan</button>

    </form>

    <a href="<?php echo e(route('buku.index')); ?>">Kembali</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - Politeknik Elektronika Negeri Surabaya\SEM 3\Prak. Teknologi Web Multimedia\PRAKTIKUM LARAVEL\sipinjam\resources\views/buku/create.blade.php ENDPATH**/ ?>