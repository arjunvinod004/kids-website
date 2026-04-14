<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
        'title',
        'title_ml',
        'content',
        'content_ml',
        'age_group',
    ];
}
