<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
	public $timestamps = false;

    protected $fillable = [
        'recipe_id', 'name', 'value',
    ];

    protected $hidden = [
        'recipe_id',
    ];
}
