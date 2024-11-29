@include('layout.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    
</head>
<body>
    <div class="content">
    <!-- Banner -->
    <div class="banner d-flex align-items-center justify-content-center text-white" style="background-color: #007BFF;"></div>


        <!-- Survey Section -->
        <section id="about" class="section text-center custom-bg-greyish">
            <div class="container d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Start Survey</h5>
                            <p class="card-text">Take the first step to assess your mental health and well-being.</p>
                            <a href="{{ url('/surveypage') }}" class="btn btn-primary">Start</a>
                        </div>
                    </div>
            </div>
        </section>
    </div>



    <!-- Footer -->
    @include('layout.footer')
</body>
</html>
