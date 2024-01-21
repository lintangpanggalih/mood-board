<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Responden;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public function index()
    {
        $data = session('quiz.answer') ?? [];
        return view('apps.mission.index', $data);
    }

    public function show()
    {
        $progress = session('quiz.answer');
        $order = 1;

        if (!empty($progress)) {
            $order = sizeof($progress) + 1;
            if (sizeof($progress) == 8) {
                $responden = session('quiz.responden');
                $results = session('quiz.answer');
                // return collect($results);
                $results = collect($results)->map(function ($result) {
                    return new Result([
                        'quiz_id' => $result['question'],
                        'answer_id' => $result['answer'],
                    ]);
                });
                // dd($results);
                try {
                    DB::beginTransaction();
                    $responden = Responden::create($responden);
                    $responden->results()->saveMany($results);
                    DB::commit();
                } catch (\Throwable $th) {
                    DB::rollback();
                    abort(400);
                    //throw $th;
                    return [
                        $th->getMessage(),
                        $th->getFile(),
                        $th->getLine()
                    ];
                }
                $progress = session()->forget('quiz');
                return view('apps.mission.complete');
            }
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

        session()->put('quiz.answer.' . $request->quiz_order, $answer_data);
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
