<?php

namespace App\Models;

class Figure extends Model
{
    protected $fillable = [
        'hero_class_id', 'name'
    ];

    public function abilities()
    {
        return $this->hasMany(FigureAbility::class, 'figure_id', 'id');
    }

    public function heroClassAbilities()
    {
        return $this->hasMany(HeroClassAbility::class, 'hero_class_id', 'hero_class_id');
    }
}
