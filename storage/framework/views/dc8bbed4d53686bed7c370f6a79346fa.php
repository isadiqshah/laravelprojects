<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo e(!empty($meta_title) ? $meta_title : ''); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <?php if(!empty($meta_keywords)): ?>
    <meta content="<?php echo e($meta_keywords); ?>" name="keywords" />
    <?php endif; ?>

    <?php if(!empty($meta_description)): ?>
    <meta content="<?php echo e($meta_description); ?>" name="description" />
    <?php endif; ?>

    <!-- Favicon -->
    <link href="" rel="icon" />
    <link href="<?php echo e(asset('mss (2).png')); ?>" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet"/>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"/>

    <link href="<?php echo e(asset('front/lib/flaticon/font/_flaticon.scss')); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link href="<?php echo e(asset('front/lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('front/lib/lightbox/css/lightbox.min.css')); ?>" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="<?php echo e(asset('front/css/style.css')); ?>" rel="stylesheet" />
</head>

<?php echo $__env->yieldContent('style'); ?>

<body>

<?php echo $__env->make('layouts._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>


<?php echo $__env->make('layouts._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Back to Top -->
<a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo e(url('front/lib/easing/easing.min.js')); ?>"></script>
<script src="<?php echo e(url('front/lib/owlcarousel/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(url('front/lib/isotope/isotope.pkgd.min.js')); ?>"></script>
<script src="<?php echo e(url('front/lib/lightbox/js/lightbox.min.js')); ?>"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="<?php echo e(url('front/js/main.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<?php echo $__env->yieldContent('script'); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\blog.com\resources\views/layouts/app.blade.php ENDPATH**/ ?>