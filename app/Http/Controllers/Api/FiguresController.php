<?php

namespace App\Http\Controllers\Api;

use App\Enums\Ability;
use App\Enums\Code;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\FigureRequest;
use App\Models\Figure;
use App\Models\FigureAbility;

class FiguresController extends Controller
{
    public function show(Figure $figure)
    {
        $figure->load('abilities');

        $figure->abilities->each(function ($item) {
            $item->ability_key = Ability::getKey($item->ability, true);
        });

        return $this->res(Code::Success, $figure);
    }

    public function store(FigureRequest $request)
    {
        $figure = Figure::create($request->validated());

        $figureAbilities = $figure->heroClassAbilities->map(function ($item) {
                return new FigureAbility([
                    'ability' => $item->ability,
                    'value' => $item->value,
                ]);
            });

        $figure->abilities()->saveMany($figureAbilities);

        return $this->res();
    }
}
