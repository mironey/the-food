<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="antialiased">
      <header>
        <div class="header-top py-2">
          <div class="container">
            <div class="row">
                <div class="col-lg-6">
                  <ul class="list-inline m-0">
                    <li class="list-inline-item"><a href="#">Facebook</a></li>
                    <li class="list-inline-item"><a href="#">Twitter</a></li>
                    <li class="list-inline-item"><a href="#">Instagram</a></li>
                  </ul>
                </div>
                <div class="col-lg-6 text-md-end">
                  <ul class="list-inline m-0">
                    <li class="list-inline-item"><a href="{{ route('login') }}">Login</a></li>
                    <li class="list-inline-item"><a href="{{ route('register') }}">Register</a></li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
        <div class="header-bottom">
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">The Food</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#">Blog</a></li>
                        <li class="nav-item ms-lg-5">
                          <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">
                              <i class="bi bi-search"></i>
                            </button>
                          </form>
                        </li>
                    </ul>
                </div>
            </div>
          </nav>
        </div>
      </header>

      @yield('home')

      <!-- Footer-->
      <footer class="py-5 bg-dark">
          <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
      </footer>
      @livewireScripts
    </body>
</html>
