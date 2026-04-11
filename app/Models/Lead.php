<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    //
        protected $table = 'leads';
    protected $fillable = [
        'full_name',
        'email',
        'company',
        'country',
        'interest',
        'last_message'
    ];
}
