<?php $__env->startComponent('mail::message'); ?>
    <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px;">
        <h2>Forgot Password</h2>
        <p>Hello, <?php echo e($user->name); ?></p>
        <p>You recently requested to register your new account. Click the link below to verify your email:</p>
        <?php $__env->startComponent('mail::button', ['url' => url('verify/' . $user->remember_token)]); ?>
            Verify
        <?php echo $__env->renderComponent(); ?>
        <p>If you have any further issues, please contact us.</p>
        <p>Thanks,</p>
        <p><?php echo e(config('app.name')); ?></p>
    </div>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\blog.com\resources\views/emails/register.blade.php ENDPATH**/ ?>