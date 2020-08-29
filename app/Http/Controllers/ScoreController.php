<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function index() 
    {
        //$scores = \DB::table('scores')->get();
        $scores = \DB::table('scores')->orderBy('score','DESC')->take(10)->get();
        return view('front',['scores' => $scores]);
    }
}
