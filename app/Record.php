<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Record
 * @method static  create($data)
 * @package App
 */
class Record extends Model
{
    /** @var string */
    protected $table = 'records';

    /** @var array */
    protected $fillable = [
        'doctor_id',
        'patient_id',
        'date'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function doctor()
    {
        return $this->hasOne(Doctor::class, 'id', 'doctor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function patient()
    {
        return $this->hasOne(Patient::class, 'id', 'patient_id');
    }
}
