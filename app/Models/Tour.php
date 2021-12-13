<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'details',
        'guest_house_id',
        'location_id',
        'sport_activity_id',
    ];

    public function guesthouses()
    {
        return $this->hasMany('GuestHouse');
    }
    public function locations()
    {
        return $this->hasMany('Location');
    }
    public function sportactivities()
    {
        return $this->hasMany('SportActivity');
    }
    public function activities()
    {
        return $this->belongsToMany('Activity');
    }
}
