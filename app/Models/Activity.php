<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'activity_type',
        'description',
        'price',
        'duration',
    ];

    public function restaurant()
    {
        return $this->belongsTo('Restaurant');
    }
    public function tours()
    {
        return $this->belongsToMany('Tour');
    }
}