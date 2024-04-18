

<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Image</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="col-12">
                                <label class="form-label">Image *</label>
                                <input type="file" name="image_file" value="<?php echo e($galleryImage->image_file); ?>" class="form-control" required >
                            </div>

                            <div class="col-12">
                                <label class="form-label">Category *</label>
                                <select class="form-control" name="category_id" required>
                                    <option value="">Select Category</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <div style="color:red;"><?php echo e($errors->first('category_id')); ?></div>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">Publish *</label>
                                <label>
                                    <select class="form-control" name="is_publish">
                                        <option <?php echo e(($galleryImage->is_publish === 0) ? 'selected' : ''); ?> value="0">No</option>
                                        <option <?php echo e(($galleryImage->is_publish === 1) ? 'selected' : ''); ?> value="1">Yes</option>
                                    </select>
                                </label>
                            </div>


                            <div class="col-12" style="margin-top: 30px">
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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog.com\resources\views/backend/gallery/edit.blade.php ENDPATH**/ ?>