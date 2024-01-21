<?php

namespace App\Http\Controllers;

use App\Models\Responden;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'birth_date' => 'required',
            'gender' => 'required',
            'weight' => 'required',
            'height' => 'required',
        ]);

        try {
            // DB::beginTransaction();
            $responden = new Responden([
                'name' => $request->name,
                'birth_date' => $request->birth_date,
                'gender' => $request->gender,
                'weight' => $request->weight,
                'height' => $request->height,
                'phone' => $request->phone,
            ]);
            // return ['asd'];
            session(['quiz' => [
                'responden' => $responden,
                'answer' => []
            ]]);
            // return dd(session('quiz'));
        } catch (\Throwable $th) {
            // DB::rollBack();
            return [
                $th->getMessage()
            ];
        }
        // DB::commit();
        return redirect()->route('mission.index');
    }
}
