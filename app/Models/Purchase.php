<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'total_product',
        'pricing_type',
        'price_per_pcs',
        'total_amount',
    ];

    const WHOLESALE_PRICE = 'Wholesale Price';

    const REGULAR_PRICE = 'Regular Price';

    public static $prices = [
        'wholesale_price' => self::WHOLESALE_PRICE,
        'regular_price' => self::REGULAR_PRICE,
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
