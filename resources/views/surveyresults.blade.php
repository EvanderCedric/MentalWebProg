@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center mb-4">Survey Results</h2>

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
