<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StocksHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'number_of_stocks_added',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
