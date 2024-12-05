<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Response;

class SurveyController extends Controller
{
    /**
     * Display the survey form.
     */
    public function index()
    {
        $questions = Question::all();
        return view('surveypage', compact('questions'));
    }

    /**
     * Store the survey responses in the database.
     */
    public function store(Request $request)
    {
        // Validate the responses
        $request->validate([
            'responses' => 'required|array',
            'responses.*' => 'array', // Each response should be an array (multiple choices)
        ]);

        // Loop through each question's responses and store them
        foreach ($request->responses as $questionId => $scores) {
            Response::create([
                'question_id' => $questionId,
                'scores' => json_encode($scores), // Store as JSON
            ]);
        }

        // Redirect to results view
        return redirect('/survey-results')->with('success', 'Survey responses saved successfully!');
    }

    /**
     * Display the survey results.
     */
    public function results()
    {
        // Retrieve all responses with decoded scores
        $responses = Response::with('question')->get()->map(function ($response) {
            return [
                'question_text' => $response->question->text,
                'scores' => json_decode($response->scores), // Decode the JSON scores
            ];
        });

        return view('results', compact('responses'));
    }

    /**
     * View a specific response for a question.
     */
    public function viewResponse($questionId)
    {
        // Retrieve the question and its responses
        $question = Question::findOrFail($questionId);
        $responses = Response::where('question_id', $questionId)->get();

        return view('view-response', compact('question', 'responses'));
    }
}