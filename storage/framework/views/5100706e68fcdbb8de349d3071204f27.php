<?php $__env->startComponent('mail::message'); ?>

    <p>Hello <?php echo e($user->name); ?></p>

<?php $__env->startComponent('mail::button', ['url' => url('verify/'.$user->remember_token)]); ?>
    Verify
<?php echo $__env->renderComponent(); ?>

<p>In case you have issue please contact our contact us page. </p>

Thanks<br/>
<?php echo e(config('app.name')); ?>


<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\blog.com\resources\views/emails/register.blade.php ENDPATH**/ ?>