<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    public function comments()
    {
        return $this->hasMany('app/comments');
    }
    public function categories()
    {
        return $this->hasMany('app/categories');
    }
    protected $fillable = [
        'title', 'subtitle', 'description', 'check','user_id', 'image', 'public_date',
    ];
}
