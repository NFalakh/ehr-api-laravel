<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VitalSign extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'medical_record_id',
        'blood_pressure',
        'heart_rate',
        'temperature',
        'respiratory_rate',
        'oxygen_saturation',
        'weight',
        'height',
        'recorded_at',
    ];

    public function medicalRecord()
    {
        return $this->belongsTo(MedicalRecord::class);
    }
}
