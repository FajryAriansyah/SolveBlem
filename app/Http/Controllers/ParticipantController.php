<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParticipantController extends Controller
{
    public function index(){

    }

    public function enter(Request $request){
        $contest = Contest::where('id', $request->contest_id)->where('password', $request->password)->first();
        if($contest){
            $user = DB::table('contest_user')->where('user_id', auth()->user()->id)->where('contest_id', $contest->id)->first();
            // dd($user);
            if(!$user){
                DB::table('contest_user')->insert([
                    'contest_id' => $contest->id,
                    'user_id' => auth()->user()->id,
                    'nilai' => 0
                ]);
            }
            return redirect(url('/contest/'.$contest->slug));
        }else{
            return back()->with('error','Maaf, Contest tidak ditemukan');
        }
    }
}
