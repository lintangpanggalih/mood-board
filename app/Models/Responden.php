<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responden extends Model
{
    use HasFactory;

    protected $table = 'respondens';
    protected $guarded = [];
    public $timestamps = false;

    public function results()
    {
        return $this->hasMany(Result::class, 'responden_id', 'id');
    }
}
