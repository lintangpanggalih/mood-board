<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
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
}
