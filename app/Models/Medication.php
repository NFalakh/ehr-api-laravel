<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medication extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'medical_record_id',
        'name',
        'dosage',
        'frequency',
        'duration',
        'notes',
    ];

    public function medicalRecord()
    {
        return $this->belongsTo(MedicalRecord::class);
    }
}
