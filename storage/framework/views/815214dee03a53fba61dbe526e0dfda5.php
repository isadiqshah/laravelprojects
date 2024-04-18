<?php $__env->startComponent('mail::message'); ?>
<div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px;">
    <h2>Forgot Password</h2>
    <p>Hello, <?php echo e($user->name); ?></p>
    <p>You recently requested to reset your password for your account. Click the link below to reset it:</p>
    <?php $__env->startComponent('mail::button', ['url' => url('reset/'. $user->remember_token)]); ?>
        Reset Password
    <?php echo $__env->renderComponent(); ?>
    <p>If you did not request a password reset, please ignore this email or contact support.</p>
    <p>Thanks,</p>
    <p><?php echo e(config('app.name')); ?></p>
</div>

<?php echo $__env->renderComponent(); ?><?php /**PATH C:\xampp\htdocs\blog.com\resources\views/emails/forgot.blade.php ENDPATH**/ ?>