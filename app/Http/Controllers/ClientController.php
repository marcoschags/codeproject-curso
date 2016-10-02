<?php

namespace CodeProject\Http\Controllers;

use CodeProject\Repositories\ClientRepository;
use CodeProject\Services\ClientService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * @var ClientRepository
     */
    private $repository;
    /**
     * @var ClientService
     */
    private $service;
    /**
     * ClientController constructor.
     * @param ClientRepository $repository
     * @param ClientService $service
     */
    public function __construct(ClientRepository $repository, ClientService $service)
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

