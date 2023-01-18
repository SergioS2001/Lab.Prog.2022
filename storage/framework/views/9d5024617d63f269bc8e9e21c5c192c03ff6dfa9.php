

<?php $__env->startSection('title'); ?>
    welcome to Store
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.inc.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Featured Products</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    <?php $__currentLoopData = $featured_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <div class="item">
                    <a href="<?php echo e(url('product/'. $prod->name)); ?>">
                        <div class="card">
                            <img src="<?php echo e(asset('assets/uploads/product/'. $prod->image)); ?>" alt="Product image">
                            <div class="card-body">
                                <h5><?php echo e($prod->name); ?></h5>
                                <span class="float-start"> <?php echo e($prod->selling_price); ?></span>
                                <span class="float-end"> <s> <?php echo e($prod->original_price); ?> </s></span>
                            </div>
                        </div>
                        </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </div>
                    
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Trending Category</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    <?php $__currentLoopData = $trending_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <div class="item">
                        <a href="<?php echo e(url('category/'.$tcategory->name)); ?>">
                            <div class="card">
                                <img src="<?php echo e(asset('assets/uploads/category/'. $tcategory->image)); ?>" alt="Category image">
                                <div class="card-body">
                                    <h5><?php echo e($tcategory->name); ?></h5>
                                    <p>
                                        <?php echo e($tcategory->description); ?>

                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </div>
                    
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $('.featured-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }   
        })
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\store\resources\views/frontend/index.blade.php ENDPATH**/ ?>