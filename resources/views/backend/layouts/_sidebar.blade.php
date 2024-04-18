<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        @if(Auth::user()->role === 1)

            <li class="nav-item">
                <a class="nav-link @if(Request::segment(2) !== 'dashboard') collapsed @endif"
                   href="{{ route('dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>



            <li class="nav-item">
                <a class="nav-link @if(Request::segment(2) !== 'category') collapsed @endif"
                   href="{{ route('category') }}">
                    <i class="bi bi-list"></i>
                    <span>Categories</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link @if(Request::segment(2) !== 'user') collapsed @endif"
                   href="{{ route('user') }}">
                    <i class="bi bi-person"></i>
                    <span>Users</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link @if(Request::segment(2) !== 'blog') collapsed @endif"
                   href="{{ route('blog_list') }}">
                    <i class="fas fa-pencil-alt"></i>
                    <span>Blogs</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link @if(Request::segment(2) !== 'page') collapsed @endif"
                   href="{{ route('page') }}">
                    <i class="bi bi-file-richtext"></i>
                    <span>Pages</span>
                </a>
            </li>


        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) !== 'gallery') collapsed @endif"
               href="{{ route('gallery_images') }}">
                <i class="bi bi-images"></i>
                <span>Gallery</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) !== 'services') collapsed @endif"
               href="{{ route('services') }}">
                <i class="fas fa-briefcase fa-3x"></i>
                <span>Our Services</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) !== 'order') collapsed @endif"
               href="{{ route('order') }}">
                <i class="fas fa-inbox fa-3x"></i>
                <span>All Orders</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) !== 'slider') collapsed @endif"
               href="{{ route('slider') }}">
                <i class="bi bi-sliders"></i>
                <span>Homepage Slider</span>
            </a>
        </li>



        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) !== 'edit_password') collapsed @endif"
               href="{{ route('edit_password') }}">
                <i class="fas fa-key"></i>
                <span>Change Password</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) !== 'help') collapsed @endif"
               href="{{ url('panel/help/list') }}">
                <i class="bi bi-question-circle"></i>
                <span>Help</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) !== 'inbox') collapsed @endif"
               href="{{ route('inbox') }}">
                <i class="bi bi-envelope"></i>
                <span>Inbox</span>
            </a>
        </li>
        @endif


    </ul>

</aside>
