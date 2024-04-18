

<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Service</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="<?php echo e(route('insert_services')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="col-12">
                                <label class="form-label">Image *</label>
                                <input type="file" name="image" class="form-control" required >
                            </div>

                            <div class="col-12">
                                <label class="form-label">Title *</label>
                                <input type="text" name="title" class="form-control" required >
                                <div style="color:red;"><?php echo e($errors->first('title')); ?></div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Description *</label>
                                <textarea class="form-control tinymce-editor" name="description"></textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Country</label>
                                <input type="text" id="country" name="country" class="form-control"  >
                            </div>

                            <div class="col-12">
                                <label class="form-label">Duration</label>
                                <input type="text" id="duration" name="duration" class="form-control"  >
                            </div>

                            <div class="col-12">
                                <label class="form-label">Price</label>
                                <input type="text" id="price" name="price" class="form-control"  >
                            </div>

                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">Status *</label>
                                <label>
                                    <select class="form-control" name="status">
                                        <option <?php echo e((old('status') === 0) ? 'selected' : ''); ?> value="0">Inactive</option>
                                        <option <?php echo e((old('status') === 1) ? 'selected' : ''); ?> value="1">Active</option>
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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog.com\resources\views/backend/services/add.blade.php ENDPATH**/ ?>