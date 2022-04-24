

<?php $__env->startSection('content'); ?>
    <?php if(session('hasError')): ?>
        <div class="alert alert-danger mt-2">
            <?php if(session('action') === 'destroy'): ?>
                Delete action not allowed: check if the selected category has child
            <?php endif; ?>
        </div>
    
    <?php endif; ?>
    <div class="pb-3">
        <h1>Home || Product Categories Managment</h1>
    </div>

    <table class="table mt-5">
        <thread>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Primary Category</th>
                <th>Edit/Delete</th>
            </tr>
        </thread>
        <tbody>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($category->id); ?></td>
                    <td><?php echo e($category->name); ?></td>
                    <td><?php echo e($category->product_category_id); ?></td>
                    <td>
                        <a href="/product-categories/<?php echo e($category->id); ?>/edit" class="btn btn-outline-primary">Edit</a>
                        <form class="d-inline" method="POST" action="/product-categories/<?php echo e($category->id); ?>">
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
        <a href="http://homestead.test/product-categories/create" class="btn btn-outline-primary"> Create New Category</a>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backoffice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/product-category/index.blade.php ENDPATH**/ ?>