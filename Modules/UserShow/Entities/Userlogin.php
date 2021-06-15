<?php

namespace Modules\UserShow\Entities;

use Illuminate\Database\Eloquent\Model;

class Userlogin extends Model
{
    // protected $fillable = [];
    protected $fillable = [
        'name', 'email', 'password',
    ];
}