

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
        <img class="bd-placeholder-img" width="100%" height="100%" src="https://m.media-amazon.com/images/S/aplus-seller-content-images-us-east-1/ATVPDKIKX0DER/A2H89ZCT4ZX1ST/7f32f438-2a60-4bad-b26f-574243daf396.__CR0,0,970,600_PT0_SX970_V1___.jpg" aria-hidden="true" focusable="false">
        <div class="container">
          <div class="carousel-caption text-start text-info">
            <h1>Lovely Scrubs</h1>
            <p> <strong>Grey's Anatomy by Barco Stretch edition</strong> </p>
            <p><a class="btn btn-lg btn-primary" href="#">Show Products</a></p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="https://m.media-amazon.com/images/S/aplus-media/sc/ed53937d-afc2-42d8-9931-0de5ad694a9d.__CR0,0,970,600_PT0_SX970_V1___.jpg" aria-hidden="true" focusable="false">
        <div class="container">
            <div class="carousel-caption text-info">
                <h1>Sportive Style</h1>
                <p>Grey's Anatomy by Barco Active edition for active people</p>
                <p><a class="btn btn-lg btn-primary" href="#">Show Products</a></p>
            </div>
        </div>
      </div>

      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="https://m.media-amazon.com/images/S/aplus-media/sc/f4c0ea7c-136b-4ff7-8175-210d9716d141.__CR0,0,970,600_PT0_SX970_V1___.jpg" aria-hidden="true" focusable="false">
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


  <div class="container marketing">

        <!-- START THE FEATURETTES -->

        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading"><?php echo e($category->name); ?> <small class="text-muted">See the real quality.</small></h2>
                    <a class="btn btn-lg btn-outline-primary" href="/product-categories/<?php echo e($category->id); ?>/products"> Show Category &raquo;</a>

                </div>
                <div class="col-md-5 order-md-1">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="200" src="https://www.imclivigno.com/wp-content/uploads/2019/11/lg.dna-spin-spiral-preloader.gif" focusable="false">
                </div>
            </div>


        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/product-category/all.blade.php ENDPATH**/ ?>