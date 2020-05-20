<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Doctor
 * @method static create($data)
 * @method static find($id)
 * @package App
 */
class Doctor extends Model
{
    /** @var string */
    protected $table = 'doctors';

    /** @var array */
    protected $fillable = [
        'user_id',
        'position',
        'phone',
        'specialization',
        'text',
        'photo'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
