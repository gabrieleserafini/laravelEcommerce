

<?php $__env->startSection('content'); ?>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="https://m.media-amazon.com/images/S/aplus-media/sc/ed53937d-afc2-42d8-9931-0de5ad694a9d.__CR0,0,970,600_PT0_SX970_V1___.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        <div class="container">
          <div class="carousel-caption text-start text-info">
            <h1>Lovely Scrubs</h1>
            <p> <strong>Grey's Anatomy by Barco Stretch edition</strong> </p>
            <p><a class="btn btn-lg btn-primary" href="#">Show Products</a></p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="https://m.media-amazon.com/images/S/aplus-seller-content-images-us-east-1/ATVPDKIKX0DER/A2H89ZCT4ZX1ST/7f32f438-2a60-4bad-b26f-574243daf396.__CR0,0,970,600_PT0_SX970_V1___.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        <div class="container">
            <div class="carousel-caption text-info">
                <h1>Sportive Style</h1>
                <p>Grey's Anatomy by Barco Active edition for active people</p>
                <p><a class="btn btn-lg btn-primary" href="#">Show Products</a></p>
            </div>
        </div>
      </div>

      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="https://m.media-amazon.com/images/S/aplus-media/sc/f4c0ea7c-136b-4ff7-8175-210d9716d141.__CR0,0,970,600_PT0_SX970_V1___.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        <div class="container">
          <div class="carousel-caption text-end text-info">
            <h1>Luxury Apparel</h1>
            <p>Grey's Anatomy by Barco Signature edition, all for style</p>
            <p><a class="btn btn-lg btn-primary" href="#">Show Products</a></p>
          </div>
        </div>
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <div class="container marketing pt-5">

    <!--  columns of text below the carousel -->
    <div class="row">

        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle shadow mb-1 bg-body rounded" width="200" height="200" src="<?php echo e($product->image); ?>" focusable="false">

                <h2><a href="/products/<?php echo e($product->id); ?>" class="text-reset text-decoration-none"><?php echo e($product->name); ?></a></h2>
                <p><?php echo e($product->description); ?></p>
                <p> <strong> € <?php echo e($product->price); ?></strong></p>
                <p><a class="btn btn-secondary" href="/products/<?php echo e($product->id); ?>">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading"><?php echo e($product->name); ?> <span class="text-muted">Made for you.</span></h2>
                <p class="lead"><?php echo e($product->description); ?></p>
                <p>
                  <span class="p-1"> <strong> € <?php echo e($product->price); ?>  </strong>  </span> 
                  <a class="btn btn-lg btn-outline-warning" href="#"> Add to Cart </a> 
                  <img src="https://cdn.dribbble.com/users/1914549/screenshots/5374040/day24.gif" width="170" alt=""> 
                </p>
                <div class="pt-2">
                  <p><a class="btn btn-lg btn-secondary" href="/products/<?php echo e($product->id); ?>">View details &raquo;</a></p>
                </div>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="<?php echo e($product->image); ?>" focusable="false">
            </div>
        </div>


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/product/all.blade.php ENDPATH**/ ?>