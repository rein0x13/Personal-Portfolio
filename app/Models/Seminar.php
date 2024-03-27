<?php

namespace App\Models;

use App\Traits\HasVisibility;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\HtmlString;

class Seminar extends Model
{
    use HasFactory, SoftDeletes, HasVisibility;

    protected $fillable = [
        'name',
        'subheading',
        'date',
        'description',
        'visible',
        'sort',
    ];

    public function getDateAttribute($value)
    {
        return Carbon::parse($value)->format('F d, Y');
    }

    public function parseSubheading()
    {
        if (!empty($this->subheading) && !empty($this->date)) {
            return new HtmlString("{$this->subheading} | <span style=\"color: #dab072;\">{$this->date}</span>");
        } else if (!empty($this->date)) {
            return new HtmlString("<span style=\"color: #dab072;\">{$this->date}</span>");
        } else if (!empty($this->subheading)) {
            return $this->subheading;
        }
        return false;
    }
}
