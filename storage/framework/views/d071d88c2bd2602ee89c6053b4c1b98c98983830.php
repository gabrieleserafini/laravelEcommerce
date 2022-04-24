

<?php $__env->startSection('content'); ?>
    <div class="pb-3">
        <h2> Product Category || Edit Category </h2>
    </div>
    <form action="/product-categories/<?php echo e($productCategory->id); ?>" method="POST" class="border mt-5" >
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group p-3">
            <label for="name">Name</label>
            <input class="form-control" id="name" name="name" value="<?php echo e($productCategory->name); ?>">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
               <div class="alert alert-danger mt-2"> <?php echo e($message); ?> </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        </div>
        <div class="form-group p-3">
            <label for="product-category">Product Category</label>
            <select class="form-control" id="product-category" name="product-category-id">
                    <option value="">-Select Primary Category</option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>"\ 
                    <?php if($category->id === $productCategory->product_category_id): ?> selected <?php endif; ?>
                    >
                        <?php echo e($category->name); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="p-3" >
            
            <button class="btn btn-primary ">Edit</button>
            
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backoffice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/product-category/edit.blade.php ENDPATH**/ ?>