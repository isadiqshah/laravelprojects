<?php $__env->startSection('style'); ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>




    <style>
        /* Custom CSS for carousel title and description */
        .carousel-caption h5 {
            font-size: 4.5rem;
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
            font-size: 1rem;
            font-family: "Calibri Light", cursive;
        }
        .wrapper {
            width: 100%;
            height: 100%;
            background: black;
            position: absolute;
            opacity: 0.5;
        }
    </style>

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?php echo e($key); ?>" class="<?php echo e($key === 0 ? 'active' : ''); ?>" aria-label="Slide <?php echo e($key + 1); ?>"></button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="carousel-inner">
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item <?php echo e($key === 0 ? 'active' : ''); ?>" data-bs-interval="8000">
                    <div class="wrapper"></div>
                    <?php if($slider->image_file): ?>
                        <img src="<?php echo e(asset('images/' . $slider->image_file)); ?>" class="d-block w-100" alt="...">
                    <?php endif; ?>
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo e($slider->title); ?></h5>
                        <br>
                        <p><?php echo e($slider->description); ?></p>
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


    <!-- Registration Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <p class="section-title pr-5">
                        <span class="pr-2">Book A Seat</span>
                    </p>
                    <h1 class="mb-4">Book A Seat For Your Kid</h1>
                    <p>
                        Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo
                        dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.
                        Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                        dolor
                    </p>
                    <ul class="list-inline m-0">
                        <li class="py-2">
                            <i class="fa fa-check text-success mr-3"></i>Labore eos amet
                            dolor amet diam
                        </li>
                        <li class="py-2">
                            <i class="fa fa-check text-success mr-3"></i>Etsea et sit dolor
                            amet ipsum
                        </li>
                        <li class="py-2">
                            <i class="fa fa-check text-success mr-3"></i>Diam dolor diam
                            elitripsum vero.
                        </li>
                    </ul>
                    <a href="" class="btn btn-primary mt-4 py-2 px-4">Book Now</a>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-secondary text-center p-4">
                            <h1 class="text-white m-0">Book A Seat</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control border-0 p-4"
                                        placeholder="Your Name"
                                        required="required"
                                    />
                                </div>
                                <div class="form-group">
                                    <input
                                        type="email"
                                        class="form-control border-0 p-4"
                                        placeholder="Your Email"
                                        required="required"
                                    />
                                </div>
                                <div class="form-group">
                                    <select
                                        class="custom-select border-0 px-4"
                                        style="height: 47px"
                                    >
                                        <option selected>Select A Class</option>
                                        <option value="1">Class 1</option>
                                        <option value="2">Class 1</option>
                                        <option value="3">Class 1</option>
                                    </select>
                                </div>
                                <div>
                                    <button
                                        class="btn btn-secondary btn-block border-0 py-3"
                                        type="submit"
                                    >
                                        Book Now
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->


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
                            <?php echo e($feedback->feedback); ?>

                        </div>
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="<?php echo e($feedback->image); ?>" style="width: 70px; height: 70px" alt="Image"/>
                            <div class="pl-3">
                                <h5><?php echo e($feedback->title); ?></h5>
                                
                                <div class="rating">
                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                        <?php if($i <= $feedback->rating): ?>
                                            <span class="fa fa-star checked"></span>
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
                <?php $__currentLoopData = $blogs->take(6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="path/to/bootstrap.bundle.min.js"></script>

    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Isotope library -->
    <script src="path/to/isotope.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.testimonial-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                dots:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            });
        });
    </script>


<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog.com\resources\views/home.blade.php ENDPATH**/ ?>