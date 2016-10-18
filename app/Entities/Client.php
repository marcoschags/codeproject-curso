<?php

namespace CodeProject\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * CodeProject\Entities\Client
 *
 * @property integer $id
 * @property string $name
 * @property string $responsible
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $obs
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Client whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Client whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Client whereResponsible($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Client whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Client wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Client whereAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Client whereObs($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Client whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Client whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Client extends Model
{
 	protected $fillable = [
 	    'name',
        'responsible',
        'email',
        'phone',
        'address',
        'obs'
    ];
}
