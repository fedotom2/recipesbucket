<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'title', 'description', 'recipe', 'user_id',
    ];

    protected $hidden = [
        'user_id', 
    ];
}
