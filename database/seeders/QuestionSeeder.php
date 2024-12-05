<?php

namespace Database\Seeders;
use App\Models\Question;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions =[
            'Over the past week, how often have you felt overwhelmed by your responsibilities?',
            'How often do you feel sad or hopeless for no clear reason?',
            'Do you feel supported by friends or family when facing difficulties?',
            'In the past two weeks, how often have you felt nervous, anxious, or on edge?',
            'How satisifed are you with yourself and your abilities?',
            'How oftenn do you find it difficult to concentrate on tasks or activities?',
            'When faced with challenges, how confident are you in your ability to handle them?',
            'How often do you experience physical symtomps like headaches or stomachaches when stressed?',
            'Do you feel your life has a sense of direction or purpose?'
        ];

        foreach ($questions as $text) {
            Question::create(['text' => $text]);
    }
}
}
