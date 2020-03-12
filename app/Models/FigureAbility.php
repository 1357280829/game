<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FigureAbility extends Model
{
    protected $fillable = [
        'figure_id', 'ability', 'value'
    ];
}
