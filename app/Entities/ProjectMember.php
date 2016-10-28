<?php

namespace CodeProject\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * CodeProject\Entities\Project
 *
 * @property integer $id
 * @property integer $owner_id
 * @property integer $client_id
 * @property string $name
 * @property string $description
 * @property integer $progress
 * @property integer $status
 * @property string $due_date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\CodeProject\Entities\ProjectNote[] $notes
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Project whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Project whereOwnerId($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Project whereClientId($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Project whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Project whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Project whereProgress($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Project whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Project whereDueDate($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Project whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProjectMember extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'project_id',
        'member_id',
    ];

}
