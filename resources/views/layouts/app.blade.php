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
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            font-family: 'Courier New', Courier, monospace;
            background-image: url("{{ asset('assets/images/background_tech.jpg') }}");
        }

        .navbar {
            /* background-color: black; */
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 0;
        }

        a {
            color: white;
            padding: 15px;
            text-decoration: none;
            font-size: 2vw;
            font-weight: bold;
            font-family: 'Courier New', Courier, monospace;
            margin-left: 5px;
            margin-right: 5px;
        }

        a:hover {
            background-color: white;
            color: black;
        }

        #login {
            position: absolute;
            right: 0;

        }

        #login a {
            font-size: 1vw;
        }

        @media only screen and (max-width: 760px) {
            .navbar {
                flex-direction: column;

            }

            #login {
                display: flex;
                flex-direction: column;

            }

            #login a {
                font-size: 2vw;
            }
        }

        .button:hover {
            background-color: lightskyblue;
        }

    </style>
</head>

<body onload="showCart()">
    <div id="app">
        <div class="navbar">
            <a href="{{ url('/') }}" target="_self" rel="noopener noreferrer">HOME</a>
            <a href="{{ route('products.index') }}" target="_self" rel="noopener noreferrer">PRODUCTS</a>
            <a href="{{ route('cart') }}" target="_self" rel="noopener noreferrer">CART</a>
            <a href="{{ route('contact') }}" target="_self" rel="noopener noreferrer">CONTACT</a>
            @if (Route::has('login'))
                <div id="login">
                    @auth
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
                    @else
                        <a href="{{ route('login') }}" class="text-sm">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-sm">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <main class="container">
            @yield('content')
        </main>
    </div>
</body>

</html>
