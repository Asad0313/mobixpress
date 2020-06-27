<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $table = 'reviews';
    protected $primaryKey = 'ReviewID';

    protected $fillable = [
        'ReviewID',
        'users_id',
        'pro_id',
        'pro_image',
        'email',
        'FullName',
        'pro_name',
        'productQuality',
        'DeliveryService',
        'otherServices',
        'other',
        'YourViews',
        'created_at',
        'updated_at',

    ];

    //Relationship one to one

    public function product(){
        return $this->belongsTo('App\Product');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
