<style>
    .nav-link.active::after {
        content: '';
        display: block;
        border-bottom:  3px solid #fff;
        border-radius: 2px;
        width: 50%;
        margin: auto;
        padding-bottom: 5px;
        margin-bottom: -8px;
    }
    .nav-link:hover::after {
        content: '';
        display: block;
        border-bottom:  3px solid #fff;
        border-radius: 2px;
        width: 50%;
        margin: auto;
        padding-bottom: 5px;
        margin-bottom: -8px;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand d-none d-md-flex" href="{{ url('/') }}">
        <img src="images/icons/icons.png" alt="logo" width="200" height="">
    </a>
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="#">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->is('users') ? 'active' : '' }}" href="{{ route('users') }}">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">About Us</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="btn" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="btn btn-danger" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @endguest
            </ul>
        </div>
    </div>
</nav>
