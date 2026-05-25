<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Allergy extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'patient_id',
        'allergen',
        'severity',
        'reaction',
        'noted_date',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
