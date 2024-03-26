<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seminar extends Model
{
    use HasFactory;

    public function getDateAttribute($value)
    {
        return Carbon::parse($value)->format('F d, Y');
    }
}
