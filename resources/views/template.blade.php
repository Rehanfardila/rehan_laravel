<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-dark">

        <a><img src="{{asset('storage/exx.png')}}" alt="Trulli" width="350" height="150"></a>

        <H3 class="m-3" style="color: darkturquoise">ACADEMY</h3>
        </a>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="nav nav-pills">

                <li class="nav-item">
                    <a class="nav-link active m-2" style="background-color: blue" aria-current="page"
                        href="{{ route('halaman') }}">{{ __('Halaman') }}
                    </a>
                </li>
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link active m-2" style="background-color: red" aria-current="page"
                        href="{{ route('login') }}">{{ __('Login') }}
                    </a>
                </li>
                @endif

                @if (Route::has('register')) <li class="nav-item">
                    <a class="nav-link active m-2" style="background-color: rgb(37, 223, 37)"
                        href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active m-2" style="background-color: darkorange" aria-current="page"
                        href="{{ route('galeri') }}">{{ __('Galeri') }}
                    </a>
                    @endif
                    @else
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </nav>
</div>



<main class="py-4">
    @yield('content')
    <br>
    <br>

    <footer class="footer bg-primary" style="height: 200px; padding: 50px">
        <div class="row">
            <div class="col-1"></div>
            <div class="col">
                <H3 style="color: yellow">Excel Academy</H3>
                <P style="color: yellow">contact : 081587838388</P>
            </div>
            <div class="col-2"></div>
            <div class="col">
                <H3 style="color: yellow">Social Media</H3>
                <P style="color: yellow">contact :@ExcelAcademy</P>
            </div>
        </div>
    </footer>
</main>
</div>

</html>