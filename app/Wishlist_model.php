<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist_model extends Model
{
    //
    protected $table = 'table_wishlist';
    protected $primaryKey = 'id';



    protected $fillable = ['user_id','pro_id','productname','productprice','productimage'];

    public function product(){
        return $this->belongsTo('App\Product');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
