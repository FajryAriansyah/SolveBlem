<?php

namespace App\Models;

use App\Models\Problem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contest extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function problem(){
        return $this->belongsToMany(Problem::class)->withTimestamps();
    }

}
