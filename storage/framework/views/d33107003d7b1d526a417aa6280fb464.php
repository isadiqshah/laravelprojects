<?php $__env->startSection('style'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <style>
        /* Custom CSS for carousel title and description */
        .carousel-caption h5 {
            font-size: 4rem;
            font-family: "Handlee", cursive;
            font-weight: 700 !important;
            line-height: 1.2;
            text-align: left !important;
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;

            color: #e67e23;
        }

        .carousel-caption p {
            color: white;
            font-weight: lighter;
            font-size: 1.2rem;
            font-family: "Calibri Light", cursive;
        }
        .wrapper {
            width: 100%;
            height: 100%;
            background: black;
            position: absolute;
            opacity: 0.4;
        }
    </style>

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?php echo e($key); ?>"
                        class="<?php echo e($key === 0 ? 'active' : ''); ?>" aria-label="Slide <?php echo e($key + 1); ?>"></button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="carousel-inner">
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item <?php echo e($key === 0 ? 'active' : ''); ?>" data-bs-interval="5000">
                    <div class="wrapper"></div>
                    <?php if($slider->image_file): ?>
                        <img src="<?php echo e(asset('images/' . $slider->image_file)); ?>" class="d-block w-100" alt="...">
                    <?php endif; ?>
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo e($slider->title); ?></h5>
                        <br>
                        <p><?php echo $slider->description; ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
<?php if(session('success')): ?>
    <script>
        toastr.success('<?php echo e(session('success')); ?>');
    </script>
<?php endif; ?>


<!-- Facilities Start -->
<div class="container-fluid pt-5">
    <div class="container pb-3">
        <div class="row">
            <div class="col-lg-4 col-md-6 pb-1">
                <div
                    class="d-flex bg-light shadow-sm border-top rounded mb-4"
                    style="padding: 30px"
                >
                    <i
                        class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"
                    ></i>
                    <div class="pl-4">
                        <h4>Travel Itinerary</h4>
                        <p class="m-0">
                            I offer comprehensive travel itinerary services, meticulously planning every detail of your
                            journey for a seamless and unforgettable experience. I ensure your travel plans align perfectly with your preferences and desires.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div
                    class="d-flex bg-light shadow-sm border-top rounded mb-4"
                    style="padding: 30px"
                >
                    <i
                        class="flaticon-022-drum h1 font-weight-normal text-primary mb-3"
                    ></i>
                    <div class="pl-4">
                        <h4>Ticket Booking</h4>
                        <p class="m-0">
                            I facilitate booking reservations for various events or travel. From concerts to flights, I handle the process efficiently. My service streamlines the reservation process, offering convenience and peace of mind to customers.                            </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div
                    class="d-flex bg-light shadow-sm border-top rounded mb-4"
                    style="padding: 30px"
                >
                    <i
                        class="flaticon-030-crayons h1 font-weight-normal text-primary mb-3"
                    ></i>
                    <div class="pl-4">
                        <h4>Hotel Booking</h4>
                        <p class="m-0">
                            I specialize in facilitating hotel bookings, ensuring seamless reservations tailored to your preferences and needs. Enjoy hassle-free accommodation arrangements with personalized attention and convenience.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div
                    class="d-flex bg-light shadow-sm border-top rounded mb-4"
                    style="padding: 30px"
                >
                    <i
                        class="flaticon-017-toy-car h1 font-weight-normal text-primary mb-3"
                    ></i>
                    <div class="pl-4">
                        <h4>Travel Insurance</h4>
                        <p class="m-0">

                            I provide comprehensive travel insurance services, ensuring peace of mind and protection for travelers against unforeseen circumstances during their journeys. With tailored coverage and reliable support, I safeguard travelers' experiences, wherever they may roam.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 pb-1">
                <div
                    class="d-flex bg-light shadow-sm border-top rounded mb-4"
                    style="padding: 30px"
                >
                    <i
                        class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"
                    ></i>
                    <div class="pl-4">
                        <h4>Travel Guide</h4>
                        <p class="m-0">
                            I offer personalized Travel Guide services, tailoring experiences to your preferences and needs. I ensure memorable journeys. With a wealth of knowledge and dedication, I aim to make your travels unforgettable. Let me be your trusted companion on your next adventure.                        </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 pb-1">
                <div
                    class="d-flex bg-light shadow-sm border-top rounded mb-4"
                    style="padding: 30px"
                >
                    <i
                        class="flaticon-025-sandwich h1 font-weight-normal text-primary mb-3"
                    ></i>
                    <div class="pl-4">
                        <h4>Customer & Visa Support</h4>
                        <p class="m-0">
                            I offer comprehensive assistance for customers navigating visa-related inquiries, ensuring seamless support and guidance throughout the process. My expertise lies in delivering exceptional customer service and resolving visa-related queries promptly and efficiently.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facilities Start -->


<?php echo $__env->make('x_about', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->make('our_services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <!-- Feedback Start -->
    <div class="container-fluid py-5">
        <div class="container p-0">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Feedbacks</span>
                </p>
                <h1 class="mb-4">Our Customers Feedback</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="testimonial-item px-3">
                        <div class="bg-light shadow-sm rounded mb-4 p-4">
                            <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                            <p><?php echo e($feedback->feedback); ?></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="pl-3">
                                <div class="rating">
                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                        <?php if($i <= $feedback->rating): ?>
                                            <span class="fa fa-star checked" style="color: #17A2B8"></span>
                                        <?php else: ?>
                                            <span class="fa fa-star"></span>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- Feedback End -->



    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Latest Blog</span>
                </p>
                <h1 class="mb-4">Latest Articles From Blog</h1>
            </div>
            <div class="row pb-3">
                <?php $__currentLoopData = $blogs->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 mb-4">
                        <div class="card border-0 shadow-sm mb-2">
                            <img class="card-img-top mb-2" src="<?php echo e($blog->getImage()); ?>"
                                 style="height: 233px; width: 100%; object-fit: cover;" alt=""/>
                            <div class="card-body bg-light text-center p-4">

                                <a href="<?php echo e(route('blog_detail', ['slug' => $blog->slug])); ?>">
                                    <h4 class=""><?php echo strip_tags(Str::substr($blog->title,0,55)); ?></h4>
                                </a>
                                <div class="d-flex justify-content-center mb-3">
                                    <small class="mr-3"><i class="fa fa-user text-primary"></i> <?php echo e($blog->user_name); ?>

                                    </small>
                                    <small class="mr-3">
                                        <a href="<?php echo e(url($blog->category_slug)); ?>"><i
                                                class="fa fa-folder text-primary"></i> <?php echo e($blog->category_name); ?></a>
                                    </small>
                                    <small class="mr-3"><i
                                            class="fa fa-comments text-primary"></i> <?php echo e($blog->getCommentCount()); ?>

                                    </small>
                                </div>
                                <p>
                                    <?php echo strip_tags(Str::substr($blog->description,0,170)); ?>...
                                </p>
                                <a href="<?php echo e(route('blog_detail', ['slug' => $blog->slug])); ?>"
                                   class="btn btn-primary px-4 mx-auto my-2"
                                >Read More</a
                                >
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Get In Touch</span>
                </p>
                <h1 class="mb-4">Contact Us For Any Query</h1>
            </div>
            <?php echo $__env->make('layouts._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="row">
                <div class="col-lg-7 mb-5">

                    <div class="contact-form">
                        <div id="success"></div>
                        <form action="<?php echo e(route('contact_form_submit')); ?>" method="POST" name="sentMessage" id="contactForm" novalidate="novalidate">
                            <?php echo csrf_field(); ?>
                            <div class="control-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required="required"
                                       data-validation-required-message="Please enter your name"/>
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="help-block text-danger"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <br>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="required"
                                       data-validation-required-message="Please enter your email"/>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="help-block text-danger"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <br>
                            </div>

                            <div class="control-group">
                                  <textarea
                                          class="form-control"
                                          rows="6"
                                          name="message"
                                          id="message"
                                          placeholder="Please Enter Your Message Here..."
                                          required="required"
                                          data-validation-required-message="Please enter your message"
                                  ></textarea>
                                <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="help-block text-danger"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <br>
                            </div>
                            <div>
                                <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 mb-5">
                    <p>
                        Thank you for considering us as your trusted resource.
                        We value your input and are eager to serve you in the best possible manner.
                        Don't hesitate to get in touch with us — We're here to help make your experience
                        with us exceptional in every way.
                    </p>
                    <div class="d-flex">
                        <i
                                class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                                style="width: 45px; height: 45px"
                        ></i>
                        <div class="pl-3">
                            <h5>Address</h5>
                            <p><a href="https://www.google.com/maps/search/?api=1&query=97+Street%2C+Sector+G-11%2C+Islamabad%2C+Pakistan"
                                  class="text-decoration-none">97 Street, Sector G-11, Islamabad, Pakistan</a></p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i
                                class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                                style="width: 45px; height: 45px"
                        ></i>
                        <div class="pl-3">
                            <h5>Email</h5>
                            <p><a href="mailto:sadiqshah77881@gmail.com" class="text-decoration-none">sadiqshah77881@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i
                                class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                                style="width: 45px; height: 45px"
                        ></i>
                        <div class="pl-3">
                            <h5>Phone</h5>
                            <p><a href="tel:+923439428065" class="text-decoration-none">+92 343 9428065</a></p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i
                                class="far fa-clock d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                                style="width: 45px; height: 45px"
                        ></i>
                        <div class="pl-3">
                            <h5>Opening Hours</h5>
                            <strong>Always Open</strong>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Contact End -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>


<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog.com\resources\views/home.blade.php ENDPATH**/ ?>