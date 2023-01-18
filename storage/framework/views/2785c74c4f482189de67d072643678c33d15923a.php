

<?php $__env->startSection('content'); ?>
    <div class="card">

        <div class="card-header">
            <h4>Edit/Update Category</h4>
        </div>

        <div class="card-body">
        <form action="<?php echo e(url('update-category/'.$category->id)); ?>" method="POST" enctype="multipart/form-data">
           <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" value="<?php echo e($category->name); ?>" class="form-control" name="name">
                </div> 
                <div class="col-md-12 mb-3">
                    <label for="">description</label>
                    <textarea name="description" rows="3" class="form-control"> <?php echo e($category->description); ?> </textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" <?php echo e($category->status == "1" ? 'checked':''); ?> name="status">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Popular</label>
                    <input type="checkbox" <?php echo e($category->popular == "1" ? 'checked':''); ?> name="popular">
                </div>

                <div class="col-md-12 mb-6">
                    <label for="">Meta Title</label>
                    <input type="text" value="<?php echo e($category->meta_title); ?>" class="form-control" name="meta_title">
                </div>
                <div class="col-md-12 mb-6">
                    <label for="">Meta Keywords</label>
                    <textarea class="form-control" name="meta_keywords" rows="3"> <?php echo e($category->meta_keywords); ?> </textarea>
                </div>
                <div class="col-md-12 mb-6">
                    <label for="">Meta Description</label>
                    <textarea class="form-control" name="meta_description" rows="3"> <?php echo e($category->meta_descrip); ?> </textarea>
                </div>

                <?php if($category->image): ?>
                    <img src="<?php echo e(asset('assets/uploads/category/'.$category->image)); ?>" alt="Category image">
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\store\resources\views/admin/category/edit.blade.php ENDPATH**/ ?>