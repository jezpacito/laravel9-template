<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'item_code',
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
