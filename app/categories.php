<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    public function postsblog()
    {
        return $this->hasMany('app/postsblog');
    }
}
