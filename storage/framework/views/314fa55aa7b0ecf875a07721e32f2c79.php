<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('tagsinput/bootstrap-tagsinput.css')); ?>">

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Blog</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="col-12">
                                <label class="form-label">Title *</label>
                                <input type="text" name="title" class="form-control" value="<?php echo e($getRecord->title); ?>" required >
                            </div>
                            <div class="col-12">
                                <label class="form-label">Category *</label>
                                <select class="form-control" name="category_id" required>
                                    <option value="">Select Category</option>
                                    <?php $__currentLoopData = $getCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php echo e(($getRecord->category_id === $value->id) ? 'selected' : ''); ?>

                                                value="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" name="image_file" class="form-control" >
                                <?php if(!empty($getRecord->getImage())): ?>
                                    <img src="<?php echo e($getRecord->getImage()); ?>" style="width: 100px; height: 100px;">
                                <?php endif; ?>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Description *</label>
                                <textarea class="form-control tinymce-editor" name="description"><?php echo e($getRecord->description); ?></textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Video Link</label>
                                <input type="text" id="video_link" value="<?php echo e($getRecord->video_link); ?>" name="video_link" class="form-control"  >
                            </div>

                            <div class="col-12">
                                <?php
                                $tags = '';
                                foreach($getRecord->getTag as $value)
                                {
                                   $tags .= $value->name. ',';
                                }
                                ?>
                                <label class="form-label">Tags</label>
                                <input type="text" value="<?php echo e($tags); ?>" id="tags" name="tags" class="form-control"  >
                            </div>
                            <hr>

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
                                <label for="inputPassword4" class="form-label">Publish *</label>
                                <label>
                                    <select class="form-control" name="is_publish">
                                        <option <?php echo e(($getRecord->is_publish === 1) ? 'selected' : ''); ?> value="1">Yes</option>
                                        <option <?php echo e(($getRecord->is_publish === 0) ? 'selected' : ''); ?> value="0">No</option>
                                    </select>
                                </label>
                            </div>

                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">Status *</label>
                                <label>
                                    <select class="form-control" name="status">
                                        <option <?php echo e(($getRecord->status === 1) ? 'selected' : ''); ?> value="1">Active</option>
                                        <option <?php echo e(($getRecord->status === 0) ? 'selected' : ''); ?> value="0">Inactive</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-12" style="margin-top: 30px">
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
    <script src="<?php echo e(asset('tagsinput/bootstrap-tagsinput.js')); ?>"></script>

    <script>
        $("#tags").tagsinput('items')
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog.com\resources\views/backend/blog/edit.blade.php ENDPATH**/ ?>