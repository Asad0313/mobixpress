<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use App\User;



class Product extends Model
{
    //
    use Searchable;
    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = ['pro_name','pro_code','pro_price','image','pro_info','spl_price','brands'];

//    public function getPriceAttribute($value){
//
//        $newform = "RS".$value;
//        return $newform;
//    }

}


