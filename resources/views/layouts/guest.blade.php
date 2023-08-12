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
                <x-nav-bar />
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
