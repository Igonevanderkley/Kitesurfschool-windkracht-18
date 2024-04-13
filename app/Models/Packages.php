<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;


    public function Reservations()
    {
        return $this->hasMany(Reservation::class);
    }

}
