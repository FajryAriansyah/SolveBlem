<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use App\Models\ContestProblem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ContestController extends Controller
{
    public function index()
    {
        return view('contest.contest');
    }

    public function create()
    {
        return view('contest.createContest');
    }
    public function create_problem()
    {
        return view('contest.createProblem');
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

        // $problems = ContestProblem::
        return view('contest.createProblem', compact('problems'));
    }
    public function problemStore(){
        return redirect('/contest');
    }
    public function show(){
        //
    }
}