<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SensorData extends Model
{
    protected $table = 'sensor_data';
    protected $fillable = ['ph', 'suhu', 'tds', 'status_pump_ph', 'status_pump_ppm','updated_at'];
}

