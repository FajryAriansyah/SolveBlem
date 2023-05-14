<?php

namespace App\Http\Controllers;

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
    public function store()
    {

        return redirect('contest/{}');
    }
}