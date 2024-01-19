<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'quiz';
    protected $guarded = [];
    public $timestamps = false;

    public function answers()
    {
        return $this->hasMany(Answer::class, 'quiz_id', 'id');
    }

    public function correct_answer()
    {
        return $this->hasOne(Answer::class, 'quiz_id', 'id')->where('is_correct', true);
    }
}
