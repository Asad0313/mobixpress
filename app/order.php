<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //
    protected $table = 'orders';
    protected $primaryKey = 'order_id';

    protected $fillable = [
      'first_name',
        'address',
        'last_name',
        'phone',
        'zip',
        'email'


    ];
}
