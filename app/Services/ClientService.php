<?php

namespace App\Services;

use App\Contracts\Repositories\ClientRepositoryContract;
use App\Contracts\Services\ClientServiceContract;

class ClientService implements ClientServiceContract
{

    public function __construct(private ClientRepositoryContract $clientRepository)
    {
    }

    public function getAllClient(bool|int $paginate = false, bool|int $limit = false)
    {
        return $this->clientRepository->getAll($paginate,$limit);
    }

    public function getClient(int $id)
    {
        return $this->clientRepository->find($id);
    }

    public function createOrUpdate(array $request, bool|int $client = false)
    {
        $this->clientRepository->createOrUpdate($request, $client);
    }

    public function deleteClient(int $id)
    {
        $this->clientRepository->delete($id);
    }
}
