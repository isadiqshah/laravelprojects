<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <?php echo $__env->make('layouts._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                Page List
                                <a href="<?php echo e(route('add_page')); ?>" style="float: right; margin-top: -10px"
                                   class="btn btn-primary">Add New</a>
                            </h5>


                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Meta Title</th>
                                    <th scope="col">Created Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $getRecord; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <th scope="row"><?php echo e($value->id); ?></th>
                                        <td><?php echo e($value->slug); ?></td>
                                        <td><?php echo strip_tags(Str::substr($value->title,0,15)); ?></td>
                                        <td><?php echo e($value->meta_title); ?></td>

                                        <td><?php echo e(date('Y-m-d H:i A', strtotime($value->created_at))); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('edit_page', ['id' => $value->id])); ?>" class="btn btn-primary btn-sm">Edit</a>

                                            <a onclick="return confirm('Are you sure you want to delete this record ?')"
                                               href="<?php echo e(route('delete_page', ['id' => $value->id])); ?>" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="100%">Record not found.</td>
                                    </tr>
                                <?php endif; ?>



                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog.com\resources\views/backend/page/list.blade.php ENDPATH**/ ?>