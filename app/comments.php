<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    public function postsblog()
    {
        return $this->hasMany('app/postsblog');
    }
}
