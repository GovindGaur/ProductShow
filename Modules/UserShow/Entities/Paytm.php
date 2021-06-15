<?php

namespace Modules\UserShow\Entities;

use Illuminate\Database\Eloquent\Model;

class Paytm extends Model
{
    protected $table = 'paytm';

    protected $fillable = ['name','mobile','email','status','fee','order_id','transaction_id'];
}