<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public function accountable()
    {
        return $this->morphTo();
    }
}
