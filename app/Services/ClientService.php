<?php

namespace App\Services;

use App\Contracts\Repositories\ClientRepositoryContract;
use App\Contracts\Services\ClientServiceContract;

class ClientService implements ClientServiceContract
{

    public function __construct(private ClientRepositoryContract $clientRepository)
    {
    }

    /**
     * @param bool|int $paginate
     * @param bool|int $limit
     * @return mixed
     */
    public function getAllClient(bool|int $paginate = false, bool|int $limit = false)
    {
        return $this->clientRepository->getAll($paginate,$limit);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getClient(int $id)
    {
        return $this->clientRepository->find($id);
    }

    /**
     * @param array $request
     * @param bool|int $client
     * @return void
     */
    public function createOrUpdate(array $request, bool|int $client = false)
    {
        $this->clientRepository->createOrUpdate($request, $client);
    }

    /**
     * @param int $id
     * @return void
     */
    public function deleteClient(int $id)
    {
        $this->clientRepository->delete($id);
    }
}
