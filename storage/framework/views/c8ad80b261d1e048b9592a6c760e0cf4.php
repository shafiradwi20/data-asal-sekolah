

<?php $__env->startSection('konten'); ?>
<h1><?php echo e($judul); ?></h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum iure laborum saepe inventore? Molestias quae odit incidunt inventore necessitatibus eum.</p>
<p>
    <ul>
        <li>Email: <?php echo e($kontak['email']); ?></li>
        <li>Youtube: <?php echo e($kontak['youtube']); ?></li>
    </ul>
</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Downloads\xampp\htdocs\data_asal_sekolah\resources\views/halaman/kontak.blade.php ENDPATH**/ ?>