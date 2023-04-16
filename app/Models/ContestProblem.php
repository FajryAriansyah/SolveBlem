<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContestProblem extends pivot
{
    use HasFactory;
    protected $table = 'contest_problem';
    protected $guarded = 'id';
}
