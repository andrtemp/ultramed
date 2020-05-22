<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Patient
 * @method static create($data)
 * @method static find($id)
 * @property  $card
 * @package App
 */
class Patient extends Model
{
    /** @var string  */
    protected $table = 'patients';

    /**
     * @var array
     */
    protected $fillable = [
        'birth_date',
        'card',
        'user_id',
        'phone'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
