<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable =
        [
            'name',
            'image',
            'price',
            'start_date',
            'end_date',
            'status',
        ];

    public function basket()
    {
        return $this->hasMany(Product::class,'product_id','id');
    }
}
