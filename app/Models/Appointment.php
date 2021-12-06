<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable=['specialist_id', 'doctor_id', 'request', 'date', 'time', 'patient_name', 'gender', 'birth', 'email', 'contact'];
    public function specialist()
    {
        return $this->belongsTo('App\Models\Specialist');
    }
    public function doctor()
    {
        return $this->belongsTo('App\Models\Doctor');
    }
}
