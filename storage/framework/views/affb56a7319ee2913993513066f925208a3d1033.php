<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('category')); ?>">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('cart')); ?>">Cart
            <span class="badge badge-pill bg-primary cart-count">0</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('wishlist')); ?>">Wishlist
          <span class="badge badge-pill bg-success wishlist-count">0</span>
          </a>
        </li>

        <?php if(auth()->guard()->guest()): ?>
          <?php if(Route::has('login')): ?>
            <li>
              <a class="nav-link" href="<?php echo e(route('login')); ?>"> <?php echo e(__('Login')); ?> </a>
            </li>
          <?php endif; ?>

          <?php if(Route::has('register')): ?>
          <li>
              <a class="nav-link" href="<?php echo e(route('register')); ?>"> <?php echo e(__('Register')); ?> </a>
            </li>
          <?php endif; ?>

          <?php else: ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo e(Auth::user()->name); ?>

              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="<?php echo e(url('my-orders')); ?>">
                      My Orders
                    </a>
                </li>
                  <a class="dropdown-item" href="#">
                      My profile 
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <?php echo e(__('Logout')); ?>

                      </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                          </form>
                  </li>

              </ul>
              </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav><?php /**PATH C:\xampp\htdocs\store\resources\views/layouts/inc/frontnavbar.blade.php ENDPATH**/ ?>