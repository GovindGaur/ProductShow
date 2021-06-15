<?php

namespace Modules\SellerShow\Entities;

use Illuminate\Database\Eloquent\Model;

class SellerLogin extends Model
{
  
    protected $fillable = [
        'name', 'email', 'password',
    ];
}