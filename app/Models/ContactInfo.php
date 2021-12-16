<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number',
        'email',
        'gender',
    ];

    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo('Customer');
    }
}