<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $fillable = ['Flight_ID', 'Aircraft_ID', 'Departure_Airport', 'Arrival_Airport', 'Departure_Time', 'Arrival_Time', 'Fright_Duration'];
}
