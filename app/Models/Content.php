<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at'];


    function topics()
    {
        return $this->hasMany(Topic::class, 'id', 'topic_id');
    }
}
