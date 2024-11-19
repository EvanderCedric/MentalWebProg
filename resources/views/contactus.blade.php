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

        <!-- Contact Section -->
        <section id="contact" class="section custom-bg-greyish text-center ">
            <div class="container">
                <h3>Contact Us</h3>
                <p>Reach out today for more information or to schedule an appointment.</p>
                <form>
                    <input type="text" placeholder="Your Name" class="form-control mb-2">
                    <input type="email" placeholder="Your Email" class="form-control mb-2">
                    <textarea placeholder="Your Message" class="form-control mb-2"></textarea>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </section>
    </div>

    <!-- Footer -->
    @include('layout.footer')
</body>
</html>
