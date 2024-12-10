@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center mb-4">Survey Results</h2>
        <!-- Back Button -->
        <div class="d-flex justify-content-start mb-4">
            <a href="/survey" class="btn btn-outline-primary">Back</a>
        </div>
        <!-- Display the survey results -->
        <table class="table">
            <thead>
                <tr>
                    <th>Question</th>
                    <th>Average Response</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($responses as $response)
                    <tr>
                        <td>{{ $response['question']->text }}</td>
                        <td>{{ $response['average_response'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
