<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Content extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at'];

    protected $appends = ['excerpt'];


    function topics()
    {
        return $this->hasMany(Topic::class, 'id', 'topic_id');
    }

    function getExcerptAttribute()
    {
        return Str::limit($this->attributes['text'], 100);
    }
//
//    function getMediaAttribute()
//    {
//        return
//    }
}
