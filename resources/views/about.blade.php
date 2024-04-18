@extends('layouts.app')

@section('style')

@endsection

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white mt-5">About Us</h3>
        </div>
    </div>
    <!-- Header End -->

    @include('x_about')


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


@include('our_services')


@endsection

@section('script')
    <script src="path/to/bootstrap.bundle.min.js"></script>

@endsection
