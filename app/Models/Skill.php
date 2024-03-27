<?php

namespace App\Models;

use App\Enums\ColorEnum;
use App\Traits\HasVisibility;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{
    use HasFactory, SoftDeletes, HasVisibility;

    protected $guarded = [];

    public function casts()
    {
        return [
            'color'     => ColorEnum::class,
            'visible'   => 'boolean',
        ];
    }

    public function getNameAttribute($value)
    {
        return (!empty($value)) ? ucwords($value) : null;
    }

    public function techStack()
    {
        return $this->hasMany(TechStack::class);
    }
}
