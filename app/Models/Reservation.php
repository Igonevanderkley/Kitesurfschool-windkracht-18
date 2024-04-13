<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'package_id',
        'location',
        'date',
        'time',
        'secondary_person_name',
        'secondary_person_street',
        'secondary_person_hometown',
        'is_paid',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
