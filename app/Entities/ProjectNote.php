<?php

namespace CodeProject\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * CodeProject\Entities\ProjectNote
 *
 * @property integer $id
 * @property integer $project_id
 * @property string $title
 * @property string $note
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \CodeProject\Entities\Project $project
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\ProjectNote whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\ProjectNote whereProjectId($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\ProjectNote whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\ProjectNote whereNote($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\ProjectNote whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\ProjectNote whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProjectNote extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'project_id',
        'title',
        'note'
    ];

    public function project(){
        return $this->belongsTo(Project::class);
    }

}
