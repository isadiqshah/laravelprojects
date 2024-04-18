<?php $__env->startComponent('mail::message'); ?>

    You have received a new message from:<br>

    Name: <?php echo e($request->input('name')); ?>

    Email: <?php echo e($request->input('email')); ?>

    Message: <?php echo e($request->input('message')); ?>


    Thank you.

    <?php echo e(config('app.name')); ?>


<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\blog.com\resources\views/emails/contact_message_received.blade.php ENDPATH**/ ?>