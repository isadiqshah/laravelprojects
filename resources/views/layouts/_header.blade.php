
<div class="container-fluid bg-light position-fixed shadow" style="z-index: 999;">
    <nav
        class="navbar navbar-expand-lg bg-light navbar-light py- py-lg-0 px-0 px-lg-5">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('front/img/logoHHH.png') }}" alt="Your Logo"
                     style="height: 4.5vw; width: auto; margin-top: -80px; margin-bottom: -80px">
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>

        <button
            type="button"
            class="navbar-toggler"
            data-toggle="collapse"
            data-target="#navbarCollapse"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            @php
            $getCategoryHeader = \App\Models\Category::getCategoryMenu();
            @endphp
            <div class="navbar-nav font-weight-bold mx-auto py-0">
                <a href="{{ route('home') }}"
                   class="nav-item nav-link{{ Request::route()->getName() === 'home' ? ' active' : '' }}">Home</a>
                <a href="{{ route('about') }}"
                   class="nav-item nav-link{{ Request::route()->getName() === 'about' ? ' active' : '' }}">About</a>
                <a href="{{ route('gallery') }}"
                   class="nav-item nav-link{{ Request::route()->getName() === 'gallery' ? ' active' : '' }}">Gallery</a>
                @foreach(@$getCategoryHeader as $CategoryHeader)
                    <a href="{{ route('blog_detail', $CategoryHeader->slug) }}"
                       class="nav-item nav-link @if(Request::segment(3) == $CategoryHeader->slug) active @endif">{{ $CategoryHeader->name }}</a>
                @endforeach
                <a href="{{ route('blog') }}"
                   class="nav-item nav-link{{ Request::route()->getName() === 'blog' ? ' active' : '' }}">Blog</a>
                <a href="{{ route('contact') }}"
                   class="nav-item nav-link{{ Request::route()->getName() === 'contact' ? ' active' : '' }}">Contact
                    Us</a>
            </div>

            @if(auth()->check() && auth()->user()->role === 1)
                <a href="{{ route('dashboard') }}" class="btn btn-primary px-4 mr-2">Admin Panel</a>
            @endif

            @if(auth()->check())
                <a href="{{ route('logout') }}" class="btn btn-primary px-4">Logout</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary px-4">Login</a>
                <a href="{{ url('register') }}" style="margin-left: 8px" class="btn btn-primary px-4">Register</a>
            @endif

        </div>
    </nav>
</div>
<!-- Navbar End -->
