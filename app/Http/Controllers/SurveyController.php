<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Response;

class SurveyController extends Controller
{
    // Show the survey form
    public function index()
    {
        $questions = Question::all();  // Retrieve questions from the database
        return view('survey', compact('questions'));
    }

    // Handle the form submission
    public function store(Request $request)
    {
        // Validate and store the responses
        $validated = $request->validate([
            'responses.*' => 'required|in:1,2,3,4,5', // Ensure answers are within range
        ]);

        // Store the responses
        foreach ($validated['responses'] as $questionId => $answer) {
            Response::create([
                'question_id' => $questionId,
                'answer' => $answer,
            ]);
        }

        // Redirect to the results page
        return redirect()->route('survey.results')->with('success', 'Thank you for completing the survey!');
    }

    // Show the survey results
    public function results()
    {
        // Display the results page
        return view('surveyresults');
    }

    // View responses for a specific question
    public function viewResponse($questionId)
    {
        // Retrieve the question and its responses
        $question = Question::findOrFail($questionId);
        $responses = Response::where('question_id', $questionId)->get();

        return view('view-response', compact('question', 'responses'));
    }
}
