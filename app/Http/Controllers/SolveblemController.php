<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolveblemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('solveblem.submissions');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('solveblem.user_submission');
    }

    public function user()
    {
        return view('solveblem.user');
    }

    public function contest()
    {
        return view('solveblem.contest');
    }

    public function your_contest()
    {
        return view('solveblem.your_contest');
    }

    public function user_contest()
    {
        return view('solveblem.user_contest');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}