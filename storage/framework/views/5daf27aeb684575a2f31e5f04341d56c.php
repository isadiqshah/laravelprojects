

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('tagsinput/bootstrap-tagsinput.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Page</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="<?php echo e(route('update_page', ['id' => $getRecord->id])); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="col-12">
                                <label class="form-label">Slug *</label>
                                <input type="text" name="slug" value="<?php echo e($getRecord->slug); ?>" class="form-control" required >
                            </div>

                            <div class="col-12">
                                <label class="form-label">Title *</label>
                                <input type="text" name="title" value="<?php echo e($getRecord->title); ?>" class="form-control" required >
                            </div>

                            <div class="col-12">
                                <label class="form-label">Description *</label>
                                <textarea class="form-control tinymce-editor"  name="description"><?php echo e($getRecord->description); ?></textarea>
                            </div>

                            <hr>

                            <div class="col-12">
                                <label class="form-label">Meta Title</label>
                                <input type="text" name="meta_title" value="<?php echo e($getRecord->meta_title); ?>" class="form-control">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Meta Description</label>
                                <textarea type="text" name="meta_description" value="<?php echo e($getRecord->meta_description); ?>" class="form-control"></textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Meta Keywords</label>
                                <input type="text" name="meta_keywords" value="<?php echo e($getRecord->meta_keywords); ?>" class="form-control">
                            </div>

                            <hr>


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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog.com\resources\views/backend/page/edit.blade.php ENDPATH**/ ?>