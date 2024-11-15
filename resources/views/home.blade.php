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

        <!-- Services Section -->
        <section id="services" class="section bg-light text-center">
            <div class="container">
                <h3>Our Services</h3>
                <p>Explore our range of mental health services designed to support your wellness journey.</p>
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
