<?php

namespace App\Traits;

trait HasVisibility
{
    public function toggleVisibility()
    {
        $this->update(['visible' => !$this->attributes['visible']]);
    }
}
