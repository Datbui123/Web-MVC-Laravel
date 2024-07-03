<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Airplane extends Model
{
    protected  $table='airplanes';
    // protected $primaryKey = 'RegistrationNumber';
    // use SoftDeletes;
    use HasFactory;
}
