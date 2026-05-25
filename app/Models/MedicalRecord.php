<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedicalRecord extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'diagnosis',
        'treatment',
        'prescription',
        'visit_date',
        'notes',
        'chief_complaint',
        'treatment_plan',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

    public function labResults()
    {
        return $this->hasMany(LabResult::class);
    }

    public function medications()
    {
        return $this->hasMany(Medication::class);
    }

    public function vitalSigns()
    {
        return $this->hasMany(VitalSign::class);
    }
}
