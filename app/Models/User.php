<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Contest;
use App\Models\Problem;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'username',
    //     'email',
    //     'password',
    // ];
    protected $guarded = ['id'];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

        public function problem(){
            return $this->hasMany(Problem::class);
        }

        public function answerContest(){
            return $this->belongsToMany(Contest::class, 'contest_problem_user')->withPivot(['answer']);
        }
        public function answerProblem(){
            return $this->belongsToMany(Problem::class, 'contest_problem_user')->withPivot(['answer']);
        }

        public function contest(){
            return $this->belongsTo(Contest::class);
        }
        public function contestParticipant(){
            return $this->belongsToMany(Contest::class, 'contest_user')->withPivot(['nilai']);
        }

}
