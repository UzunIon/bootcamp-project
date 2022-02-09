<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LoggableInterface;

class Location extends Model implements LoggableInterface
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price'
    ];

    public $timestamps = false;

    public function tours()
    {
        return $this->hasMany(Tour::class);
    }

    public function convertToLoggableString(): string
    {
        return "Location with id: {@this->id}";
    }


    public function getData(): array
    {
        return 
        [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
        ];
    }
}