<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'destination_id'];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
}
