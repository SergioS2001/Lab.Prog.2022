

<?php $__env->startSection('title'); ?>
    My Cart
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0"> 
                <a href="<?php echo e(url('/')); ?>">
                    Home
                </a> /
                <a href="<?php echo e(url('wishlist')); ?>">
                    Wishlist
                </a>
            </h6>
        </div>
    </div>


    <div class="container my-5">
        <div class="card shadow">
            <div class="card-body">
                <?php if($wishlist->count() > 0): ?>
               
                    <?php $__currentLoopData = $wishlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row product_data">
                            <div class="col-md-2 my-auto">
                                <img src="<?php echo e(asset('assets/uploads/product/'.$item->products->image)); ?>" height="70px" width="65px" alt="Image here">
                            </div>
                            <div class="col-md-2 my-auto">
                                <h6><?php echo e($item->products->name); ?></h6>
                            </div>
                        <div class="col-md-2 my-auto">
                            <h6>€ <?php echo e($item->products->selling_price); ?></h6>
                        </div>
                        <div class="col-md-2 my-auto">
                            <input type="hidden" class="prod_id" value="<?php echo e($item->prod_id); ?>">
                            <?php if( $item->products->qty >= $item->prod ): ?>
                                <label for="Quantity">Quantity</label>
                                <div class="input-group text-center mb-3" style="width:130px;">
                                    <button class="input-group-text decrement-btn">-</button>
                                    <input type="text" name="quantity" class="form-control qty-input text-center" value="1">
                                    <button class="input-group-text increment-btn">+</button>
                                </div>
                            <?php else: ?>
                                <h6>Out of Stock< /h6>
                            <?php endif; ?>    
                        </div>
                        <div class="col-md-2 my-auto">
                            <button class="btn btn-success addToCartBtn"> <i class="fa fa-shopping-cart"></i> Add to Cart</button>
                        </div>
                        <div class="col-md-2 my-auto">
                            <button class="btn btn-danger remove-wishlist-item"> <i class="fa fa-trash"></i> Remove</button>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
                <?php else: ?>
                    <h4>There are no products in your Wishlist</h4>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\store\resources\views/frontend/wishlist.blade.php ENDPATH**/ ?>