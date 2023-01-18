

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
                <a href="<?php echo e(url('cart')); ?>">
                    Cart
                </a>
            </h6>
        </div>
    </div>


    <div class="container my-5">
        <div class="card shadow">
            <?php if($cartitems->count() > 0): ?>
                <div class="card-body">
                <?php $total = 0; ?>
                <?php $__currentLoopData = $cartitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row prodct_data">
                        <div class="col-md-2 my-auto">
                            <img src="<?php echo e(asset('assets/uploads/product/'.$item->products->image)); ?>" height="70px" width="65px" alt="Image here">
                        </div>
                        <div class="col-md-3 my-auto">
                            <h6><?php echo e($item->products->name); ?></h6>
                        </div>
                        <div class="col-md-2 my-auto">
                            <h6>€ <?php echo e($item->products->selling_price); ?></h6>
                        </div>
                        <div class="col-md-3 my-auto">
                            <input type="hidden" class="prod_id" value="<?php echo e($item->prod_id); ?>">
                            <?php if( $item->products->qty >= $item->prod_qty ): ?>
                                <label for="Quantity">Quantity</label>
                                <div class="input-group text-center mb-3" style="width:130px;">
                                    <button class="input-group-text changeQuantity decrement-btn">-</button>
                                    <input type="text" name="quantity" class="form-control qty-input text-center" value="<?php echo e($item->prod_qty); ?>">
                                    <button class="input-group-text changeQuantity increment-btn">+</button>
                                </div>
                                <?php $total += $item->products->selling_price * $item->prod_qty; ?>
                            <?php else: ?>
                                <h6>Out of Stock< /h6>
                            <?php endif; ?>    
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-danger delete-cart-item"> <i class="fa fa-trash"></i> Remove</button>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              
                <div class="card-footer">
                    <h6>Total Price : € <?php echo e($total); ?>

                        <a href="<?php echo e(url('checkout')); ?>" class="btn btn-outline-success float-end">Proceed to Checkout</a>
                    </h6>
                </div>
            <?php else: ?> 
                <div class="card-body text-center">
                    <h2>Your <i class="fa fa-shopping-cart"></i> Cart is empty</h2>
                    <a href="<?php echo e(url('category')); ?>" class="btn btn-outline-primary float-end">Continue Shpping</a>
                </div>
            <?php endif; ?>    
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\store\resources\views/frontend/cart.blade.php ENDPATH**/ ?>