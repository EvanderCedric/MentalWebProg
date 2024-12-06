@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2>Survey Results</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Question</th>
                <th>Average Score</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($responses as $response)
                <tr>
                    <td>{{ $response['question_text'] }}</td>
                    <td>{{ round(array_sum($response['scores']) / count($response['scores']), 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
