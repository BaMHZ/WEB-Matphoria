<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizResult extends Model
{
    use HasFactory;


    protected $fillable = ['user_id', 'quiz_id', 'score', 'passed', 'completed_at'];

    protected $fillable = ['user_id', 'quiz_id', 'score', 'passed', 'retry_attempted', 'completed_at'];

    protected $table = 'quiz_results';
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
