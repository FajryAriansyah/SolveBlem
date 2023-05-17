<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function store(Problem $problem, Request $request){
        $file = file_get_contents($request->file('sourceCode')->path());
        dd($file);
    }
}
