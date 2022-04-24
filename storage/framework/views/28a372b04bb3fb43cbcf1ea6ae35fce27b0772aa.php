

<?php $__env->startSection('content'); ?>

<main>
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal"><?php echo e($product->name); ?></h1>
      <p class="lead fw-normal">Your Choice</p>
      <a class="btn btn-outline-dark" href="#">Add to Cart</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block">
    </div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block">
    </div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5  text-white overflow-hidden " >
      <div class="my-3 py-3 ">
        <h2>Description:</h2>
        <p class="lead"><?php echo e($product->description); ?></p>

        <h3>How This Was Made:</h3>
        <p>This product was responsibly designed utilizing recycled materials from post-consumer <br> 
          and/or post-manufactured waste. One of our biggest steps on our journey to zero carbon <br>
          and zero waste is in choosing our materials because they account for more than 70% of any product’s footprint. <br>
          By reusing existing plastics, yarns, and textiles, we significantly reduce our emissions.  <br>
          Our goal is to use as much recycled materials as possible without compromising on performance, durability and style. <br>
          Learn more about our Move to Zero journey towards zero carbon and zero waste, <br> 
          including how we're working to design product with sustainability in mind and help protect the future of where we live and play.
        </p>
        <img src="https://www.barcouniforms.com/wp-content/uploads/2021/02/Garment-Image-5-bottles.gif" width="80%" alt="<?php echo e($product->name); ?>">
          
      </div>
    </div>
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <img src="<?php echo e($product->image); ?>">
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 150px; border-radius: 21px 21px 0 0;">
        <img src="https://www.majas-lapu-izstrade.lv/wp-content/uploads/2018/11/woocommerce-all-product-review-average-rating.gif" width="100%" alt="<?php echo e($product->name); ?>">
      </div>
    </div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5" style="color:red">€ <?php echo e($product->price); ?></h2>
        <p class="lead">Tax VAT not included</p>
        <div>
          <label for="quantity">Quantity :</label>
          <input type="number" name="quantity" class="" min="1" max="<?php echo e($product->quantity); ?>">
          <span>  ( Max: <?php echo e($product->quantity); ?> pieces )</span>
        </div>
      </div>
      <div class="bg-dark shadow-sm mx-auto d-flex align-items-center justify-content-center text-white " style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
        <a href="#">
          <img src="https://cdn.dribbble.com/users/146773/screenshots/4228811/dribble_cart.gif" alt="<?php echo e($product->name); ?>">
        </a>
      </div>
    </div>
    <div class="bg-primary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <img src="https://i.shgcdn.com/f0178b5f-1622-4f83-a2c5-93e0cf511518/-/format/auto/-/preview/3000x3000/-/quality/lighter/" width="80%" alt="<?php echo e($product->name); ?>">
      </div>
    </div>
  </div>

  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/product/show.blade.php ENDPATH**/ ?>