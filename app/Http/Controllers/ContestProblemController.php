<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use App\Models\Problem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContestProblemController extends Controller
{
    public function index(Contest $contest){

        $fromContest = true;
        return view('problem.createPage', compact('fromContest', 'contest' ));
    }

    public function store(Request $request, Contest $contest){

        $slug = str_replace(' ','-',strtolower($request->Judul));
        $problem = Problem::create([
            'judul' => $request["Judul"] ,
            'slug' => $slug ,
            'user_id' => auth()->user()->id,
            'batas_waktu' => $request["Time_Limit"] ,
            'batas_memori' => $request["Memori_Limit"] ,
            'deskripsi' => $request["Deskripsi"] ,
            'format_input' => $request["Format_Input"] ,
            'format_output' => $request["Format_Output"] ,
            'contoh_input' => $request["Contoh_Input"] ,
            'contoh_output' => $request["Contoh_Output"] ,
            'case_input' => $request["Testcase_Input"] ,
            'case_output' => $request["Testcase_Output"] ,
        ]);
        
        DB::table('contest_problem')->insert([
            'contest_id' => $contest->id,
            'problem_id' => $problem->id,
        ]);



        return redirect('/contest/'.$contest->slug.'/create/problem');
    }
    

    public function show($CSlug, $PSlug){

        $contest = Contest::where('slug', $CSlug)->firstOrFail(); // langsung mengambil yang pertama
        $problem = Problem::where('slug', $PSlug)->firstOrFail();
        
        return view('problem.index',compact('contest','problem'));
    }

    public function problem(Contest $contest){
        $posts = Problem::all();

        session()->put('select', true);
        return view('problem.list', compact('posts', 'contest'))->with('select');
    }

    public function storeProblem($cSlug, $pSlug){
        $contest = Contest::where('slug', $cSlug)->firstOrFail();
        $problem = Problem::where('slug', $pSlug)->firstOrFail();

        DB::table('contest_problem')->insert([
            'contest_id' => $contest->id,
            'problem_id' => $problem->id,
        ]);
        
        return redirect('/contest/'.$contest->slug.'/create/problem');

    }

}
