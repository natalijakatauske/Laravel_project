<html>

<head>
    @include('components.head')
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-secondary mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">BEST RECIPES</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a href="{{ route('admin.categories') }}" class="nav-link" aria-current="page" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.ingredients') }}" class="nav-link" aria-current="page" href="#">Ingredients</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.recipes') }}" class="nav-link" aria-current="page" href="#">Recipes</a>
                    </li>
                </ul>

               {{---> <ul class="navbar-nav ms-auto mb-2 mb-md-0 ">
                    @auth
                    <li class="nav-item">
                        <a href="{{ route('profile') }}" class="nav-link" aria-current="page">{{ auth()->user()->name }} profile</a>
                    </li> 
                    @endauth
                    <li class="nav-item">
                        @guest
                        <a href="{{ route('login') }}" class="nav-link" aria-current="page">Login</a>
                        @endguest
                        @auth
                        <a href="{{ route('logout') }}" class="nav-link" aria-current="page">Logout</a>
                        @endauth
                    </li>
                    <li class="nav-item">
                        @guest
                        <a href="{{ route('register') }}" class="nav-link" aria-current="page">Signup</a>
                        @endguest
                    </li>
                </ul> ---}}

            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="container">
        &copy 2023 created by N. Katauskė
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>


</html>