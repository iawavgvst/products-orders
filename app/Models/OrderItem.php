<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderItem extends Pivot
{
    use HasFactory;

    protected $table = 'order_items';
    protected $guarded = false;

    protected $fillable = ['name'];

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
}
