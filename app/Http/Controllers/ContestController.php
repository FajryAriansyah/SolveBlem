<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contest;
use App\Models\Problem;
use Illuminate\Http\Request;
use App\Models\ContestProblem;
use Illuminate\Support\Facades\DB;
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
        $contest = new Contest();
        $request['slug'] = str_replace(' ','-',strtolower($request->title));
        $request['id'] = $contest->generateContestId();
        $request['start_at'] = \Carbon\Carbon::parse($request['start_at']);
        // dd($request);
        $validated = $request->validate([
            'id' => 'required',
            'title' => 'required|max:255',
            'slug' => 'required|unique:problem',
            'user_id' => 'required',
            'start_at' => 'required',
            'duration' => 'required|',
            'max_participant' => 'required',
            'password' => 'required',
        ]);
        
        // $validated['id'] = Contest::generateContestid();
        // $validated['password'] = Hash::make($validated['password']);
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
        
        $users = User::with('contestParticipant')->whereHas('contestParticipant', 
            function($query) use($contest){
                $query->where('contest_id', $contest->id);
        })->get();
        
        $answer = User::with('answerContest')->whereHas('answerContest',
            function($query) use($contest){
                $query->where('contest_id', $contest->id);
            }
        )->get();
        
        foreach($users as $user){
            foreach($user->contestParticipant as $userContest){
                if($userContest->id == $contest->id){
                    $totalNilai = DB::table('contest_problem_user')
                    ->where('contest_id', $contest->id)
                    ->where('user_id',$user->id)
                    ->sum('answer');
                    $userContest->pivot->nilai = $totalNilai;
                    $userContest->pivot->save();
                }
            }       
        }
        $users = User::Join('contest_user', 'users.id', '=', 'contest_user.user_id')
        ->where('contest_user.contest_id', $contest->id)
        ->orderBy('contest_user.nilai', 'desc')
        ->get();

        // dd($users[0]->name);
        if($contest->user_id == auth()->user()->id){
            
            return view('contest.contest_landing', compact('contest','problems','users','answer'));
        }else{
            return view('contest.participantContest', compact('contest','problems','users','answer'));
        }
    }
}
