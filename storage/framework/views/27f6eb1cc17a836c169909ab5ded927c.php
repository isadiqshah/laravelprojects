

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Category</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="" method="POST" id="add_user_form">
                            <?php echo csrf_field(); ?>
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Name *</label>
                                <input type="text" name="name" value="<?php echo e($getRecord->name); ?>" class="form-control" required id="inputNanme4">
                                <div style="color:red;"><?php echo e($errors->first('name')); ?></div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Title *</label>
                                <input type="text" name="title" value="<?php echo e($getRecord->title); ?>" class="form-control" required >
                                <div style="color:red;"><?php echo e($errors->first('title')); ?></div>
                            </div>

                            <hr>

                            <div class="col-12">
                                <label class="form-label">Meta Title *</label>
                                <input type="text" name="meta_title" value="<?php echo e($getRecord->meta_title); ?>" class="form-control" required >
                                <div style="color:red;"><?php echo e($errors->first('meta_title')); ?></div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Meta Description</label>
                                <textarea type="text" name="meta_description" class="form-control"><?php echo e($getRecord->meta_description); ?></textarea>
                                <div style="color:red;"><?php echo e($errors->first('meta_description')); ?></div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Meta Keywords</label>
                                <input type="text" name="meta_keywords" value="<?php echo e($getRecord->meta_keywords); ?>" class="form-control">
                                <div style="color:red;"><?php echo e($errors->first('meta_keywords')); ?></div>
                            </div>

                            <hr>

                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">Menu *</label>
                                <label>
                                    <select class="form-control" name="is_menu">
                                        <option <?php echo e(( $getRecord->is_menu === 0) ? 'selected' : ''); ?> value="0">No</option>
                                        <option <?php echo e(( $getRecord->is_menu === 1) ? 'selected' : ''); ?> value="1">Yes</option>
                                    </select>
                                </label>
                            </div>

                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">Status *</label>
                                <label>
                                    <select class="form-control" name="status">
                                        <option <?php echo e(( $getRecord->status === 0) ? 'selected' : ''); ?> value="0">Inactive</option>
                                        <option <?php echo e(( $getRecord->status === 1) ? 'selected' : ''); ?> value="1">Active</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update</button>
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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog.com\resources\views/backend/category/edit.blade.php ENDPATH**/ ?>