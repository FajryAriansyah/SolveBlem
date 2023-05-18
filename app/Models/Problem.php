<?php

namespace App\Models;

use App\Models\Contest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Problem extends Model
{
    use HasFactory;

    protected $table = 'problem';
    protected $guarded = ['id'];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function userAnswer(){
        return $this->belongsToMany(User::class, 'contest_problem_user')->withPivot(['answer'])
            ->withTimestamps();
    }
    public function contest(){
        return $this->belongsToMany(Contest::class,'contest_problem');
    }

    public function contestProblems($contest_id){
        return $this->contest()->where('contest_id' , $contest_id);
    }
}
