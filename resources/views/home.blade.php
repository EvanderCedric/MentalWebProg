@include('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body class="custom-bg">
    <div class="content">
    <!-- Banner -->
    <div class="banner d-flex align-items-center justify-content-center text-white" style= background-color: #007BFF;"></div>


        <!-- Home Section -->
        <section id="about" class="section custom-bg-greyish text-center">
            <div class="container">
                <h3 class="mb-4">About Us</h3>
                <p class="mb-5">
                    Our mission is to prioritize mental health and wellness by providing resources, tools, and a supportive community. We aim to create a safe and nurturing environment where individuals can thrive emotionally and mentally.
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card p-4 border-0 shadow-sm">
                            <h5 class="mb-3">Our Vision</h5>
                            <p>
                                To be a beacon of hope and healing by empowering individuals to embrace their mental health journey. We aspire to break the stigma surrounding mental health and foster a world where seeking help is a sign of strength.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-4 border-0 shadow-sm">
                            <h5 class="mb-3">Our Mission</h5>
                            <p>
                                To connect individuals with the resources they need for personal growth and healing. Through our supportive community, group activities, and professional guidance, we strive to make mental health care accessible and impactful for everyone.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container mt-5">
    <h4 class="mb-4 text-center">Mental Blogs</h4>
    <div class="row justify-content-center">
        @foreach($article as $art)
            <div class="col-md-4 mb-4 d-flex align-items-stretch">
                <div class="card shadow-sm border-0">
                    <div class="position-relative overflow-hidden" style="height: 200px;">
                        <img src="{{ $art->image }}" class="img-fluid w-100 h-100" alt="Top Article" style="object-fit: cover; object-position: center;">
                    </div>
                    <div class="card-body text-start d-flex flex-column">
                        <h5 class="card-title">{{ $art->title }}</h5>
                        <p class="card-text text-truncate" style="max-height: 3rem; overflow: hidden;">
                            {{ $art->desc }}
                        </p>
                        <a href="{{ url('/articles/' . $art->id) }}" class="btn btn-outline-primary mt-auto">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


    <!-- Footer -->
    @include('layouts.footer')
</body>
</html>
