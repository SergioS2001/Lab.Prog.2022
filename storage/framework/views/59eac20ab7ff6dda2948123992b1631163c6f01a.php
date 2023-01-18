

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h4>Poducts Page</h4>
            <hr>
        </div>

        <div class="card-body">
            <?php echo csrf_field(); ?>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Selling Price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
            
                <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->id); ?></td>
                        <td><?php echo e($item->category->name); ?></td>
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e($item->selling_price); ?></td>
                        <td>
                            <img src="<?php echo e(asset('assets/uploads/product/'. $item->image)); ?>" class="cate-image" alt="Image Here">
                        </td>
                        <td>
                            <a href="<?php echo e(url('edit-product/'.$item->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="<?php echo e(url('delete-product/'.$item->id)); ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\store\resources\views/admin/product/index.blade.php ENDPATH**/ ?>