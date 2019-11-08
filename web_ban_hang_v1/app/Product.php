<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'product';
    protected $fillable = ['id','product_cat','product_brand','product_title','product_price','product_desc','product_image','product_keywords'];
}
