

<?php $__env->startSection('konten'); ?>
    <a href="/data_asal_sekolah" class="btn btn-secondary"><< kembali</a>
    <form method="post" action="<?php echo e(url('/data_asal_sekolah/'.$data->kode_asal_sekolah)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <h1>Kode Asal Sekolah: <?php echo e($data->kode_asal_sekolah); ?></h1>
        </div>
        <div class="mb-3">
            <label for="nama_asal_sekolah" class="form-label">Nama Asal Sekolah</label>
            <input type="text" class="form-control" name="nama_asal_sekolah" id="nama_asal_sekolah" value="<?php echo e($data->nama_asal_sekolah); ?>">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="<?php echo e($data->deskripsi); ?>">
        </div>
        <div class="mb-3">
            <label for="kota_asal_sekolah" class="form-label">Kota Asal Sekolah</label>
            <input type="text" class="form-control" name="kota_asal_sekolah" id="kota_asal_sekolah" value="<?php echo e($data->kota_asal_sekolah); ?>">
        </div>
        <div class="mb-3">
            <label for="provinsi_asal_sekolah" class="form-label">Provinsi Asal Sekolah</label>
            <textarea class="form-control" name="provinsi_asal_sekolah"><?php echo e($data->provinsi_asal_sekolah); ?></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Downloads\xampp\htdocs\data_asal_sekolah\resources\views/data_asal_sekolah/edit.blade.php ENDPATH**/ ?>