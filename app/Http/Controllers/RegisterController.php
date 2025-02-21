<?php

namespace App\Http\Controllers;

use App\Models\Responden;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index(Request $request) {
        
        $request = Request::capture();
        $token = $request->get('game-token');

        $is_permit = DB::table('tokens')->where('token', $token)->count();
        if (!$is_permit) {
            abort(403);
        }

        return view('apps.register');
    }

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
            $responden = [
                'name' => $request->name,
                'birth_date' => $request->birth_date,
                'gender' => $request->gender,
                'weight' => $request->weight,
                'height' => $request->height,
                'phone' => $request->phone,
            ];
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
