

<?php $__env->startSection('content'); ?>
    <div class="card">

        <div class="card-header">
            <h4>Add Product</h4>
        </div>

        <div class="card-body">
            <form action="<?php echo e(url('insert-product')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" name="cate_id">
                            <option value="">Select a Category</option>
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Small Description</label>
                        <textarea name="small_description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea name="description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <?php if($products->original_price >= 0): ?>
                            <label for="">Original Price</label>
                            <input type="number" class="form-control" step="0.01" min="0.01" max="2000" name="original_price">                  
                            <label class=" badge bg-success"> Preço valido  </label>
                        <?php else: ?>
                            <label class="badge bg-danger"> Preço invalido </label>   
                        <?php endif; ?>
                        
                    </div>
                    <div class="col-md-6 mb-3">
                    <?php if($products->selling_price >= 0): ?>
                            <label for="">Selling Price</label>
                            <input type="number" class="form-control" step="0.01" min="0.01" max="2000" name="original_price">                  
                            <label class=" badge bg-success"> Preço valido  </label>
                        <?php else: ?>
                            <label class="badge bg-danger"> Preço invalido </label>   
                        <?php endif; ?>
                    
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Tax</label>
                        <input type="number" class="form-control" name="tax">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Quantity</label>
                        <input type="number" class="form-control" name="qty">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">trending</label>
                        <input type="checkbox" name="trending">
                    </div>
                    <div class="col-md-12 mb-6">
                        <label for="">Meta Title</label>
                        <input type="text" class="form-control" name="meta_title">
                    </div>
                    <div class="col-md-12 mb-6">
                        <label for="">Meta Keywords</label>
                        <textarea class="form-control" name="meta_keywords" rows="3"></textarea>
                    </div>
                    <div class="col-md-12 mb-6">
                        <label for="">Meta Description</label>
                        <textarea class="form-control" name="meta_description" rows="3"></textarea>
                    </div>
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\store\resources\views/admin/product/add.blade.php ENDPATH**/ ?>