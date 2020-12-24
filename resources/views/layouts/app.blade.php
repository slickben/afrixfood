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
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class=" h-screen antialiased leading-none font-sans">
    <div class="flex flex-col h-screen" id="app">
        <header class="shadow-sm py-6 flex-grow-0">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="flex text-2xl font-semibold no-underline uppercase ">
                        <span class="text-dark">Afrix</span>
                        <img class="w-8" src="{{ asset('icons/iconfinder__shooting_star_1679651.png') }}">
                        <span class="text-yellow-500">Food</span>
                    </a>
                </div>
                <div>
                
                </div>
                <nav class="space-x-4 uppercase text-base sm:text-base font-semibold flex items-center">
                    <!-- @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest -->
                    <a class="block"  href="{{ route('cart.cart') }}" rel="noopener noreferrer">
                        <span class="flex items-center">
                            Cart <span class="ml-1 bg-yellow-500 rounded-full  px-2 pb-1 text-xs text-white">1</span>
                        </span>
                        
                    </a>
                    <a class="block" href="{{ route('menus') }}" rel="noopener noreferrer">
                        Menus
                    </a>
                </nav>
            </div>
        </header>

        @yield('content')

        <footer class="bg-gray-700 text-center py-20 text-white flex-grow-0">
            <h2 >© Copyright 2020 AfrixFood is a registered trademark</h2>
        </footer>
    </div>
</body>
</html>
