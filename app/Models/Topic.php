<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at'];

    function content()
    {
        return $this->hasMany(Content::class, 'topic_id', 'id');
    }
}
