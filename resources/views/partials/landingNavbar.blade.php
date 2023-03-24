<header class="navbar navbar-light fw-bold" style="background-color: turquoise">
    <div class="container-lg d-flex justify-content-center position-relative">
        <h2>Amazing E-Grocery</h2>

        <div class="position-absolute end-0 me-3">
            @if (!Auth::check() && Request::is('/'))
                <a class="button" href="{{ route('register') }}">Register</a>
                <a class="button" href="{{ route('login') }}">login</a>
            @elseif (Auth::check())
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="button">
                        Logout
                    </button>
                </form>
            @endif
        </div>
    </div>
</header>

