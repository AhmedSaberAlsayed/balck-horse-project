<?php

namespace App\Models;

use App\Models\product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class cart extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_id',
        'user_id',
        'quantity',
        'total_price',
    ];
    public function product()
    {
        return $this->belongsTo(product::class, 'product_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
