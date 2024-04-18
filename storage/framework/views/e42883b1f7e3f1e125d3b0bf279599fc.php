<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo e(!empty($meta_title) ? $meta_title : ''); ?></title>
    <?php if(!empty($meta_keywords)): ?>
        <meta content="<?php echo e($meta_keywords); ?>" name="keywords" />
    <?php endif; ?>

    <?php if(!empty($meta_description)): ?>
        <meta content="<?php echo e($meta_description); ?>" name="description" />
    <?php endif; ?>

    <!-- Favicons -->
    <link href="<?php echo e(asset('assets/img/logo.svg')); ?>" rel="icon">
    <link rel="apple-touch-icon" href="<?php echo e(asset('assets/img/apple-touch-icon.png')); ?>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/quill/quill.snow.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/quill/quill.bubble.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/simple-datatables/style.css')); ?>" rel="stylesheet">

    <!-- Your custom CSS file -->
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">


</head>

<body>

<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center" style="margin-top: 0px">
                            <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('assets/img/logoHHH.png')); ?>" alt="Your Logo"
                                                               style="height: 5vw; width: auto; margin-bottom: 10px"></a>
                        </div>

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Forgot Password</h5>
                                    <p class="text-center small">Enter your email to forgot password</p>
                                </div>

                                <?php echo $__env->make('layouts._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                <form class="row g-3 needs-validation" action="" method="POST">
                                    <?php echo csrf_field(); ?>

                                    <div class="col-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="email" required>
                                    </div>

                                    <div style="text-align: right">Already have an account?
                                        <a href="<?php echo e(url('login')); ?>">Login</a>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Forgot</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Don't have account? <a href="<?php echo e(url('register')); ?>">Create an account</a></p>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo e(asset('assets/vendor/apexcharts/apexcharts.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/chart.js/chart.umd.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/echarts/echarts.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/quill/quill.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/simple-datatables/simple-datatables.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/tinymce/tinymce.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/php-email-form/validate.js')); ?>"></script>

<!-- Template Main JS File -->
<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>


</body>

</html>
<?php /**PATH C:\xampp\htdocs\blog.com\resources\views/auth/forgot.blade.php ENDPATH**/ ?>