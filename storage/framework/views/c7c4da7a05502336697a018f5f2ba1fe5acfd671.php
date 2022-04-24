

<?php $__env->startSection('content'); ?>

<?php if(session('hasError')): ?>
        <div class="alert alert-danger mt-2">
            <?php if(session('action') === 'destroy'): ?>
                Delete action not allowed
            <?php endif; ?>
        </div>
    
<?php endif; ?>

<div class="pb-3">
    <h1>Home || Products Managment </h1>
</div>

<table class="table mt-5">
    <thread>
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thread>
    <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($product->id); ?></td>
                <td>
                    <img src="<?php echo e($product->image); ?>" width="70">
                </td>
                <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->description); ?></td>
                <td>€ <?php echo e($product->price); ?></td>
                <td><?php echo e($product->quantity); ?> pieces</td>
                <td>
                    <a href="/products/<?php echo e($product->id); ?>/edit" class="btn btn-outline-primary">Edit </a>
                </td>
                <td>
                   <form method="POST" action="/products/<?php echo e($product->id); ?>">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        
                        <button class="btn btn-outline-danger">Delete</button>
                    </form> 
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
    <div class="form-group p-3">
        <a href="http://homestead.test/products/create" class="btn btn-outline-primary "> Create New Product</a>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backoffice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/product/index.blade.php ENDPATH**/ ?>