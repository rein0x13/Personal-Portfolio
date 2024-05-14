<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'sender',
        'contact',
        'message',
        'read_date',
    ];

    public function read()
    {
        if (!$this->read_date) {
            $this->update(['read_date' => now()]);
        }
    }
}
