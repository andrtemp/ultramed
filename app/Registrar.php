<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Registrar
 * @method static create($data)
 * @package App
 */
class Registrar extends Model
{
    /** @var string  */
    protected $table = 'registrars';

    /**
     * @var array
     */
    protected $fillable = [
        'phone',
        'user_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
