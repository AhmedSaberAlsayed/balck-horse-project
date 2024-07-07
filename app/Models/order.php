<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class order extends Model
{
    use HasFactory;
    protected $fillable= [
        'total_amount',
        'payment_status',
        'payment_method',
        'order_date',
    ];
}
