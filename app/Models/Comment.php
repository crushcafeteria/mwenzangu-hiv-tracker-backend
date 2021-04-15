<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at'];

    function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    function post()
    {
        return $this->belongsTo(Post::class, 'id', 'user_id');
    }

}
