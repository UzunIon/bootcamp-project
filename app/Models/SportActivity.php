<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'active_from',
        'active_to',
        'price',
    ];

    public function tour()
    {
        return $this->belongsTo('Tour');
    }
}