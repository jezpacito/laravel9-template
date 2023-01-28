<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [
        'category_id',
        'uuid',
        'name',
        'brand',
        'description',
        'stocks_available',
        'remaining_stocks',
        'status',
        'wholesale_price',
        'regular_price',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function stocksHistories()
    {
        return $this->hasMany(StocksHistory::class);
    }
}
