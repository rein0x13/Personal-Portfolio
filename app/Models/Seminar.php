<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seminar extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function getDateAttribute($value)
    {
        return Carbon::parse($value)->format('F d, Y');
    }
}
