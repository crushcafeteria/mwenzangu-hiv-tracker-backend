<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at'];

//    function user()
//    {
//        return $this->hasOne(User::class, 'id', 'user_id');
//    }
    function friender()
    {
        return $this->hasOne(User::class, 'id', 'friender');
    }
    function friended()
    {
        return $this->hasMany(User::class, 'id', 'friended');
    }
}
