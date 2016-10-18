<?php

namespace CodeProject\Http\Controllers;

use CodeProject\Repositories\ProjectNoteRepository;
use CodeProject\Services\ProjectNoteService;
use Illuminate\Http\Request;

class ProjectNoteController extends Controller
{
    /**
     * @var ProjectNoteRepository
     */
    private $repository;
    /**
     * @var ProjectNoteService
     */
    private $service;
    /**
     * ProjectController constructor.
     * @param ProjectNoteRepository $repository
     * @param ProjectNoteService $service
     */
    public function __construct(ProjectNoteRepository $repository, ProjectNoteService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }
    public function index($id)
    {
    	 return $this->repository->findWhere(['project_id' => $id]);
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
    public function show($id, $noteId)
    {
        return $this->repository->findWhere(['project_id'=>$id, 'id' =>$noteId]);
    }
    /**
     * @param Request $request
     * @param $id
     * @return array|mixed
     */
    public function update(Request $request, $id, $noteId)
    {
        return $this->service->update($request->all(), $noteId);
    }
    /**
     * @param $id
     * @return int
     */
    public function destroy($id, $noteId)
    {
        return $this->repository->delete($noteId);
    }
}

