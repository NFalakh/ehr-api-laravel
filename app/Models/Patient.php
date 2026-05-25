<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'identity_number',
        'name',
        'date_of_birth',
        'gender',
        'phone',
        'email',
        'address',
        'blood_type'
    ];

    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function allergies()
    {
        return $this->hasMany(Allergy::class);
    }
}
