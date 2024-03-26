<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $with = ['techStacks'];

    public function techStacks()
    {
        return $this->hasMany(TechStack::class);
    }
}
