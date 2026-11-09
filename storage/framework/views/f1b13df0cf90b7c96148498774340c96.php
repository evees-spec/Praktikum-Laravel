

<?php $__env->startSection('judul', 'Detail Alat'); ?>

<?php $__env->startSection('konten'); ?>

    <h2>Detail Alat</h2>

    <p>Kode: <?php echo e($alat->kode); ?></p>
    <p>Nama: <?php echo e($alat->nama); ?></p>
    <p>Stok: <?php echo e($alat->stok); ?></p>
    <p>Kondisi: <?php echo e($alat->kondisi); ?></p>
    <p>Lokasi: <?php echo e($alat->lokasi); ?></p>

    <a href="<?php echo e(route('alat.index')); ?>">Kembali</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - Politeknik Elektronika Negeri Surabaya\SEM 3\Prak. Teknologi Web Multimedia\PRAKTIKUM LARAVEL\sipinjam\resources\views/alat/show.blade.php ENDPATH**/ ?>