

<?php $__env->startSection('content'); ?>
    <div class="card">

        <div class="card-header">
            <h4>Edit/Update Product</h4>
        </div>

        <div class="card-body">
            <form action="<?php echo e(url('update-product/'.$products->id)); ?>" method="POST" enctype="multipart/form-data">   
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Category</label>
                        <select class="form-select">
                            <option value=""><?php echo e($products->category->name); ?></option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" value="<?php echo e($products->name); ?>" name="name">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Small Description</label>
                        <textarea name="small_description" rows="3" class="form-control"> <?php echo e($products->small_description); ?> </textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea name="description" rows="3" class="form-control"> <?php echo e($products->description); ?> </textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Original Price</label>
                        <input type="number" value="<?php echo e($products->original_price); ?>" class="form-control" name="original_price">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Selling Price</label>
                        <input type="number" value="<?php echo e($products->selling_price); ?>" class="form-control" name="selling_price">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Tax</label>
                        <input type="number" value="<?php echo e($products->tax); ?>" class="form-control" name="tax">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Quantity</label>
                        <input type="number" value="<?php echo e($products->qty); ?>" class="form-control" name="qty">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" <?php echo e($products->status == "1" ? 'checked':''); ?> name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">trending</label>
                        <input type="checkbox"  <?php echo e($products->trending == "1" ? 'checked':''); ?>  name="trending">
                    </div>
                    <div class="col-md-12 mb-6">
                        <label for="">Meta Title</label>
                        <input type="text" value="<?php echo e($products->meta_title); ?>" class="form-control" name="meta_title">
                    </div>
                    <div class="col-md-12 mb-6">
                        <label for="">Meta Keywords</label>
                        <textarea class="form-control" name="meta_keywords" rows="3">  <?php echo e($products->meta_keywords); ?> </textarea>
                    </div>
                    <div class="col-md-12 mb-6">
                        <label for="">Meta Description</label>
                        <textarea class="form-control" name="meta_description" rows="3">  <?php echo e($products->meta_description); ?> </textarea>
                    </div>

                    <?php if($products->image): ?>
                        <img src="<?php echo e(asset('assets/uploads/product/'.$products->image)); ?>" alt="">
                    <?php endif; ?>
 
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\store\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>