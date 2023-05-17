<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use Illuminate\Http\Request;

class ProblemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug)
    {
        $problem = Problem::where('slug', $slug)->firstOrFail();
        return view('problem.index', [
            'problem' => $problem,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd("Berhasil masuk");
        return view('problem.createPage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->Judul);
        $slug = str_replace(' ', '-', strtolower($request->Judul));



        Problem::create([
            'judul' => $request["Judul"],
            'slug' => $slug,
            'batas_waktu' => $request["Time_Limit"],
            'batas_memori' => $request["Memori_Limit"],
            'deskripsi' => $request["Deskripsi"],
            'format_input' => $request["Format_Input"],
            'format_output' => $request["Format_Output"],
            'contoh_input' => $request["Contoh_Input"],
            'contoh_output' => $request["Contoh_Output"],
            'case_input' => $request["Testcase_Input"],
            'case_output' => $request["Testcase_Output"],
        ]);

        return redirect('/problem/' . $slug);
    }

    /**
     * Display the specified resource.
     */
    public function show(Problem $problem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Problem $problem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Problem $problem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Problem $problem)
    {
        //
    }


    /**
     * Show list in view
     */

    public function showList()
    {
        return view('problem.list', [
            'posts' => Problem::latest()->get(),
        ]);
    }

}