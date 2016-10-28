<?php

namespace CodeProject\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CodeProject\Repositories\ProjectRepository;
use CodeProject\Entities\Project;
use CodeProject\Validators\ProjectValidator;

/**
 * Class ProjectRepositoryEloquent
 * @package namespace CodeProject\Repositories;
 */
class ProjectRepositoryEloquent extends BaseRepository implements ProjectRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Project::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    //Método para verificar se é Owner (dono) do projeto ou faz parte do projeto
    public function isOwner($projectId, $userId)
    {
        if(count ($this->findWhere(['id'=>$projectId, 'owner_id'=>$userId])))
        {
            return true;
        }
        return false;
    }
    public function hasMember($projectId, $memberId)
    {
        $project = $this->find($projectId);

        foreach ($project->members as $member)
        {
            if($member->id == $member)
            {
                return true;
            }
        }
        return false;
    }
}
