

<?php $__env->startSection('judul', 'Coba Blade'); ?>

<?php $__env->startSection('konten'); ?>

    <p>Daftar alat (sementara, data contoh):</p>

    <?php
        $alat = ['Kamera', 'Tripod', 'Mikrofon'];
    ?>

    <ul>
        <?php $__currentLoopData = $alat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($a); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <?php if(count($alat) > 2): ?>
        <p>Jumlah alat lebih dari 2.</p>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - Politeknik Elektronika Negeri Surabaya\SEM 3\Prak. Teknologi Web Multimedia\PRAKTIKUM LARAVEL\sipinjam\resources\views/coba.blade.php ENDPATH**/ ?>