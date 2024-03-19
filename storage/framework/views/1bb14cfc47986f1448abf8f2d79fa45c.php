

<?php $__env->startSection('konten'); ?>
    <div class="w-50 text-center border rounded px-3 py-3 mx-auto">
        <h1>Selamat Datang</h1>
        <p>Silahkan login atau register untuk masuk ke aplikasi</p>
        <a href="/data_asal_sekolah" class="btn btn-primary btn-lg">LOGIN</a>
        <a href="/data_asal_sekolah/register" class="btn btn-success btn-lg">REGISTER</a>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Downloads\xampp\htdocs\data_asal_sekolah\resources\views/sesi/welcome.blade.php ENDPATH**/ ?>