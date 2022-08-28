<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        "order_product_id",
        "total_price",
        "email"
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function OrderProducts(){
        return $this->belongsTo(OrderProducts::class);
    }
}
