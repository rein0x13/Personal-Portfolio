<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $appends = ["year"];

    public function getYearAttribute()
    {
        $year = $this->year_start;
        if (!empty($this->year_end)) {
            $year .= "-{$this->year_end}";
        }
        return $year;
    }
}
