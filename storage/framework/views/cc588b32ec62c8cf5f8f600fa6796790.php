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
                                Orders List
                            </h5>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Visa Type</th>
                                    <th scope="col">Passport Number</th>
                                    <th scope="col">Contact Number</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <th scope="row"><?php echo e($order->id); ?></th>
                                        <th scope="row"><?php echo e($order->service_name); ?></th>
                                        <th scope="row"><?php echo e($order->fname); ?></th>
                                        <th scope="row"><?php echo e($order->gender); ?></th>
                                        <th scope="row"><?php echo e($order->country); ?></th>
                                        <th scope="row"><?php echo e($order->visa_type); ?></th>
                                        <th scope="row"><?php echo e($order->passport_number); ?></th>
                                        <th scope="row"><?php echo e($order->mobile_number); ?></th>

                                        <th scope="row"><?php echo e($order->status); ?></th>
                                        <td>
                                            <a onclick="return confirm('Are you sure you want to delete this record ?')"
                                               href="<?php echo e(route('delete_order', ['id' => $order->id])); ?>" class="btn btn-danger btn-sm">Delete</a>

                                            <a href="<?php echo e(route('order_done', ['id' => $order->id])); ?>" class="btn btn-primary btn-sm">Done</a>

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
    </main>
    <!-- End #main -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog.com\resources\views/backend/order/list.blade.php ENDPATH**/ ?>