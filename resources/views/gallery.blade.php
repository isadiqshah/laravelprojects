@extends('layouts.app')

@section('style')

@endsection

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white mt-5">Gallery</h3>
        </div>
    </div>
    <!-- Header End -->


    <!-- Gallery Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Our Gallery</span>
                </p>
                <h1 class="mb-4">Gallery of Wonders</h1>
            </div>
            <div class="row">
                <!-- Filter buttons -->
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-filters">
                        <li class="btn btn-outline-primary m-1 active" data-filter="*">
                            All
                        </li>
                        @foreach($categories as $category)

                            <li class="btn btn-outline-primary m-1" data-filter="{{ '.' . str_replace(' ', '_', strtolower($category->title)) }}">
                                {{ $category->name }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">
                @foreach($galleries as $gallery)
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item {{ str_replace(' ', '_', strtolower($gallery->category->title)) }}">
                        <div class="position-relative overflow-hidden mb-2">
                            @if(!empty($gallery->image_file))
                                <img class="img-fluid w-100" src="{{ asset('images/'.$gallery->image_file) }}" alt="" />
                                <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                    <a href="{{ asset('images/'.$gallery->image_file) }}" data-lightbox="portfolio">
                                        <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Gallery End -->

@endsection

@section('script')

    <!-- Add jQuery library if not already included -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- Gallery JavaScript for filtering -->
    <script>
        $(document).ready(function(){
            // Filtering gallery items when a filter button is clicked
            $('#portfolio-filters li').click(function(){
                console.log("Filter button clicked");
                $('#portfolio-filters li').removeClass('active'); // Remove 'active' class from all filter buttons
                $(this).addClass('active'); // Add 'active' class to the clicked filter button

                var selectedCategory = $(this).data('filter'); // Get the selected category filter
                console.log("Selected Category:", selectedCategory);

                if(selectedCategory === '*') {
                    $('.portfolio-item').show(); // If 'All' is selected, show all gallery items
                } else {
                    $('.portfolio-item').hide(); // Hide all gallery items
                    $(selectedCategory).show(); // Show gallery items belonging to the selected category
                }
            });
        });
    </script>



@endsection
