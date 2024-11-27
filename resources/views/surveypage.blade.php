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
    <div class="banner d-flex align-items-center justify-content-center text-white" style="height: 300px; background-color: #007BFF;"></div>
   

    <!-- About Section -->
    <section id="about" class="section text-center custom-bg-greyish">
        
     <!-- Back Button -->
     <div class="d-flex justify-content-start text-center" style="margin-top: 10px; margin-left: 10px;">
            <a href="{{ url('/survey') }}" class="btn btn-secondary">Back</a>
    </div>

        <div class="container d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                    Coming soon
                </div>
        </div>
    </section>
    </div>



    <!-- Footer -->
    @include('layout.footer')
</body>
</html>
