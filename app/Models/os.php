<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class os extends Model
{
    use HasFactory;

    protected $fillable = [
        'pname',
    ];

    public function product(){
        return $this->belongsToMany(Product::class, 'os_products');
    }
}
