<!-- Parte de cima no login -->

<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>
        <?php echo $__env->yieldContent('title'); ?>
    </title>
   
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link href="<?php echo e(asset('frontend/css/custom.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/css/bootstrap5.css')); ?>" rel="stylesheet">

    
    <link href="<?php echo e(asset('frontend/css/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/css/owl.theme.default.min.css')); ?>" rel="stylesheet">
    
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="undefined" crossorigin="anonymous">

    <style>
        a{
            text-decoration: none;
        }
    </style>

</head>

<body>
    <?php echo $__env->make('layouts.inc.frontnavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>    


    <script src="<?php echo e(asset('frontend/js/jquery-3.6.0.min.js')); ?>"> </script>
    <script src="<?php echo e(asset('frontend/js/bootstrap.bundle.min.js')); ?>"> </script>
    <script src="<?php echo e(asset('frontend/js/owl.carousel.min.js')); ?>"> </script>
    <script src="<?php echo e(asset('frontend/js/custom.js')); ?>"> </script>
    <script src="<?php echo e(asset('frontend/js/checkout.js')); ?>"> </script>


    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/63c7ad8547425128790e4d3c/1gn1vrks6';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if(session('status')): ?>
        <script>
            swal("<?php echo e(session('status')); ?>");
        </script>
    <?php endif; ?>
    
    <?php echo $__env->yieldContent('scripts'); ?>
    
</body>

</html><?php /**PATH C:\xampp\htdocs\store\resources\views/layouts/front.blade.php ENDPATH**/ ?>