
<div class="container-fluid bg-light position-fixed shadow" style="z-index: 999;">
    <nav
        class="navbar navbar-expand-lg bg-light navbar-light py- py-lg-0 px-0 px-lg-5">
        <div class="d-flex align-items-center justify-content-between">
            <a href="<?php echo e(route('home')); ?>" class="logo d-flex align-items-center">
                <img src="<?php echo e(asset('front/img/logoHHH.png')); ?>" alt="Your Logo"
                     style="height: 4.5vw; width: auto; margin-top: -80px; margin-bottom: -80px">
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>

        <button
            type="button"
            class="navbar-toggler"
            data-toggle="collapse"
            data-target="#navbarCollapse"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <?php
            $getCategoryHeader = \App\Models\Category::getCategoryMenu();
            ?>
            <div class="navbar-nav font-weight-bold mx-auto py-0">
                <a href="<?php echo e(route('home')); ?>"
                   class="nav-item nav-link<?php echo e(Request::route()->getName() === 'home' ? ' active' : ''); ?>">Home</a>
                <a href="<?php echo e(route('about')); ?>"
                   class="nav-item nav-link<?php echo e(Request::route()->getName() === 'about' ? ' active' : ''); ?>">About</a>
                <a href="<?php echo e(route('gallery')); ?>"
                   class="nav-item nav-link<?php echo e(Request::route()->getName() === 'gallery' ? ' active' : ''); ?>">Gallery</a>
                <?php $__currentLoopData = @$getCategoryHeader; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $CategoryHeader): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('blog_detail', $CategoryHeader->slug)); ?>"
                       class="nav-item nav-link <?php if(Request::segment(3) == $CategoryHeader->slug): ?> active <?php endif; ?>"><?php echo e($CategoryHeader->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('blog')); ?>"
                   class="nav-item nav-link<?php echo e(Request::route()->getName() === 'blog' ? ' active' : ''); ?>">Blog</a>
                <a href="<?php echo e(route('contact')); ?>"
                   class="nav-item nav-link<?php echo e(Request::route()->getName() === 'contact' ? ' active' : ''); ?>">Contact
                    Us</a>
            </div>

            <?php if(auth()->check() && auth()->user()->role === 1): ?>
                <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-primary px-4 mr-2">Admin Panel</a>
            <?php endif; ?>

            <?php if(auth()->check()): ?>
                <a href="<?php echo e(route('logout')); ?>" class="btn btn-primary px-4">Logout</a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="btn btn-primary px-4">Login</a>
                <a href="<?php echo e(url('register')); ?>" style="margin-left: 8px" class="btn btn-primary px-4">Register</a>
            <?php endif; ?>

        </div>
    </nav>
</div>
<!-- Navbar End -->
<?php /**PATH C:\xampp\htdocs\blog.com\resources\views/layouts/_header.blade.php ENDPATH**/ ?>