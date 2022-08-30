<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'file_path',
        'description',
        'price',
        'videocard_id',
        'cpu_id',
        'desc_ram',
        'desc_memory',
        'discount',
        'redChoose',
        'publishing_date',
        'product_id'
    ];

    protected $casts =[
        'publishing_date' => 'datetime',
    ];

    public function genres(){
        return $this->belongsToMany(Genre::class, 'genre_products');
    }

    public function oses(){
        return $this->belongsToMany(os::class, 'os_products');
    }

    public function cpu(){
        return $this->belongsTo(cpu::class);
    }

    public function videocard(){
        return $this->belongsTo(videocard::class);
    }

    public function materials(){
        return $this->hasMany(product_material::class);
    }

    public function keys(){
        return $this->hasMany(key::class);
    }

    public function keysAwaitingPayments(){
        return $this->hasMany(keysAwaitingpayments::class);
    }

    public function discounts(){
        return $this->hasMany(discount::class);
    }
}
