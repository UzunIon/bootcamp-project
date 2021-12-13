<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestHouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'room_type',
    ];

    public $timestamps = false;

    public function tour()
    {
        return $this->belongsTo('Tour');
    }
}
