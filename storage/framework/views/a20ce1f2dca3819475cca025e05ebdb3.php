

<?php $__env->startSection('judul', 'Daftar Alat'); ?>

<?php $__env->startSection('konten'); ?>

    <a href="<?php echo e(route('alat.create')); ?>">+ Tambah Alat</a>

    <?php if(session('sukses')): ?>
        <p style="color:green">
            <?php echo e(session('sukses')); ?>

        </p>
    <?php endif; ?>

    <table border="1" cellpadding="6">

        <tr>
            <th>Kode</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Kondisi</th>
            <th>Aksi</th>
        </tr>

        <?php $__empty_1 = true; $__currentLoopData = $alat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <tr>
                <td><?php echo e($a->kode); ?></td>
                <td><?php echo e($a->nama); ?></td>
                <td>
                    <?php if($a->stok > 0): ?>
                        <?php echo e($a->stok); ?>

                    <?php else: ?>
                        <span style="color:red">Kosong</span>
                    <?php endif; ?>
                </td>
                <td><?php echo e($a->kondisi); ?></td>
                <td>
                    <a href="<?php echo e(route('alat.edit', $a)); ?>">Ubah</a>
                    <a href="<?php echo e(route('alat.show', $a)); ?>">Detail</a>

                    <form method="POST" action="<?php echo e(route('alat.destroy', $a)); ?>"
                        style="display:inline"
                        onsubmit="return confirm('Hapus alat ini? <?php echo e($a->nama); ?>?')">

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button type="submit">Hapus</button>

                    </form>
                </td>
            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <tr>
                <td colspan="5">Belum ada data alat.</td>
            </tr>

        <?php endif; ?>

    </table>

    <?php echo e($alat->links()); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - Politeknik Elektronika Negeri Surabaya\SEM 3\Prak. Teknologi Web Multimedia\PRAKTIKUM LARAVEL\sipinjam\resources\views/alat/index.blade.php ENDPATH**/ ?>