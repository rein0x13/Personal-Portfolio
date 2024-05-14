<?php

namespace App\Models;

use App\Traits\HasVisibility;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Experience extends Model
{
    use HasFactory, SoftDeletes, HasVisibility;

    protected $guarded = [];

    protected function casts()
    {
        return [
            'details' => 'json',
        ];
    }

    public function getYearsAttribute()
    {
        if (!empty($this->end)) {
            return $this->start . '-' . $this->end;
        }
        return $this->start;
    }
}
