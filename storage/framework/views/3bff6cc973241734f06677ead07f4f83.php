

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Account Setting</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="col-12">
                                <label class="form-label">Name</label>
                                <input type="text"  name="name" value="<?php echo e($accountSetting->name); ?>" class="form-control">
                                <div style="color:red;"><?php echo e($errors->first('name')); ?></div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="text"  name="password" value="<?php echo e($accountSetting->email); ?>" class="form-control">
                                <div style="color:red;"><?php echo e($errors->first('email')); ?></div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Profile Picture</label>
                                <input type="file"  name="profile_picture" class="form-control">
                                <div style="color:red;"><?php echo e($errors->first('profile_picture')); ?></div>
                                <img src="<?php echo e($accountSetting->getProfile); ?>">
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update Setting</button>
                            </div>
                        </form>

                    </div>
                </div>





            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog.com\resources\views/backend/profile/account-setting.blade.php ENDPATH**/ ?>