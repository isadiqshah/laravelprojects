

<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Slider</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="<?php echo e(route('update_slider', ['id' => $slider->id])); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="col-12">
                                <label class="form-label">Title *</label>
                                <input type="text" name="title" value="<?php echo e($slider->title); ?>" class="form-control" required >
                                <div style="color:red;"><?php echo e($errors->first('title')); ?></div>
                            </div>


                            <div class="col-12">
                                <label class="form-label">Description *</label>
                                <textarea class="form-control tinymce-editor" name="description"><?php echo e($slider->description); ?></textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Image *</label>
                                <input type="file" name="image_file" class="form-control" required >
                                <?php if(!empty($slider->getImage())): ?>
                                    <img src="<?php echo e($slider->getImage()); ?>" style="width: 100px; height: 100px;">
                                <?php endif; ?>
                            </div>


                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">Status *</label>
                                <label>
                                    <select class="form-control" name="status">
                                        <option <?php echo e(($slider->status === 0) ? 'selected' : ''); ?> value="0">Inactive</option>
                                        <option <?php echo e(($slider->status === 1) ? 'selected' : ''); ?> value="1">Active</option>
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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog.com\resources\views/backend/slider/edit.blade.php ENDPATH**/ ?>