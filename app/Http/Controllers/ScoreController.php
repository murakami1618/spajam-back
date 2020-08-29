<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Validator;
class ScoreController extends Controller
{
    public function get() 
    {
        $scores = \DB::table('scores')->orderBy('score','DESC')->take(10)->get();
        return Response::json([
            'scores' => $scores
        ]);

        // return view('front',['scores' => $scores]);
    }

    public function store(Request $request) 
    {
        $validatedData = Validator::make($request->all(),[
            'name' => 'required|max:255',
            'score' => 'required|max:3'
        ]);

        

        if ($validatedData->fails()) {
            return Response::json([
                'message' => 'bad request'
            ], 400);
          }
            
        \DB::table('scores')->insert([
            'name' => $request->name,
            'score' => $request->score,
            'date' => date('Y-m-d H:i:s'),
        ]);
        return Response::json([
            'message' => 'OK'
        ], 200);
    }
}
