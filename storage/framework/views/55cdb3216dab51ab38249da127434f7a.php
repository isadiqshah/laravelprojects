<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



    <!-- Detail Start -->
    <div class="container py-5">
                <?php echo $__env->make('layouts._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row pt-5">
            <div class="col-lg-8">
                <div class="d-flex flex-column text-left mb-3">
                    <h1 class="mb-3"><?php echo e($getRecord->title); ?></h1>
                    <div class="d-flex">
                        <p class="mr-3"><i class="fa fa-user text-primary"></i> <?php echo e($getRecord->user_name); ?></p>
                        <p class="mr-3">
                            <a href="<?php echo e($getRecord->category_slug); ?>"><i class="fa fa-folder text-primary"></i> <?php echo e($getRecord->category_name); ?></a>
                        </p>
                        <p class="mr-3"><i class="fa fa-comments text-primary"></i> <?php echo e($getRecord->getCommentCount()); ?></p>
                    </div>
                </div>
                <div class="mb-5">
                    <?php if(!empty($getRecord->getImage())): ?>
                    <img style="max-height: 574px; width: 100%; object-fit: cover;"
                        class="img-fluid rounded w-100 mb-4"
                        src="<?php echo e($getRecord->getImage()); ?>"
                        alt="Image"
                    />
                    <?php endif; ?>
                    <p>
                        <?php echo $getRecord->description; ?>

                    </p>
                        <br>
                    <?php if(!empty($getRecord->video_link)): ?>
                        <div>
                            <h1 class="mb-3">Here is also available Complete Guided Video</h1>
                            <iframe width="560" height="315" src="<?php echo e($getRecord->video_link); ?>" title="YouTube video player"
                                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;
                                     gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    <?php endif; ?>

                </div>

                <!-- Related Post -->
                <?php if(!empty($getRelatedPost->count())): ?>
                <div class="mb-5 mx-n3">
                    <h2 class="mb-4 ml-3">Related Post</h2>
                    <div class="owl-carousel post-carousel position-relative">
                        <?php $__currentLoopData = $getRelatedPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3">
                            <img class="img-fluid"
                                src="<?php echo e($related->getImage()); ?>"
                                style="width: 80px; height: 80px; object-fit: cover"/>
                            <div class="pl-3">
                                <a href="<?php echo e(route('blog_detail', ['slug' => $related->slug])); ?>">
                                    <h5 class=""><?php echo strip_tags(Str::substr($related->title,0,25)); ?></h5>
                                </a>
                                <div class="d-flex">
                                    <small class="mr-3"><i class="fa fa-user text-primary"></i> <?php echo e($related->user_name); ?></small>
                                    <small class="mr-3">
                                        <a href="<?php echo e($related->category_slug); ?>"><i class="fa fa-folder text-primary"></i> <?php echo e($related->category_name); ?></a>
                                    </small>
                                    <small class="mr-3"><i class="fa fa-comments text-primary"></i> <?php echo e($related->getCommentCount()); ?></small>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Comment List -->
                <div class="mb-5">
                    <h2 class="mb-4"><?php echo e($getRecord->getComment->count()); ?> Comments</h2>

                    <?php $__currentLoopData = $getRecord->getComment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="media mb-4">
                        <img
                            src="<?php echo e(url('front/img/user.jpg')); ?>"
                            alt="Image"
                            class="img-fluid rounded-circle mr-3 mt-1"
                            style="width: 45px"
                        />
                        <div class="media-body">
                            <h6>
                                <?php echo e($comment->user->name); ?> <small><i><?php echo e(date('d-M-Y', strtotime($comment->created_at))); ?> at
                                        <?php echo e(date('h:i:A', strtotime($comment->created_at))); ?></i></small>
                            </h6>
                            <p>
                                <?php echo e($comment->comment); ?>

                            </p>
                            <button class="btn btn-sm btn-light ReplyOpen" id="<?php echo e($comment->id); ?>">Reply</button>

                            <?php $__currentLoopData = $comment->getReply; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <div class="media mt-4">
                                    <img
                                        src="<?php echo e(url('front/img/user.jpg')); ?>"
                                        alt="Image"
                                        class="img-fluid rounded-circle mr-3 mt-1"
                                        style="width: 45px"
                                    />
                                    <div class="media-body">
                                        <h6>
                                            <?php echo e($reply->user->name); ?> <small><i><?php echo e(date('d-M-Y', strtotime($reply->created_at))); ?> at
                                                    <?php echo e(date('h:i:A', strtotime($reply->created_at))); ?></i></small>
                                        </h6>
                                        <p>
                                            <?php echo e($reply->comment); ?>

                                        </p>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <div class="bg-light p-3 ShowReply<?php echo e($comment->id); ?>"  style="display: none;">
                                <h2 class="mb-4">Reply a Comment</h2>
                                <form action="<?php echo e(route('blog_comment_reply')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="comment_id" value="<?php echo e($comment->id); ?>">
                                    <div class="form-group">
                                        <label for="comment">Comment *</label>
                                        <textarea id="comment" name="comment" required cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="submit" value="Leave Reply" class="btn btn-primary px-3"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <!-- Comment Form -->
                <div class="bg-light p-5">
                    <h2 class="mb-4">Leave a Comment</h2>
                    <form action="<?php echo e(route('blog_comment')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                        <input type="hidden" name="blog_id" value="<?php echo e($getRecord->id); ?>">
                        <div class="form-group">
                            <label for="comment">Comment *</label>
                            <textarea id="comment" name="comment" required cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <input type="submit" value="Leave Comment" class="btn btn-primary px-3"/>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0">
                <!-- Author Bio -->
















                <!-- Search Form -->
                <div class="mb-5">
                    <form action="<?php echo e(url('blog')); ?>" method="GET">
                        <div class="input-group">
                            <input name="search" type="text" required class="form-control form-control-lg" placeholder="Keyword"/>
                            <div class="input-group-append">
                                <button class="input-group-text bg-transparent text-primary"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Category List -->
                <div class="mb-5">
                    <h2 class="mb-4">Categories</h2>
                    <ul class="list-group list-group-flush">
                        <?php $__currentLoopData = $getCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li
                            class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href="<?php echo e($category->slug); ?>"><?php echo e($category->name); ?></a>
                            <span class="badge badge-primary badge-pill"><?php echo e(App\Models\Category::totalblog($category->id)); ?></span>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>
                </div>


                <!-- Recent Post -->
                <div class="mb-5">
                    <h2 class="mb-4">Recent Post</h2>
                    <?php $__currentLoopData = $getRecentPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3">
                        <?php if(!empty($recent->getImage())): ?>
                        <img class="img-fluid"
                            src="<?php echo e($recent->getImage()); ?>"
                            style="width: 80px; height: 80px; object-fit: cover"/>
                        <?php endif; ?>
                        <div class="pl-3">
                            <a href="<?php echo e(route('blog_detail', ['slug' => $recent->slug])); ?>">
                                <h5 class=""><?php echo strip_tags(Str::substr($recent->title,0,25)); ?></h5>
                            </a>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> <?php echo e($recent->user_name); ?></small>
                                <small class="mr-3">
                                    <a href="<?php echo e($recent->category_slug); ?>"><i class="fa fa-folder text-primary"></i> <?php echo e($recent->category_name); ?></a>
                                </small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> <?php echo e($recent->getCommentCount()); ?></small>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <br>

                <!-- Tag Cloud -->
                <?php if(!empty($getRecord->getTag->count())): ?>
                <div class="mb-5">
                    <h2 class="mb-4">Tag Cloud</h2>
                    <div class="d-flex flex-wrap m-n1">
                        <?php $__currentLoopData = $getRecord->getTag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(url('blog?search='. $tag->name)); ?>" class="btn btn-outline-primary m-1"><?php echo e($tag->name); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Detail End -->
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('.ReplyOpen').click(function() {
                        var id = $(this).attr('id');
                        $('.ShowReply' + id).toggle();
                    });
                });
            </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog.com\resources\views/blog_detail.blade.php ENDPATH**/ ?>