<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Request
 * @method static create($data)
 * @method static find($id)
 * @@property $status
 * @package App
 */
class Request extends Model
{
    /** @var string */
    protected $table = 'requests';

    /** @var array */
    protected $fillable = [
        'name',
        'phone'
    ];
}
