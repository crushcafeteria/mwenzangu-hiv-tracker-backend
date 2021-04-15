<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at'];

    protected $appends = ['time_ago', 'liked'];

    function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    function likes()
    {
        return $this->hasMany(Like::class, 'post_id', 'id');
    }

    function comments()
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

    function getTimeAgoAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->diffForHumans();
    }

    function getLikedAttribute()
    {
//        $likes = Like::where('user_id', auth()->id())
    }
}
