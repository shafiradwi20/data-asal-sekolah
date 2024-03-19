

<?php $__env->startSection('konten'); ?>
<div class="d-flex align-items-center justify-content-center vh-100" style="background-image: url('https://images.pexels.com/photos/399160/pexels-photo-399160.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <a href="/sesi" class="btn btn-secondary"><< Kembali</a>
        <h1>Register</h1>
        <form action="/sesi/create" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" value="<?php echo e(Session::get('name')); ?>" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="<?php echo e(Session::get('email')); ?>" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email_confirmation" class="form-label">Confirm Email</label>
                <input type="email" name="email_confirmation" class="form-control">
            </div>
            <?php $__errorArgs = ['email_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Downloads\xampp\htdocs\data_asal_sekolah\resources\views/sesi/register.blade.php ENDPATH**/ ?>