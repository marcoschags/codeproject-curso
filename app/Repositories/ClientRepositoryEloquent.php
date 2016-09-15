<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 13/09/2016
 * Time: 22:41
 */

namespace CodeProject\Repositories;

use CodeProject\Entities\Client;
use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{
    public function model()
    {
        return Client::class;
    }
}