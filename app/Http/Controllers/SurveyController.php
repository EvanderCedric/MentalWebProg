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
        $questions = Question::all();
        return view('surveypage', compact('questions'));
    }
    
    // Handle the form submission
    public function store(Request $request)
    {
        $validated = $request->validate([
            'responses.*' => 'required|in:1,2,3,4,5',
        ]);
        foreach ($validated['responses'] as $questionId => $answer) {
            Response::create([
                'question_id' => $questionId,
                'answer' => $answer,
            ]);
        }
        return redirect()->route('surveyresults')->with('success', 'Thank you for completing the survey!');
    }
    

    // Show the survey results
    public function results()
    {
        // Fetch all responses and calculate the average for each question
        $questions = Question::with('responses')->get();
    
        $responses = $questions->map(function ($question) {
            $averageResponse = $question->responses->avg('answer');
            return [
                'question' => $question,
                'average_response' => round($averageResponse, 2), 
            ];
        });
    
        return view('surveyresults', compact('responses'));
    }
    
}
