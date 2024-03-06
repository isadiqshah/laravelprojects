<?php if(!empty(session('success'))): ?>
    <div id="successAlert" class="alert alert-success" role="alert" style="z-index: 4342;">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>


<?php if(!empty(session('error'))): ?>
    <div id="successAlert" class="alert alert-danger" role="alert" style="z-index: 434;">
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?>


<?php if(!empty(session('payment-error'))): ?>
    <div class="alert alert-error" role="alert">
        <?php echo e(session('payment-error')); ?>

    </div>
<?php endif; ?>

<?php if(!empty(session('warning'))): ?>
    <div class="alert alert-warning" role="alert">
        <?php echo e(session('warning')); ?>

    </div>
<?php endif; ?>

<?php if(!empty(session('info'))): ?>
    <div class="alert alert-info" role="alert">
        <?php echo e(session('info')); ?>

    </div>
<?php endif; ?>

<?php if(!empty(session('secondary'))): ?>
    <div class="alert alert-secondary" role="alert">
        <?php echo e(session('secondary')); ?>

    </div>
<?php endif; ?>

<?php if(!empty(session('primary'))): ?>
    <div class="alert alert-primary" role="alert">
        <?php echo e(session('primary')); ?>

    </div>
<?php endif; ?>

<?php if(!empty(session('light'))): ?>
    <div class="alert alert-light" role="alert">
        <?php echo e(session('light')); ?>

    </div>
<?php endif; ?>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const successAlert = document.getElementById('successAlert');

        if (successAlert) {
            setTimeout(function() {
                successAlert.style.display = 'none';
            }, 6000);
        }
    });
</script>
<?php /**PATH C:\xampp\htdocs\blog.com\resources\views/layouts/_message.blade.php ENDPATH**/ ?>