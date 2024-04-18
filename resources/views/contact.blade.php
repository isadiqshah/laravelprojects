@extends('layouts.app')

@section('style')

@endsection

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div
            class="d-flex flex-column align-items-center justify-content-center"
            style="min-height: 400px"
        >
            <h3 class="display-3 font-weight-bold text-white mt-5">Contact Us</h3>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Get In Touch</span>
                </p>
                <h1 class="mb-4">Contact Us For Any Query</h1>
            </div>
            @include('layouts._message')
            <div class="row">
                <div class="col-lg-7 mb-5">

                    <div class="contact-form">
                        <div id="success"></div>
                        <form action="{{ route('contact_form_submit') }}" method="POST" name="sentMessage" id="contactForm" novalidate="novalidate">
                            @csrf
                            <div class="control-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required="required"
                                    data-validation-required-message="Please enter your name"/>
                                @error('name')
                                <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                                <br>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="required"
                                       data-validation-required-message="Please enter your email"/>
                                @error('email')
                                <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
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
                                @error('message')
                                <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
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
            <!-- F.A.Q Group 1 -->
            <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Frequently Asked Questions</h5>

                        <div class="accordion accordion-flush" id="faq-group-1">

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-1" type="button" data-bs-toggle="collapse">
                                        What services do you offer?
                                    </button>
                                </h2>
                                <div id="faqsOne-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                                    <div class="accordion-body">
                                        We Provide many services our agency offers, including Travel Itinerary, Flights Booking, Hotels Booking, Travel Insurance and any other specialized services.                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-2" type="button" data-bs-toggle="collapse">
                                        How do I order a tour plan for visa purpose with your agency?
                                    </button>
                                </h2>
                                <div id="faqsOne-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                                    <div class="accordion-body">
                                        Explain the booking process, whether it's online through your website, via phone. Provide any necessary contact information or booking forms.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-3" type="button" data-bs-toggle="collapse">
                                        What should I do if I need to make changes to my itinerary?
                                    </button>
                                </h2>
                                <div id="faqsOne-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                                    <div class="accordion-body">
                                        Once you placed order then you can make changes through Voice Call, Whatsapp and Email. Contact for make changes anytime without hesitation.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection

@section('script')
@endsection
