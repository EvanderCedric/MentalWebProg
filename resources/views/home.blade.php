@include('layout.header')

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


        <!-- Home Section -->
        <section id="services" class="section custom-bg-greyish text-center">
            <div class="container">
                <h3>About Us</h3>
                <p>We are dedicated to supporting mental health and wellness, providing a safe space for growth and healing.</p>
                <div class="row">
                    <div class="col-md-4">
                        <h5>Individual Counseling</h5>
                        <p>Personalized sessions with a licensed therapist.</p>
                    </div>
                    <div class="col-md-4">
                        <h5>Group Therapy</h5>
                        <p>Join a supportive community in group settings.</p>
                    </div>
                    <div class="col-md-4">
                        <h5>Online Workshops</h5>
                        <p>Engaging workshops focused on mental wellness.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    @include('layout.footer')
</body>
</html>
