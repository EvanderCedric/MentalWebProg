@include('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

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
                    <a href="/survey" class="btn btn-outline-primary">Back</a>
                </div>

                <form method="POST" action="{{ route('surveypage.store') }}" class="shadow p-4 rounded bg-light">
                    @csrf

                    @foreach ($questions as $question)
                        <div class="mb-4">
                        <label class="form-label d-block mb-3 fw-bold">{{ $question->text }}</label>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-check d-flex flex-column align-items-center mx-2">
                                <input class="form-check-input mb-1" type="radio" name="responses[{{ $question->id }}]" id="question{{ $question->id }}-1" value="1" required>
                                <label class="form-check-label" for="question{{ $question->id }}-1">Never</label>
                            </div>
                            <div class="form-check d-flex flex-column align-items-center mx-2">
                                <input class="form-check-input mb-1" type="radio" name="responses[{{ $question->id }}]" id="question{{ $question->id }}-2" value="2" required>
                                <label class="form-check-label" for="question{{ $question->id }}-2">Rarely</label>
                            </div>
                            <div class="form-check d-flex flex-column align-items-center mx-2">
                                <input class="form-check-input mb-1" type="radio" name="responses[{{ $question->id }}]" id="question{{ $question->id }}-3" value="3" required>
                                <label class="form-check-label" for="question{{ $question->id }}-3">Sometimes</label>
                            </div>
                            <div class="form-check d-flex flex-column align-items-center mx-2">
                                <input class="form-check-input mb-1" type="radio" name="responses[{{ $question->id }}]" id="question{{ $question->id }}-4" value="4" required>
                                <label class="form-check-label" for="question{{ $question->id }}-4">Often</label>
                            </div>
                            <div class="form-check d-flex flex-column align-items-center mx-2">
                                <input class="form-check-input mb-1" type="radio" name="responses[{{ $question->id }}]" id="question{{ $question->id }}-5" value="5" required>
                                <label class="form-check-label" for="question{{ $question->id }}-5">Always</label>
                            </div>
                        </div>

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

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
