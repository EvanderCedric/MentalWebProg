@include('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Survey</title>
</head>
<body>

    <div class="content">

        <!-- Banner -->
        <div class="banner d-flex align-items-center justify-content-center text-white py-5" style="background-color: #007BFF;">
        </div>

        <!-- Survey Form Section -->
        <section id="survey" class="section py-5">
            <div class="container">
                <h2 class="text-center mb-4">We value your opinion! Please answer the following questions.</h2>

                <!-- Back Button -->
                <div class="d-flex justify-content-start mb-4">
                    <a href="{{ route('survey.index') }}" class="btn btn-outline-primary">Back</a>
                </div>

                <form method="POST" action="{{ route('survey.store') }}" class="shadow p-4 rounded bg-light">
                    @csrf

                    @foreach ($questions as $question)
                        <div class="mb-4">
                            <label for="question{{ $question->id }}" class="form-label">{{ $question->text }}</label>
                            <select name="responses[{{ $question->id }}]" id="question{{ $question->id }}" class="form-select" required>
                                <option value="" disabled selected>Select your answer</option>
                                <option value="1">1 - Never</option>
                                <option value="2">2 - Rarely</option>
                                <option value="3">3 - Sometimes</option>
                                <option value="4">4 - Often</option>
                                <option value="5">5 - Always</option>
                            </select>
                            @if ($errors->has("responses.{$question->id}"))
                                <div class="text-danger">{{ $errors->first("responses.{$question->id}") }}</div>
                            @endif
                        </div>
                    @endforeach

                    <div class="text-center">
                        <!-- Green Button -->
                        <button type="submit" class="btn btn-success btn-lg">Submit</button>
                    </div>
                </form>
            </div>
        </section>

    </div>

    <!-- Footer -->
    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
