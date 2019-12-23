<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class categories extends Model
{

    protected $fillable = ['title', 'slug', 'parent_id', 'published', 'created_by', 'modified_by'];
    // Поиск вложенных категорий


    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    //ссылки на категории
    public function setSlugAttribute($value){
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40) . '-' . \Carbon\Carbon::now()->format('dmyHi'), '-');
    }

    // Поиск постов по внешнему ключу
    public function postsblog()
    {
        return $this->hasMany('app/posts');
    }
}
