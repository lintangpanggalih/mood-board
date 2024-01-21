<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $data = session('quiz.answer');
        return view('apps.mission.index', $data);
    }

    public function show()
    {
        // return session('quiz');
        $progress = session('quiz.answer');
        $order = 1;

        if (!empty($progress)) {
            $order = sizeof($progress) + 1;
        }

        $data['quiz'] = $quiz = Question::with('answers')->where('order', $order)->first();
        if (!$quiz) {
            abort(404);
        }

        return view('apps.mission.question', $data);
    }

    public function submit(Request $request)
    {
        // return $progress = session()->forget('quiz.answer');
        $answer_id = $request->answer;
        $data['answer'] = $answer = Answer::with('question')->find($answer_id);

        $answer_data = [
            'question' => $request->quiz,
            'answer' => $answer->id,
            'is_correct' => $answer->is_correct,
        ];

        // session()->put('quiz.answer.' . $request->quiz_order, $answer_data);
        // return $answer;
        $message = $answer->is_correct ? 'The answer is correct.' : 'The answer is wrong.';

        return response()->json([
            'data' => $answer_data,
            'progress' => session('quiz.answer'),
            'message' => $message
        ]);
        // return session('quiz');

        // return view('apps.reaction.wrapper-answer', $data);
    }
}
