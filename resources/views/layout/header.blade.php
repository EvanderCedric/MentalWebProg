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

    <header class="p-3 custom-bg-greenishteal  {{ $headerClass ?? 'default-header' }} custom-bg-greenishteal">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-between">
                
                <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img src="{{ asset('img/logo2.png') }}" alt="Logo" width="70" height="70" class="me-2">
                </a>
                
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li>
                        <a href="{{ url('/home' . (request('search') ? '?search=' . request('search') : '')) }}" 
                        class="nav-link px-2 {{ Request::is('home') ? 'fw-bold text-secondary' : 'text-white' }}">
                        Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/catalog' . (request('search') ? '?search=' . request('search') : '')) }}" 
                        class="nav-link px-2 {{ Request::is('catalog') ? 'fw-bold text-secondary' : 'text-white' }}">
                        Catalog
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/survey' . (request('search') ? '?search=' . request('search') : '')) }}" 
                        class="nav-link px-2 {{ Request::is('survey') ? 'fw-bold text-secondary' : 'text-white' }}">
                        Survey
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/contactus' . (request('search') ? '?search=' . request('search') : '')) }}" 
                        class="nav-link px-2 {{ Request::is('contactus') ? 'fw-bold text-secondary' : 'text-white' }}">
                        Contact Us
                        </a>
                    </li>
                </ul>



                <!-- Search Form at the Very Top Right -->
                <form action="{{ route('catalog') }}" method="GET" role="search" class="d-flex ms-auto">
                <input type="search" name="search" class="form-control form-control-dark" 
                    placeholder="Search..." 
                    aria-label="Search" 
                    value="{{ $search ?? '' }}">

                    <button type="submit" class="btn btn-outline-light ms-2">Search</button>
                </form>


            </div>

        </div>
    </header>

  
    <!-- Main Content Area -->
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
