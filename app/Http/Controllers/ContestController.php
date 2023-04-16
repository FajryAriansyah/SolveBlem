<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use App\Models\Problem;
use Illuminate\Http\Request;
use App\Models\ContestProblem;
use Illuminate\Support\Facades\Hash;

class ContestController extends Controller
{
    public function index(){
        return view('contest.contest');
    }

    public function create(){
        return view('contest.createContest');
    }
    public function store(Request $request){
        $request['slug'] = str_replace(' ','-',strtolower($request->title));
        
        $validated = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:problem',
            'user_id' => 'required',
            'start_at' => 'required',
            'duration' => 'required|',
            'max_participant' => 'required',
            'password' => 'required',
        ]);
        
        $validated['password'] = Hash::make($validated['password']);
        Contest::create($validated); 
        // dd($validated);

        return redirect('contest/'.$request->slug.'/create/problem');
    }

    public function problem(Contest $contest){
        $problems = Problem::with('contest')
                    ->whereHas('contest', function ($query) use($contest){
                        $query->where('contest_id',$contest->id);
                    })->get();
        
        // $problems = $problems->contestProblems($contest->id)->get();

        // $contestProblem = ContestProblem::where('contest_id',$contest->id)->get();
        // $contestProblem = $problems->$contest->where('contest_id',$contest->id)->get();

        // dd($problems);
        return view('contest.createProblem', compact('problems','contest'));
    }
    public function problemStore(){
        return redirect('/contest');
    }
    public function show(Contest $contest){

        $problems = Problem::with('contest')
                    ->whereHas('contest', function($query) use($contest) {
                        $query->where('contest_id', $contest->id);
                    })->get();

        return view('contest.contest_landing', compact('contest','problems'));
    }
}
