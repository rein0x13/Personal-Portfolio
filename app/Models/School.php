<?php

namespace App\Models;

use App\Traits\HasVisibility;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends Model
{
    use HasFactory, SoftDeletes, HasVisibility;

    protected $appends = ["year"];

    protected $guarded = [];

    public function getYearAttribute()
    {
        $year = $this->year_start;
        if (!empty($this->year_end)) {
            $year .= "-{$this->year_end}";
        }
        return $year;
    }
}
