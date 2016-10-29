<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 29/10/2016
 * Time: 07:11
 */

namespace CodeProject\Transformers;
use CodeProject\Entities\Project;
use League\Fractal\TransformerAbstract;


class ProjectTransformer extends TransformerAbstract
{
    public  function transform(Project $project)
    {
        return [
            'project' => $project->id,
            'client_id' => $project->client_id,
            'owner_id' => $project->owner_id,
            'name' => $project->name,
            'description' => $project->description,
            'progress' => $project->progress,
            'status' => $project->status,
            'due_date' => $project->due_date,
        ];
    }
}