<!-- article/show.blade.php -->
@include('layout.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <style>
        .article-detail {
            padding: 40px 20px;
        }

        .article-detail img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

    <div class="article-detail">
        <div class="container">
            <h2>{{ $article->title }}</h2>
            <p><strong>Posted on:</strong> {{ $article->created_at->format('M d, Y') }}</p>
            <img src="{{ asset('storage/' . $article->image) }}" alt="Article Image">
            <p>{{ $article->desc }}</p>
            <div class="content">
                {!! $article->content !!} <!-- Assuming the full content is stored in the `content` column -->
            </div>
        </div>
    </div>

    @include('layout.footer')
</body>
</html>
