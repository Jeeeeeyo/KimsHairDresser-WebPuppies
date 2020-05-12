<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    protected $table = 'forms';

    public function CustomerResponse() {
        return $this->hasMany('App\CustomerResponse','form_id');
    }
}
