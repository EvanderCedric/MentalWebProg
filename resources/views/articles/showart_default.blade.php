{{-- resources/views/articles/showart_default.blade.php --}}
@include('layout.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }}</title>  
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="content">
        <!-- Banner -->
        <div class="banner d-flex align-items-center justify-content-center text-white" style="background-color: #007BFF;"></div>

        <!-- Back Button -->
        <div class="d-flex justify-content-start text-center" style="margin-top: 10px; margin-left: 10px;">
            <a href="{{ url('/catalog') }}" class="btn btn-secondary">Back to Catalog</a>
        </div>

        <div class="container py-5">
            <h2 class="mb-4">{{ $article->title }}</h2>
            <div class="text-center mb-4">
                <img src="{{ asset($article->image) }}" class="img-fluid rounded" alt="{{ $article->title }}" style="max-height: 300px; object-fit: cover; object-position: center;">
            </div>

            <div class="mb-4">
                <p>{{ $article->desc }}</p>
            </div>

            <div class="text-center">
                <a href="{{ url('/catalog') }}" class="btn btn-secondary">Back to Catalog</a>
            </div>
        </div>
    </div>

    @include('layout.footer')
</body>
</html>
