<nav class="navbar navbar-expand-md" style="background-color: #ffcc33;">
    <div class="container-lg d-flex justify-content-center">
        <button class="btn btn-outline-light ms-auto d-md-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span data-feather="menu" class="text-dark"></span>
        </button>

        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex gap-4">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link fw-semibold  {{ Request::is('home') ? 'text-decoration-underline' : '' }}">Home</a></li>
                <li class="nav-item"><a href="{{ route('cart') }}" class="nav-link fw-semibold {{ Request::is('cart') ? 'text-decoration-underline' : '' }}">Cart</a></li>
                <li class="nav-item"><a href="{{ route('profile') }}" class="nav-link fw-semibold {{ Request::is('profile') ? 'text-decoration-underline' : '' }}">Profile</a></li>
            </ul>
        </div>
    </div>
</nav>

