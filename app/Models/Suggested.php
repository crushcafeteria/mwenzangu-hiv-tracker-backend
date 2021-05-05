<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggested extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at'];
    protected $appends = ['friender_formatted', 'friended_formatted'];

    function friender()
    {
        return $this->hasOne(User::class, 'id', 'friender');
    }


}
