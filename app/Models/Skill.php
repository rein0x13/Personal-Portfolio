<?php

namespace App\Models;

use App\Enums\ColorEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    public function casts()
    {
        return [
            'color' => ColorEnum::class,
        ];
    }

    public function getColorAttribute()
    {
        if (empty($this->color)) {
            $id = (($this->id - 1) % 5) + 1;
            return ColorEnum::tryFrom($id)->color();
        }
    }
}
