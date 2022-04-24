

<?php $__env->startSection('content'); ?>
    <form action="/login" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="">Email:</label>
            <input type="email" name="email">
        </div>
        <div class="form-group">
            <label for="">Password:</label>
            <input type="password" name="password">
        </div>
        <div class="row">
           <div class="">
               <button class="btn btn-primary">Login</button>
           </div>
        </div>

        
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/user/login.blade.php ENDPATH**/ ?>