<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class product extends Model
{
    use HasFactory;
    protected $fillable=[
        'Product_name',
        'imgpath',
        'description',
        'price',
        'quantity',
        'category_id',
    ];

    public function Category(){
        return $this->belongsTo(category::class);
    }

    // public function Cart()
    // {
    //     return $this->hasMany(Cart::class,'product_id');
    // }



    public function getImgpathAttribute($value){
        return 'images/products/' .$value;
    }
}
