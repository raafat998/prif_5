<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'end_date',
        'total_price',
        'payment_status',
        'client_id',
        'property_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
