<!-- Footer Start -->
<div
    class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5"
>
    <div class="row pt-5">
        <div class="col-lg-4 col-md-6 mb-5">
            <a href="<?php echo e(route('home')); ?>" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px; height: 120px;">
                <img src="<?php echo e(asset('front/img/logoFFF.svg')); ?>" alt="Your Logo"
                     style="margin-top: -40px; height: 6vw; width: auto;">
            </a>

            <p style="margin-top: -20px">
                Welcome to our Website, where we're passionate about simplifying the visa process for travelers worldwide.
                With five years of experience in navigating<br> visa requirements, our team is dedicated to providing valuable insights,
                tips,<br> and guidance to help you embark on your journeys hassle-free. Let us be your trusted companion on your
                quest to explore the world.
            </p>
            <div class="d-flex justify-content-start mt-4">
                <a
                    class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="https://www.youtube.com/@sadiqshah7"
                ><i class="fab fa-youtube"></i
                    ></a>
                <a
                    class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="https://www.facebook.com/isadiqshah"
                ><i class="fab fa-facebook-f"></i
                    ></a>
                <a
                    class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="https://www.linkedin.com/in/isadiqshah/"
                ><i class="fab fa-linkedin-in"></i
                    ></a>
                <a
                    class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="https://www.instagram.com/isadiqshah"
                ><i class="fab fa-instagram"></i
                    ></a>
            </div>
        </div>

        <div class="col-lg-2 col-md-6 mb-5">
            <h3 class="text-primary mb-4">Quick Links</h3>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="<?php echo e(route('home')); ?>"><i class="fa fa-angle-right mr-2"></i>Home</a>
                <a class="text-white mb-2" href="<?php echo e(route('about')); ?>"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                <a class="text-white mb-2" href="<?php echo e(route('gallery')); ?>"><i class="fa fa-angle-right mr-2"></i>Gallery</a>
                <a class="text-white mb-2" href="<?php echo e(route('blog')); ?>"><i class="fa fa-angle-right mr-2"></i>Our Blog</a>
                <a class="text-white" href="<?php echo e(route('contact')); ?>"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                <a class="text-white" href="<?php echo e(route('contact')); ?>"><i class="fa fa-angle-right mt-2 mr-2"></i>FAQs</a>
            </div>
        </div>
        <div class="col-lg-2 col-md-6 mb-5">
            <h3 class="text-primary mb-4">Blog Categories</h3>
                 <?php
                    $getCategoryHeader = \App\Models\Category::getCategoryMenu();
                 ?>
                <div class="d-flex flex-column justify-content-start">
                    <?php $__currentLoopData = @$getCategoryHeader; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $CategoryHeader): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('blog_detail', $CategoryHeader->slug)); ?>"
                           class="text-white  <?php if(Request::segment(3) == $CategoryHeader->slug): ?> active <?php endif; ?>">
                            <i class="fa fa-angle-right mt-2 mr-2"></i>
                            <?php echo e($CategoryHeader->name); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h3 class="text-primary mb-4">Get In Touch</h3>
            <div class="d-flex">
                <h4 class="fa fa-map-marker-alt text-primary"></h4>
                <div class="pl-3">
                    <h5 class="text-white">Address</h5>
                    <p><a href="https://www.google.com/maps/search/?api=1&query=97+Street%2C+Sector+G-11%2C+Islamabad%2C+Pakistan"
                          class="text-decoration-none text-white">97 Street, Sector G-11, Islamabad, Pakistan</a></p>
                </div>
            </div>
            <div class="d-flex">
                <h4 class="fa fa-envelope text-primary"></h4>
                <div class="pl-3">
                    <h5 class="text-white">Email</h5>
                    <p><a href="mailto:sadiqshah77881@gmail.com" class="text-decoration-none text-white">sadiqshah77881@gmail.com</a></p>
                </div>
            </div>
            <div class="d-flex">
                <h4 class="fa fa-phone-alt text-primary"></h4>
                <div class="pl-3">
                    <h5 class="text-white">Phone</h5>
                    <p><a href="tel:+923439428065" class="text-decoration-none text-white">+92 343 9428065</a></p>
                </div>
            </div>
        </div>
    </div>
    <div
        class="container-fluid pt-5"
        style="border-top: 1px solid rgba(23, 162, 184, 0.2) ;">
        <p class="m-0 text-center text-white">
            © <?php echo e(date('Y')); ?> Copyright:
            <a class="text-primary font-weight-bold" href="<?php echo e(route('home')); ?>">SadiqShah</a>.
            All Rights Reserved.
        </p>
    </div>
</div>
<!-- Footer End -->
<?php /**PATH C:\xampp\htdocs\blog.com\resources\views/layouts/_footer.blade.php ENDPATH**/ ?>