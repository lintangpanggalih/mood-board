<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function show($order = null)
    {
        if (!$order) {
            $order = 1;
        }
        $data['quiz'] = $quiz = Question::with('answers')->where('order', $order)->first();
        if (!$quiz) {
            abort(404);
        }

        return view('apps.mission.question', $data);
    }

    public function submit(Request $request, $quiz_id)
    {
        $answer_id = $request->answer;
        return $data['answer'] = Answer::with('question')->find($answer_id);

        return view('apps.reaction.wrapper-answer', $data);
    }
}
