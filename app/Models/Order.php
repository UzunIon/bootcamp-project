<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_price',
        'customer_id',
        'tour_id',
    ];

    public function customer()
    {
        return $this->belongsTo('Customer');
    }

    public function tours()
    {
        return $this->hasMany('Tour');
    }
}
