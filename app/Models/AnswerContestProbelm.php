<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class answerContestProbelm extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsToMany(User::class,'contest_problem_user')->withPivot('answer');
    }
    public function problem(){
        return $this->belongsToMany(Problem::class,'contest_problem_user')->withPivot('answer');
    }
    public function contest(){
        return $this->belongsToMany(Contest::class,'contest_problem_user')->withPivot('answer');
    }

}
