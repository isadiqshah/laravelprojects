<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New User</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="" method="POST" id="add_user_form">
                            <?php echo csrf_field(); ?>
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Name</label>
                                <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="form-control" id="inputNanme4">
                                <div style="color:red;"><?php echo e($errors->first('name')); ?></div>

                            </div>
                            <div class="col-12">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="form-control" id="inputEmail4">
                                <div style="color:red;"><?php echo e($errors->first('email')); ?></div>

                            </div>
                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password"  name="password" class="form-control" id="inputPassword4">
                                <div style="color:red;"><?php echo e($errors->first('password')); ?></div>

                            </div>
                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">Status</label>
                                <label>
                                    <select class="form-control" name="status">
                                        <option <?php echo e((old('status') === 1) ? 'selected' : ''); ?> value="1">Active</option>
                                        <option <?php echo e((old('status') === 0) ? 'selected' : ''); ?> value="0">Inactive</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog.com\resources\views/backend/user/add.blade.php ENDPATH**/ ?>