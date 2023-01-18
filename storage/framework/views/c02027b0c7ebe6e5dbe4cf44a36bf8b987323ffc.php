    

<?php $__env->startSection('title', $products->name ); ?>

<?php $__env->startSection('content'); ?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo e(url('/add-rating')); ?>" method="POST">
                <?php echo csrf_field(); ?> 
                <input type="hidden" name="product_id" value="<?php echo e($products->id); ?>">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Rate <?php echo e($products->name); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="rating-css">
                        <div class="star-icon">
                            <input type="radio" value="1" name="product_rating" checked id="rating1">
                            <label for="rating1" class="fa fa-star"></label>
                            <input type="radio" value="2" name="product_rating" id="rating2">
                            <label for="rating2" class="fa fa-star"></label>
                            <input type="radio" value="3" name="product_rating" id="rating3">
                            <label for="rating3" class="fa fa-star"></label>
                            <input type="radio" value="4" name="product_rating" id="rating4">
                            <label for="rating4" class="fa fa-star"></label>
                            <input type="radio" value="5" name="product_rating" id="rating5">
                            <label for="rating5" class="fa fa-star"></label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0"> 
            <a href="<?php echo e(url('category')); ?>">
                Collections
            </a> /
            <a href="<?php echo e(url('category/'.$products->category->name)); ?>">
                <?php echo e($products->category->name); ?>

            </a> /
            <a href="<?php echo e(url('category/'.$products->category->name.'/'.$products->name)); ?>">
                <?php echo e($products->name); ?> 
            </a>
        </h6>
    </div>
</div>

<div class="container">
    <div class="card shadow product_data">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 border-right">
                    <img src="<?php echo e(asset('assets/uploads/product/'.$products->image)); ?>" class="w-100" alt="">
                </div>
                <div class= "col-md-8">
                    <h2 class="mb-0">
                        <?php echo e($products->name); ?>

                        <?php if($products->trending == '1'): ?>
                            <label style="font-size: 16px;" class="float-end badge bg-danger trending _tag">Trending</label>
                        <?php endif; ?>
                    </h2>
                    
                    <hr>
                    <label class="me-3"> Original Price : <s> € <?php echo e($products->original_price); ?></s></label>
                    <label class="fw-bold"> Selling Price : € <?php echo e($products->selling_price); ?> </label>
                    <p class="mt-3 ">
                        <?php echo $products->small_description; ?>

                    </p>
                    
                    <hr>
                    <?php if($products->qty > 0): ?>
                        <label class=" badge bg-success"> In stock </label>
                    <?php else: ?>
                        <label class="badge bg-danger"> Out stock </label>
                    <?php endif; ?>
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <input type="hidden" value="<?php echo e($products->id); ?>" class="prod_id">
                            <label for="Quantity"> Quantity </label>
                            <div class="input-group text-center mb-3" style="width: 130px;">
                                <button class="input-group-text decrement-btn"> - </button>
                                <input type="text" name="quantity" class="form-control qty-input text-center" value="1" />
                                <button class="input-group-text increment-btn"> + </button>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <br/>
                            <?php if($products->qty > 0): ?>
                                <button type="button" class="btn btn-primary me-3 addToCartBtn float-start">Add to Cart <i class="fa fa-shopping-cart"></i> </button>
                            <?php endif; ?>
                                <button type="button" class="btn btn-success me-3 addToWishlist float-start">Add to Wishlist <i class="fa fa-heart"></i> </button>
                        </div>   
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <hr>
                <h3>Description</h3>
                <p class="mt-3">
                    <?php echo $products->description; ?>

                </p>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Rate this product
                </button>
            </div>
        </div>
    </div>
</div>    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\store\resources\views/frontend/products/view.blade.php ENDPATH**/ ?>