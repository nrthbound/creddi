<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    protected $table = 'account_types';

    public function accounts()
    {
        return $this->morphMany('App\Account', 'accountable');   
    }

}
