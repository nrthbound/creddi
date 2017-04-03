<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ftp extends Model
{
    protected $table = 'a_ftp';

     public function accounts()
    {
        return $this->morphMany('App\Account', 'accountable');   
    }

}
