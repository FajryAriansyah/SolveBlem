<?php

namespace App\Models;

use App\Models\User;
use App\Models\Problem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contest extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function participant(){
        return $this->belongsToMany(User::class, 'contest_user');
    }
    
    public function problem(){
        return $this->belongsToMany(Problem::class, 'contest_problem')->withPivot(['nilai'])->withTimestamps();
    }

    public function problemUser(){
        return $this->belongsToMany(User::class, 'contest_problem_user')->withPivot(['answer'])->withTimestamps;
    }
    public function userProblem(){
        return $this->belongsToMany(Problem::class, 'contest_problem_user')->withPivot(['answer'])->withTimestamps;
    }

    public function generateContestId(){
    
        $isAda = false;
        $randomNumber ='';
        
        while(!$isAda){
            $randomNumber = str_pad(rand(100000,999999), 6, '0', STR_PAD_LEFT);
            $unique = Contest::where('id', $randomNumber)->exists();

            if(!$unique){
                $isAda = true;
            }
        }
        return $randomNumber;
    }

}
