<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
   'property_name',
        'price',
        'property_size',
        'garage_size',
        'rooms',
        'bathrooms',
        'availability',
        'description',
        'renter_id',
        'location', // This is the city
        'image1',   // Image 1 path
        'image2',   // Image 2 path
        'image3',   // Image 3 path
        'image4',   // Image 4 path
        'image5',   // Image 5 path
        'image6',   // I
    ];
    public function renter(){
        return $this->belongsTo(Renter::class);
    }
    public function reviews(){
        return $this->hasMany(Review::class);
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
    public function clients()
{
    return $this->belongsToMany(Client::class, 'client_property');
}

}
