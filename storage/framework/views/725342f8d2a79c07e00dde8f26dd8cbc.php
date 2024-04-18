<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div
            class="d-flex flex-column align-items-center justify-content-center"
            style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white mt-5">
                <?php if(!empty($header_title)): ?>
                    <?php echo e($header_title); ?>

                <?php else: ?>
                    Our Blog
                <?php endif; ?>
            </h3>
        </div>
    </div>
    <!-- Header End -->

    <!-- Blog Start -->


    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row pb-3">
                <?php $__currentLoopData = $getRecord; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="<?php echo e($value->getImage()); ?>" style="height: 233px; width: 100%; object-fit: cover;" alt="" />
                        <div class="card-body bg-light text-center p-4">

                            <a href="<?php echo e(route('blog_detail', ['slug' => $value->slug])); ?>">
                                <h4 class=""><?php echo strip_tags(Str::substr($value->title,0,60)); ?></h4>
                            </a>
                            <div class="d-flex justify-content-center mb-3">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> <?php echo e($value->user_name); ?></small>
                                <small class="mr-3">
                                    <a href="<?php echo e(route('blog_detail', ['slug' => $value->slug])); ?>"><i class="fa fa-folder text-primary"></i> <?php echo e($value->category_name); ?></a>
                                </small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> <?php echo e($value->getCommentCount()); ?></small>
                            </div>
                            <p>
                                <?php echo strip_tags(Str::substr($value->description,0,170)); ?>...
                            </p>
                            <a href="<?php echo e(route('blog_detail', ['slug' => $value->slug])); ?>" class="btn btn-primary px-4 mx-auto my-2"
                            >Read More</a
                            >
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="col-md-12 mb-4">
                    <?php echo e($getRecord->onEachSide(5)->links()); ?>


                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog.com\resources\views/blog.blade.php ENDPATH**/ ?>