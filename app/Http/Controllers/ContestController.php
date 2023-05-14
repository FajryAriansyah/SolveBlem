<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|max:255',
            'user_id' => 'required',
            'start_at' => 'required',
            'duration' => 'required|',
            'max_participant' => 'required',
            'password' => 'required',
        ]);

        Contest::create[$validated];

        return redirect('contest/{}');
    }
}