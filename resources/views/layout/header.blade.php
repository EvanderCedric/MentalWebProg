<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Mental Minder Website</title>
</head>
<body>
    <script src="js/bootstrap.js"></script>

    <header class="p-3 custom-bg-greenishteal">
        <div class="container-fluid">
            <div class="d-flex flex-wrap align-items-center justify-content-between px-3">
                
                <!-- Logo -->
                <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img src="{{ asset('img/logo2.png') }}" alt="Logo" width="70" height="70" class="me-2">
                </a>
                
                <!-- Navigation Links -->
                <ul class="nav me-lg-auto mb-2 justify-content-center mb-md-0 align-items-center">
                    <li class="nav-item">
                        <a href="{{ url('/home' . (request('search') ? '?search=' . request('search') : '')) }}" 
                        class="nav-link px-3 {{ Request::is('home') ? 'fw-bold text-secondary' : 'text-white' }}"
                        style="font-size: 24px; font-weight: bold;">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/catalog' . (request('search') ? '?search=' . request('search') : '')) }}" 
                        class="nav-link px-3 {{ Request::is('catalog') ? 'fw-bold text-secondary' : 'text-white' }}"
                        style="font-size: 24px; font-weight: bold;">
                            Catalog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/survey' . (request('search') ? '?search=' . request('search') : '')) }}" 
                        class="nav-link px-3 {{ Request::is('survey') ? 'fw-bold text-secondary' : 'text-white' }}"
                        style="font-size: 24px; font-weight: bold;">
                            Survey
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/contactus' . (request('search') ? '?search=' . request('search') : '')) }}" 
                        class="nav-link px-3 {{ Request::is('contactus') ? 'fw-bold text-secondary' : 'text-white' }}"
                        style="font-size: 24px; font-weight: bold;">
                            Contact Us
                        </a>
                    </li>
                    <li class="nav-item flex-grow-1 d-flex">
                        <form action="{{ route('catalog') }}" method="GET" role="search" class="d-flex align-items-center w-100" style="max-width: 500px; margin-left: auto;">
                            <input type="search" name="search" class="form-control form-control-dark flex-grow-1" 
                                placeholder="Search..." 
                                aria-label="Search" 
                                value="{{ $search ?? '' }}" 
                                style="min-width: 200px;">
                            <button type="submit" class="btn btn-outline-light ms-2">Search</button>
                        </form>
                    </li>
                </ul>


                <!-- Login and Sign-Up Buttons -->
                <div class="text-end">
                    <button type="button" onclick="window.location.href='{{ url('/login') }}'" class="btn btn-outline-light me-2">Login</button>
                    <button type="button" onclick="window.location.href='{{ url('/signup') }}'" class="btn btn-warning">Sign-up</button>
                </div>
            </div>
        </div>
    </header>



  
    <!-- Main Content Area -->
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
