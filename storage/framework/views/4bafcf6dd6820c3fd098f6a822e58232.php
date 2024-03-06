<!-- Class Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5">
                <span class="px-2">Our Services</span>
            </p>
            <h1 class="mb-4">We Expertise in the Following Services</h1>
        </div>
        <div class="row">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <?php if(!empty($service->image)): ?>
                            <img class="card-img-top mb-2" src="<?php echo e(asset('images/'. $service->image)); ?>"
                                 style="height: 233px; width: 100%; object-fit: cover;" alt=""/>
                        <?php endif; ?>
                        <div class="card-body text-center">
                            <h4 class="card-title"><?php echo strip_tags(Str::substr($service->title,0,40)); ?></h4>
                            <p class="card-text">
                                <?php echo strip_tags(Str::substr($service->description,0,170)); ?>...
                            </p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Country</strong>
                                </div>
                                <div class="col-6 py-1"><?php echo e($service->country); ?></div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Duration</strong>
                                </div>
                                <div class="col-6 py-1"><?php echo e($service->duration); ?></div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Price</strong>
                                </div>
                                <div class="col-6 py-1">$<?php echo e($service->price); ?></div>
                            </div>
                        </div>
                        <a href="<?php echo e(route('order_form')); ?>" class="btn btn-primary px-4 mx-auto mb-4" data-toggle="modal" data-target="#order_form">Order Now</a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php echo $__env->make('order_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Class End -->
<?php /**PATH C:\xampp\htdocs\blog.com\resources\views/our_services.blade.php ENDPATH**/ ?>