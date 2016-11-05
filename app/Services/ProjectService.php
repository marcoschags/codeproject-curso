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
use Illuminate\Support\Facades\File;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Prettus\Validator\Exceptions\ValidatorException;
//use Illuminate\Contracts\Filesystem\Factory as Storage;
use Illuminate\Contracts\Filesystem\Factory;


class ProjectService
{
    protected  $repository;
    /*
     * @var ClientRepository
     */
    protected  $validator;
    /**
     * @var Filesystem
     */
    private $filesystem;
    /**
     * @var \CodeProject\Services\Storage
     */
    private $storage;

    /*
    * @var ClientValidator
    */
    public function __construct(ProjectRepository $repository, ProjectValidator $validator, Filesystem $filesystem, Storage $storage)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->filesystem = $filesystem;
        $this->storage = $storage;
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
    public function createFile(array $data)
    {
        $project = $this->repository->skipPresenter()->find($data['project_id']);
        $projectFile= $project->files()->create($data);
        $this->storage->put($projectFile->id .'.'.$data['extension'], $this->filesystem->get($data['file']));
    }
}