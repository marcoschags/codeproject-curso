<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 21/09/2016
 * Time: 21:46
 */

namespace CodeProject\Services;

use CodeProject\Entities\Project;
use CodeProject\Repositories\ClientRepository;
use CodeProject\Repositories\ProjectRepository;
use CodeProject\Vallidators\ClientValidator;
use CodeProject\Vallidators\ProjectValidator;
use Prettus\Validator\Exceptions\ValidatorException;


class ProjectService
{
    protected  $repository;
    /*
     * @var ClientRepository
     */
    protected  $validator;
    /*
    * @var ClientValidator
    */
    public function __construct(ProjectRepository $repository, ProjectValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }
    /**
     * @param array $data
     * @return array|mixed
     */
    public function create(array $data)
    {
        try {
            $this->validator->with($data)->passesOrFail();
            return $this->repository->create($data);
        }catch (ValidatorException $e){
            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }
    }

    public function update(array $data, $id)
    {
        try {
            $this->validator->with($data)->passesOrFail();
            return $this->repository->update($data, $id);
        }catch (ValidatorException $e){
            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }
    }
}