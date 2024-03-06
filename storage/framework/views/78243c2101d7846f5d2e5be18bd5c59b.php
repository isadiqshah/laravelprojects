<?php $__env->startComponent('mail::message'); ?>
    # Order Placed

    Your order has been placed successfully. Here are the order details:

    <?php $__env->startComponent('mail::table'); ?>
        | Attribute     | Value          |
        | ------------- | -------------- |
        <?php $__currentLoopData = $order->getAttributes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            | <?php echo e(ucfirst(str_replace('_', ' ', $key))); ?> | <?php echo e($value); ?> |
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php echo $__env->renderComponent(); ?>

    Thanks,
    <?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\blog.com\resources\views/emails/order_placed.blade.php ENDPATH**/ ?>