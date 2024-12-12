@include('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link href="style.css" rel="stylesheet">
</head>
<body>



    <div class="content">
        <!-- Banner -->
        <div class="banner d-flex align-items-center justify-content-center text-white" style="background-color: #007BFF;"></div>


        <!-- Catalog Section -->
        <section id="catalog" class="section text-center py-5 custom-bg-greyish">
            <div class="container">
                <h3 class="mb-4">Mental Health Catalog</h3>
                <p class="mb-5">We are dedicated to supporting mental health and wellness, providing a safe space for growth and healing.</p>

            @if($articles->isEmpty())
                        <p>No articles found for your search.</p>
            @else
                @foreach($articles as $art)
                    <div class="card mb-4 shadow-lg border-0 rounded" style="max-width: 100%; padding: 1rem;">
                        <div class="row g-0 align-items-center">
                            <!-- Image Section -->
                            <div class="col-md-4 position-relative overflow-hidden" style="height: 200px;">
                                <img src="{{ $art->image }}" class="img-fluid w-100 h-100" alt="Mental Health Resource" style="object-fit: cover; object-position: center;">
                            </div>
                            <!-- Text Section -->
                            <div class="col-md-8">
                                <div class="card-body text-start">
                                    <h5 class="card-title">{{ $art->title }}</h5>
                                    <p class="card-text">{{ $art->desc }}</p>
                                    <p class="card-text">
                                        Posted: {{ date('d F Y', strtotime($art->dateposted)) }}
                                    </p>
                                    <a href="{{ url('/articles/' . $art->id) }}" class="btn btn-primary mt-auto">Read More</a>
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
    @include('layouts.footer')
</body>
</html>
