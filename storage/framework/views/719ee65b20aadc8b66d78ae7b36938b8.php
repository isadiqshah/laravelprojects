<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <?php if(Auth::user()->role === 1): ?>

            <li class="nav-item">
                <a class="nav-link <?php if(Request::segment(2) !== 'dashboard'): ?> collapsed <?php endif; ?>"
                   href="<?php echo e(route('dashboard')); ?>">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>



            <li class="nav-item">
                <a class="nav-link <?php if(Request::segment(2) !== 'category'): ?> collapsed <?php endif; ?>"
                   href="<?php echo e(route('category')); ?>">
                    <i class="bi bi-list"></i>
                    <span>Categories</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php if(Request::segment(2) !== 'user'): ?> collapsed <?php endif; ?>"
                   href="<?php echo e(route('user')); ?>">
                    <i class="bi bi-person"></i>
                    <span>Users</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php if(Request::segment(2) !== 'blog'): ?> collapsed <?php endif; ?>"
                   href="<?php echo e(route('blog_list')); ?>">
                    <i class="fas fa-pencil-alt"></i>
                    <span>Blogs</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php if(Request::segment(2) !== 'page'): ?> collapsed <?php endif; ?>"
                   href="<?php echo e(route('page')); ?>">
                    <i class="bi bi-file-richtext"></i>
                    <span>Pages</span>
                </a>
            </li>


        <li class="nav-item">
            <a class="nav-link <?php if(Request::segment(2) !== 'gallery'): ?> collapsed <?php endif; ?>"
               href="<?php echo e(route('gallery_images')); ?>">
                <i class="bi bi-images"></i>
                <span>Gallery</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php if(Request::segment(2) !== 'services'): ?> collapsed <?php endif; ?>"
               href="<?php echo e(route('services')); ?>">
                <i class="fas fa-briefcase fa-3x"></i>
                <span>Our Services</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php if(Request::segment(2) !== 'order'): ?> collapsed <?php endif; ?>"
               href="<?php echo e(route('order')); ?>">
                <i class="fas fa-inbox fa-3x"></i>
                <span>All Orders</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php if(Request::segment(2) !== 'slider'): ?> collapsed <?php endif; ?>"
               href="<?php echo e(route('slider')); ?>">
                <i class="bi bi-sliders"></i>
                <span>Homepage Slider</span>
            </a>
        </li>



        <li class="nav-item">
            <a class="nav-link <?php if(Request::segment(2) !== 'edit_password'): ?> collapsed <?php endif; ?>"
               href="<?php echo e(route('edit_password')); ?>">
                <i class="fas fa-key"></i>
                <span>Change Password</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link <?php if(Request::segment(2) !== 'help'): ?> collapsed <?php endif; ?>"
               href="<?php echo e(url('panel/help/list')); ?>">
                <i class="bi bi-question-circle"></i>
                <span>Help</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php if(Request::segment(2) !== 'inbox'): ?> collapsed <?php endif; ?>"
               href="<?php echo e(route('inbox')); ?>">
                <i class="bi bi-envelope"></i>
                <span>Inbox</span>
            </a>
        </li>
        <?php endif; ?>


    </ul>

</aside>
<?php /**PATH C:\xampp\htdocs\blog.com\resources\views/backend/layouts/_sidebar.blade.php ENDPATH**/ ?>