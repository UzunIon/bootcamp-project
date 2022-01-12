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

    public function guestHouse()
    {
        return $this->belongsTo(GuestHouse::class);
    }
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    public function sportActivity()
    {
        return $this->belongsTo(SportActivity::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function activities()
    {
        return $this->belongsToMany(Activity::class);
    }
}