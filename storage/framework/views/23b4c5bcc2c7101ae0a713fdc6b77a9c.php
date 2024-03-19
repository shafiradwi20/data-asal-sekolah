

<?php $__env->startSection('konten'); ?>
<!-- FORM PENCARIAN -->
<div class="pb-3">
    <form class="d-flex" action="<?php echo e(url('data_asal_sekolah')); ?>" method="get">
        <input class="form-control me-1" type="search" name="katakunci" value="<?php echo e(Request::get('katakunci')); ?>" placeholder="Masukkan kata kunci" aria-label="Search">
        <button class="btn btn-secondary" type="submit">Cari</button>
    </form>
  </div>
    <a href="/data_asal_sekolah/create" class="btn btn-primary mb-2">+ Tambah Data Asal Sekolah</a>
    <table class="table">
        <thead>
            <tr>
                <th>Kode Asal Sekolah</th>
                <th>Nama Asal Sekolah</th>
                <th>Deskripsi</th>
                <th>Kota Asal Sekolah</th>
                <th>Provinsi Asal Sekolah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->kode_asal_sekolah); ?></td>
                    <td><?php echo e($item->nama_asal_sekolah); ?></td>
                    <td><?php echo e($item->deskripsi); ?></td>
                    <td><?php echo e($item->kota_asal_sekolah); ?></td>
                    <td><?php echo e($item->provinsi_asal_sekolah); ?></td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class='btn btn-secondary btn-sm' href="<?php echo e(url('/data_asal_sekolah/'.$item->kode_asal_sekolah)); ?>">Detail</a>
                            <a class='btn btn-warning btn-sm' href="<?php echo e(url('/data_asal_sekolah/'.$item->kode_asal_sekolah.'/edit')); ?>">Edit</a>
                            <form onsubmit="return confirm('Apakah ingin menghapus data')" class='d-inline' action="<?php echo e('/data_asal_sekolah/'.$item->kode_asal_sekolah); ?>" method='post'>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-danger btn-sm ml-1" type="submit">Del</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($data->withQueryString()->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Downloads\xampp\htdocs\data_asal_sekolah\resources\views/data_asal_sekolah/index.blade.php ENDPATH**/ ?>