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
            DB::beginTransaction();
            $responden = Responden::create([
                'name' => $request->name,
                'birth_date' => $request->birth_date,
                'gender' => $request->gender,
                'weight' => $request->weight,
                'height' => $request->height,
                'phone' => $request->phone,
            ]);
            // return ['asd'];
        } catch (\Throwable $th) {
            DB::rollBack();
            return [
                $th->getMessage()
            ];
        }
        // DB::rollBack();
        return redirect()->route('mood-board.index');
    }
}
