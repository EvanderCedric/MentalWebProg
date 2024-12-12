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

        <!-- Contact Section -->
        <section id="contact" class="section custom-bg-greyish text-center ">
            <div class="container">
                <h3>Contact Us</h3>
                <p>Reach out today for more information or to schedule an appointment.</p>
                <p> Open from 08:00-20:00</p>

                @foreach($expert as $exp)
                    <div class="card mb-4 shadow-lg border-0 rounded" style="max-width: 100%; padding: 1rem;">
                        <div class="row g-0 align-items-center">
                            <!-- Image Section -->
                            <div class="col-md-4 position-relative overflow-hidden" style="height: 250px; width: 200px;">
                                <img src="{{ $exp->img }}" class="img-fluid w-100 h-100" alt="Mental Health Resource" style="object-fit: cover; object-position: center;">
                            </div>
                            <!-- Text Section -->
                            <div class="col-md-8">
                                <div class="card-body text-start">
                                    <h5 class="card-title">{{ $exp->name }}</h5>
                                    <p class="card-text">{{ $exp->desc}}</p>
                                    </p>
                                    <a href="{{$exp->link}}" class="btn btn-primary mt-auto">Visit Zoom</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
    </div>

    <!-- Footer -->
    @include('layouts.footer')
</body>
</html>
