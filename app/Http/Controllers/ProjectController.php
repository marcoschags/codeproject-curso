<?php

namespace CodeProject\Http\Controllers;

use CodeProject\Repositories\ClientRepository;
use CodeProject\Repositories\ProjectRepository;
use CodeProject\Services\ClientService;
use CodeProject\Services\ProjectService;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * @var ProjectRepository
     */
    private $repository;
    /**
     * @var ProjectService
     */
    private $service;
    /**
     * ProjectController constructor.
     * @param ProjectRepository $repository
     * @param ProjectService $service
     */
    public function __construct(ProjectRepository $repository, ProjectService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }
    public function index()
    {
    	 return $this->repository->all();
	}
    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        return $this->service->create($request->all());
    }
    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->repository->find($id);
    }
    /**
     * @param Request $request
     * @param $id
     * @return array|mixed
     */
    public function update(Request $request, $id)
    {
        return $this->service->update($request->all(), $id);
    }
    /**
     * @param $id
     * @return int
     */
    public function destroy($id)
    {
        return $this->repository->delete($id);
    }
}

