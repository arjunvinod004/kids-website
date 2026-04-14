<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [
        'title',
        'title_ml',
        'questions',
        'questions_ml',
        'age_group',
    ];

    protected $casts = [
        'questions' => 'array',
        'questions_ml' => 'array',
    ];
}
