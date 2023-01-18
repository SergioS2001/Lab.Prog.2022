<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo"><a href="#" class="simple-text logo-normal">
          STORE
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php echo e(Request::is('dashboard') ? 'active':''); ?> ">
            <a class="nav-link" href="#">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item <?php echo e(Request::is('categories') ? 'active':''); ?> ">
            <a class="nav-link" href="<?php echo e(url('categories')); ?>">
              <i class="material-icons">dashboard</i>
              <p>Categories</p>
            </a>
          </li>
          <li class="nav-item <?php echo e(Request::is('add-category') ? 'active':''); ?>">
            <a class="nav-link" href="<?php echo e(url('add-category')); ?>">
              <i class="material-icons">dashboard</i>
              <p>Add Categories</p>
            </a>
          </li><li class="nav-item <?php echo e(Request::is('products') ? 'active':''); ?> ">
            <a class="nav-link" href="<?php echo e(url('products')); ?>">
              <i class="material-icons">dashboard</i>
              <p>Products</p>
            </a>
          </li>
          <li class="nav-item <?php echo e(Request::is('add-products') ? 'active':''); ?>">
            <a class="nav-link" href="<?php echo e(url('add-products')); ?>">
              <i class="material-icons">dashboard</i>
              <p>Add Products</p>
            </a>
          </li>

          <li class="nav-item <?php echo e(Request::is('orders') ? 'active':''); ?>">
            <a class="nav-link" href="<?php echo e(url('orders')); ?>">
              <i class="material-icons">content_paste</i>
              <p>Orders</p>
            </a>
          </li>
          <li class="nav-item <?php echo e(Request::is('users') ? 'active':''); ?>">
            <a class="nav-link" href="<?php echo e(url('users')); ?>">
              <i class="material-icons">people</i>
              <p>Users</p>
            </a>
          </li>
        </ul>
      </div>
    </div><?php /**PATH C:\xampp\htdocs\store\resources\views/layouts/inc/sidebar.blade.php ENDPATH**/ ?>