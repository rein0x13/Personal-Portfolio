<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Work extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $with = ['techStacks'];

    public function techStacks()
    {
        return $this->hasMany(TechStack::class);
    }
}
