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
        <div class="banner d-flex align-items-center justify-content-center text-white">
            <h1>Welcome to Our Site</h1>
        </div>



        <!-- About Section -->
        <section id="about" class="section text-center custom-bg-greyish">
            <div class="container">
                <h3>About Us</h3>
                <p>We are dedicated to supporting mental health and wellness, providing a safe space for growth and healing.</p>
            </div>
        </section>
    </div>



    <!-- Footer -->
    @include('layout.footer')
</body>
</html>
