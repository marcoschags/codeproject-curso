<?php

namespace CodeProject\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * CodeProject\Entities\User
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_members', 'member_id', 'project_id');
    }
}
