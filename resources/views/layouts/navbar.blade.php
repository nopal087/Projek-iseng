@vite([])
<style>
    body {
        background-color: #fbfbfb;
    }

    @media (min-width: 991.98px) {
        main {
            padding-left: 240px;
        }
    }

    /* Sidebar */
    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        padding: 58px 0 0;
        /* Height of navbar */
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
        width: 240px;
        z-index: 600;
    }

    @media (max-width: 991.98px) {
        .sidebar {
            width: 100%;
        }
    }

    .sidebar .active {
        border-radius: 5px;
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    }

    .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: 0.5rem;
        overflow-x: hidden;
        overflow-y: auto;
        /* Scrollable contents if viewport is shorter than content. */
    }
</style>



<nav class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasScrolling">
    <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <a href="/" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                <i class="fas fa-home fa-fw me-3"></i><span>Home</span>
            </a>
            <a href="/data" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                <i class="fas fa-user fa-fw me-3"></i><span>Data User</span>
            </a>
        </div>
    </div>

</nav>
<!-- Navbar -->
<nav id="main-navbar" class="navbar navbar-expand-md navbar-light bg-white fixed-top">
    <!-- Container wrapper -->
    <div class="container">
        <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
            aria-controls="offcanvasScrolling">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Navbar brand -->
        {{-- <a class="navbar-brand me-2" href="/">
            <img src="{{ asset('img/logoipsum.svg') }}" height="16" alt="Logo" loading="lazy"
                style="margin-top: -1px;" />
        </a> --}}
        <!-- Left links -->

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link fw-bold" href="#">NopalTech</a>
            </li>
            <div>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="#">Kategori</a>
                </li>
            </div>
        </ul>
        <!-- Left links -->

        @guest
            <div class="d-flex align-items-center">
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                        @auth
                            <a href="{{ url('/home') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 btn btn-secondary btn-rounded">Register</a>
                            @endif

                            <a href="{{ route('login') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 btn btn-primary btn-rounded ">Login</a>
                        @endauth
                    </div>
                @endif
            </div>
        @endguest
        @auth
            <div class="d-flex align-items-center">
                {{-- <div class="dropdown"> --}}
                <form action=""></form>
                <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown"
                    aria-expanded="false">
                    {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <li> <button class="dropdown-item" type="submit"> logout</button></li>
                    </form>
                </ul>
            </div>
        </div>
    @endauth
    </div>

    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
