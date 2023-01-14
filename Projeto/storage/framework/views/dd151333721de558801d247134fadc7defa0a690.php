

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tesste para criar novoss artigos </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success"  href="<?php echo e(route('artigos.create')); ?>"> Criar Artigo</a>
        </div>
    </div>
</div>

<?php if($message = Session::get('success')): ?>
<div class="alert alert-success">
    <p><?php echo e($message); ?></p>
</div>
<?php endif; ?>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Tipo</th>
        <th>Marca</th>
        <th>Tamanho</th>
        <th>Sexo</th>

        <th width="280px">Action</th>
    </tr>
    <?php $__currentLoopData = $artigos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artigo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($artigo->id); ?></td>
        <td><?php echo e($artigo->name); ?></td>
        <td><?php echo e($artigo->tipo); ?></td>
        <td><?php echo e($artigo->marca); ?></td>
        <td><?php echo e($artigo->tamanho); ?></td>
        <td><?php echo e($artigo->sexo); ?></td>
        <td>
            <form action="<?php echo e(route('artigos.destroy',$artigo->id)); ?>" method="POST">

                <a class="btn btn-info" href="<?php echo e(route('artigo.show',$artigo->id)); ?>">Apresentar</a>

                <a class="btn btn-primary" href="<?php echo e(route('artigo.edit',$artigo->id)); ?>">Editar</a>

                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>

                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>


<!--
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Reference</th>
        <th>Brand</th>
        <th>Capacity</th>
        <th>Airport ID</th>
        <th width="280px">Action</th>
    </tr>
    <?php $__currentLoopData = $flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($flight->id); ?></td>
        <td><?php echo e($flight->reference); ?></td>
        <td><?php echo e($flight->brand); ?></td>
        <td><?php echo e($flight->capacity); ?></td>
        <td><?php echo e($flight->airport->name); ?></td>
        <td>
            <form action="<?php echo e(route('flights.destroy',$flight->id)); ?>" method="POST">

                <a class="btn btn-info" href="<?php echo e(route('flights.show',$flight->id)); ?>">Show</a>
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\sergi\Documents\GitHub\Lab.Prog.2022\Projeto\resources\views/artigos/index.blade.php ENDPATH**/ ?>