@include('layout.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <style>
        /* Flex layout setup */
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        /* Main content should take up all available space */
        .content {
            flex: 1;
        }

        /* Banner and section styling */
        .banner {
            background-image: url('{{ asset('img/banner.jpeg') }}');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 300px;
            position: relative;
            overflow: hidden;
        }

        .banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .banner h1 {
            position: relative;
            z-index: 2;
            color: white;
        }

        .section {
            padding: 40px 20px;
        }
        
        .footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>



    <div class="content">
        <!-- Banner -->
        <div class="banner d-flex align-items-center justify-content-center text-white">
            <h1>Welcome to Our Site</h1>
        </div>


        
        <!-- Catalog Section -->
        <section id="catalog" class="section text-center py-5 bg-light">
            <div class="container">
                <h3 class="mb-4">Mental Health Catalog</h3>
                <p class="mb-5">We are dedicated to supporting mental health and wellness, providing a safe space for growth and healing.</p>

                @if($article->isEmpty())
                    <p>No articles found for your search.</p>
                @else
                    @foreach($article as $art)
                        <div class="card mb-4 shadow-sm border-0" style="max-width: 100%; padding: 1rem;">
                            <div class="row g-0 align-items-center">
                                <!-- Image Section -->
                                <div class="col-md-4">
                                    <img src="{{ $art->image }}" class="img-fluid rounded-start" alt="Mental Health Resource">
                                </div>
                                <!-- Text Section -->
                                <div class="col-md-8">
                                    <div class="card-body text-start">
                                        <h5 class="card-title">{{ $art->title }}</h5>
                                        <p class="card-text">{{ $art->desc }}</p>
                                        <p class="card-text">Posted: {{ $art->dateposted }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </section>


    </div>

    <!-- Footer -->
    @include('layout.footer')
</body>
</html>
