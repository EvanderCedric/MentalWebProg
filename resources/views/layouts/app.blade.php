<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link href="style.css" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        <header class="p-3 custom-bg-greenishteal">
            <div class="container-fluid">
                <div class="d-flex flex-wrap align-items-center justify-content-between px-3">
                    
                    <!-- Logo -->
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                        <img src="{{ asset('img/logo2.png') }}" alt="Logo" width="70" height="70" class="me-2">
                    </a>
                    
                    <!-- Navigation Links -->
                    <ul class="nav me-lg-auto mb-2 justify-content-center mb-md-0 align-items-center">
                        <li class="nav-item">
                            <a href="{{ url('/' . (request('search') ? '?search=' . request('search') : '')) }}" 
                            class="nav-link px-3 {{ Request::is('home') ? 'fw-bold text-secondary' : 'text-white' }}"
                            style="font-size: 24px; font-weight: bold;">
                            {{ __('Home') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/catalog' . (request('search') ? '?search=' . request('search') : '')) }}" 
                            class="nav-link px-3 {{ Request::is('catalog') ? 'fw-bold text-secondary' : 'text-white' }}"
                            style="font-size: 24px; font-weight: bold;">
                            {{ __('Catalog') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/survey' . (request('search') ? '?search=' . request('search') : '')) }}" 
                            class="nav-link px-3 {{ Request::is('survey') ? 'fw-bold text-secondary' : 'text-white' }}"
                            style="font-size: 24px; font-weight: bold;">
                            {{ __('Survey') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/contactus' . (request('search') ? '?search=' . request('search') : '')) }}" 
                            class="nav-link px-3 {{ Request::is('contactus') ? 'fw-bold text-secondary' : 'text-white' }}"
                            style="font-size: 24px; font-weight: bold;">
                            {{ __('Contact Us') }}
                            </a>
                        </li>
                        <li class="nav-item flex-grow-1 d-flex">
                            <form action="{{ route('catalog') }}" method="GET" role="search" class="d-flex align-items-center w-100" style="max-width: 500px; margin-left: auto;">
                                <input type="search" name="search" class="form-control form-control-dark flex-grow-1" 
                                    placeholder="..." 
                                    aria-label="Search" 
                                    value="{{ $search ?? '' }}" 
                                    style="min-width: 200px;">
                                <button type="submit" class="btn btn-outline-light ms-2">
                                {{ __('Search') }}
                                </button>
                            </form>
                        </li>
                    </ul>




                    <!-- Authentication Links -->
                    <div class="text-end">
                    @guest

                        <button type="button" onclick="window.location.href='{{ route('login') }}'" class="btn btn-outline-light me-2">
                        {{ __('Login') }}
                        </button>

                        <button type="button" onclick="window.location.href='{{ route('register') }}'" class="btn btn-warning">
                        {{ __('Signup') }}
                        </button>
                    @else
                    <div class="dropdown">
                        <button class="btn btn-outline-light dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            @auth
                                <li>
                                    <a class="dropdown-item">Status: {{ Auth::user()->is_admin ? 'Admin' : 'User' }}</a>
                                </li>
                            @endauth


                            @if(Auth::check() && Auth::user()->is_admin)
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin.users.index') }}">{{ __('Manage User') }}</a>
                                </li>
                            @endif



                            <li>
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Edit Profile') }}</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                        </ul>
                    </div>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    @endguest

                    </div>
                </div>
            </div>
        </header>

        <main>
            @yield('content')
        </main>
    </div>

    <script src="js/bootstrap.js"></script>
</body>
</html>
