<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LabResult extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'medical_record_id',
        'test_name',
        'result',
        'unit',
        'reference_range',
        'test_date',
        'remarks',
    ];

    public function medicalRecord()
    {
        return $this->belongsTo(MedicalRecord::class);
    }
}
