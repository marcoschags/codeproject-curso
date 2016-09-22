<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 21/09/2016
 * Time: 21:46
 */

namespace CodeProject\Services;


use CodeProject\Repositories\ClientRepository;

class ClientService
{
    protected  $repository;
    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }
    public function create(array $data)
    {
        return $this->repository->create($data);
    }
    public function update(array $data, $id)
    {
        return $this->repository->update($data, $id);
    }
}