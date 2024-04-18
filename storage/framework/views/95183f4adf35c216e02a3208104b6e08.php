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
                                Blog List ( Total: <?php echo e($getRecord->total()); ?> )
                                <a href="<?php echo e(route('add_blog')); ?>" style="float: right; margin-top: -10px"
                                   class="btn btn-primary">Add New</a>
                            </h5>
                                        <form class="row" method="post" action="<?php echo e(route('blog_search')); ?>">
                                            <?php echo csrf_field(); ?>
                                            <div class="col-md-1" style="margin-bottom: 10px;">
                                                <label class="form-label">ID</label>
                                                <input type="text" value="<?php echo e(Request::get('id')); ?>" name="id" class="form-control">
                                            </div>

                                            <div class="col-md-2" style="margin-bottom: 10px;">
                                                <label class="form-label">Username</label>
                                                <input type="text" value="<?php echo e(Request::get('username')); ?>" name="username" class="form-control">
                                            </div>
                                            <div class="col-md-3" style="margin-bottom: 10px; width: 10%;">
                                                <label class="form-label">Title</label>
                                                <input type="text" value="<?php echo e(Request::get('title')); ?>" name="title" class="form-control">
                                            </div>

                                            <div class="col-md-2" style="margin-bottom: 10px;">
                                                <label class="form-label">Category</label>
                                                <input type="text" value="<?php echo e(Request::get('category')); ?>" name="category" class="form-control">
                                            </div>
                                            <div class="col-md-2" style="margin-bottom: 10px;">
                                                <label class="form-label">Publish</label>
                                                <select class="form-control" name="is_publish">
                                                    <option  value="">Select</option>
                                                    <option <?php echo e((Request::get('is_publish') === 1) ? 'selected' : ''); ?> value="1">Yes</option>
                                                    <option <?php echo e((Request::get('is_publish') === 100) ? 'selected' : ''); ?> value="0">No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2" style="margin-bottom: 10px;">
                                                <label class="form-label">Status</label>
                                                <select class="form-control" name="status">
                                                    <option  value="">Select</option>
                                                    <option <?php echo e((Request::get('status') === 1) ? 'selected' : ''); ?> value="1">Active</option>
                                                    <option <?php echo e((Request::get('status') === 100) ? 'selected' : ''); ?> value="0">Inactive</option>
                                                </select>
                                            </div>









                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-search small"></i> Search</button>
                                                <a href="<?php echo e(route('blog_list')); ?>" type="reset" class="btn btn-secondary btn-sm">
                                                    <i class="fas fa-undo small"></i> Reset</a>
                                            </div>
                                        </form>
                            <hr>

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Video Link</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Publish</th>
                                    <th scope="col">Created Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $index = 1; ?>
                                <?php $__empty_1 = true; $__currentLoopData = $getRecord; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <th scope="row"><?php echo e($index); ?></th>
                                        <th scope="row"><?php echo e($value->id); ?></th>
                                        <td>
                                            <?php if(!empty($value->getImage())): ?>
                                                <img src="<?php echo e($value->getImage()); ?>" style="width: 100px; height: 100px;">
                                            <?php endif; ?>

                                        </td>
                                        <td><?php echo e($value->user->name); ?></td>
                                        <td><?php echo strip_tags(Str::substr($value->title,0,15)); ?></td>
                                        <td><?php echo e($value->category->name); ?></td>
                                        <td><?php echo strip_tags(Str::substr($value->video_link,0,20)); ?></td>
                                        <td><?php echo e(!empty($value->status) ? 'Active' : 'Inactive'); ?></td>
                                        <td><?php echo e(!empty($value->is_publish) ? 'Yes' : 'No'); ?></td>
                                        <td><?php echo e(date('Y-m-d H:i A', strtotime($value->created_at))); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('edit_blog', ['id' => $value->id])); ?>" class="btn btn-primary btn-sm">Edit</a>

                                            <a onclick="return confirm('Are you sure you want to delete this record ?')"
                                               href="<?php echo e(route('delete_blog', ['id' => $value->id])); ?>" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    <?php $index++ ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="100%">Record not found.</td>
                                    </tr>
                                <?php endif; ?>



                                </tbody>
                            </table>

                            <?php echo e($getRecord->onEachSide(5)->links()); ?>


                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog.com\resources\views/backend/blog/list.blade.php ENDPATH**/ ?>