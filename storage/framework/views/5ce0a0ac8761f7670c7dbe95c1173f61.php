

<?php $__env->startSection('judul', 'Data Buku'); ?>

<?php $__env->startSection('konten'); ?>

    <h2>Daftar Buku Perpustakaan</h2>

    <a href="<?php echo e(route('buku.create')); ?>">
        + Tambah Buku
    </a>

    <?php if(session('sukses')): ?>
        <p style="color:green">
            <?php echo e(session('sukses')); ?>

        </p>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <ul style="color:red">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>

    <table border="1" cellpadding="8">

        <tr>
            <th>ISBN</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>

        <?php $__empty_1 = true; $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <tr>
                <td><?php echo e($b->isbn); ?></td>
                <td><?php echo e($b->judul); ?></td>
                <td><?php echo e($b->penulis); ?></td>
                <td><?php echo e($b->stok); ?></td>

                <td>
                    <a href="<?php echo e(route('buku.show', $b)); ?>">
                        Detail
                    </a>

                    |

                    <a href="<?php echo e(route('buku.edit', $b)); ?>">
                        Ubah
                    </a>

                    <form method="POST"
                        action="<?php echo e(route('buku.destroy', $b)); ?>"
                        style="display:inline"
                        onsubmit="return confirm('Hapus buku ini?')">

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button type="submit">Hapus</button>

                    </form>
                </td>
            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <tr>
                <td colspan="5">Belum ada data buku.</td>
            </tr>

        <?php endif; ?>

    </table>

    <?php echo e($buku->links()); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\OneDrive - Politeknik Elektronika Negeri Surabaya\SEM 3\Prak. Teknologi Web Multimedia\PRAKTIKUM LARAVEL\sipinjam\resources\views/buku/index.blade.php ENDPATH**/ ?>