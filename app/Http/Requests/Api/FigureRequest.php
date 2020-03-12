<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\Request;

class FigureRequest extends Request
{
    public function rules()
    {
        switch ($this->method()) {
            case 'POST':
                return [
                    'hero_class_id' => 'required|exists:hero_classes,id',
                    'name' => 'required|between:6,12|alpha_dash|unique:figures',
                ];
        }
    }
}
