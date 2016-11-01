<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 29/10/2016
 * Time: 07:11
 */

namespace CodeProject\Transformers;
use CodeProject\Entities\Project;
use CodeProject\Entities\User;
use League\Fractal\TransformerAbstract;


class ProjectMemberTransformer extends TransformerAbstract
{
    public  function transform(User $member)
    {
        return [
            'member_id' => $member->id,
            'name' => $member->name,
        ];
    }
}