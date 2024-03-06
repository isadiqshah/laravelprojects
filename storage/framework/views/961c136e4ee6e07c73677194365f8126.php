<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeHim">
    <title> Feedback Form </title>
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('feedback//css/style.css')); ?>">
    <!-- Demo CSS (No need to include it into your project) -->
    <link rel="stylesheet" href="<?php echo e(asset('feddback//css/demo.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <style>
        .rate-box {
            text-align: center;
            margin-right: 80px;
            margin-bottom: 20px;
            margin-top: -30px;
        }
        .content{
            margin-top: -20px;
            font-size: 25px;
        }
    </style>
</head>
<body>

<main class="cd__main">
    <!-- Start DEMO HTML (Use the following code into your project)-->
    <div class="wrapper">
        <?php echo $__env->make('layouts._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="title">Rate your Experience</div>
        <div class="content">We highly value your feedback! Kindly take a moment to rate your experience and provide us with your valuable feedback.</div>
        <form action="<?php echo e(route('save_order_feedback',['order_id' => $order_id])); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="rate-box">
                <input type="radio" value="5" name="star" id="star0"/>
                <label class="star" for="star0"></label>
                <input type="radio" value="4" name="star" id="star1"/>
                <label class="star" for="star1"></label>
                <input type="radio" value="3" name="star" id="star2" checked="checked"/>
                <label class="star" for="star2"></label>
                <input type="radio" value="2" name="star" id="star3"/>
                <label class="star" for="star3"></label>
                <input type="radio" value="1" name="star" id="star4"/>
                <label class="star" for="star4"></label>
            </div>
            <textarea cols="30" name="feedback" rows="6" placeholder="Tell us about your experience!"></textarea>
            <input type="submit" value="Send" class="submit-btn">
        </form>
    </div>
    <!-- END EDMO HTML (Happy Coding!)-->
</main>

<!-- Script JS -->
<script src="<?php echo e(asset('feedback/js/script.js')); ?>"></script>
<!--$%analytics%$-->
</body>
</html>
<?php /**PATH C:\xampp\htdocs\blog.com\resources\views/feedback.blade.php ENDPATH**/ ?>