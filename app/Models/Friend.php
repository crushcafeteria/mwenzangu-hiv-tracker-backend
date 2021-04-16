<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Friend extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at'];
    protected $appends = ['friender_formatted', 'friended_formatted'];

    function getFrienderFormattedAttribute()
    {
        return User::find($this->attributes['friender']);
    }

    function getFriendedFormattedAttribute()
    {
        return User::find($this->attributes['friended']);
    }
}
