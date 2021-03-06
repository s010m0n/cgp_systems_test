<?php

namespace App\Services\Api;

use App\Contracts\Repositories\ClientRepositoryContract;
use App\Contracts\Services\Api\ClientApiServiceContract;

use App\Http\Resources\V1\Client\ClientCompaniesResource;
use App\Http\Resources\V1\Client\ClientResource;

class ClientApiApiService implements ClientApiServiceContract
{
    public function __construct(private ClientRepositoryContract $clientRepository)
    {
    }


    /**
     * @param bool|int $pagination
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getClientCollection(bool|int $pagination)
    {
        $clients = $this->clientRepository->getAll($pagination, false);

        return ClientResource::collection($clients);

    }

    /**
     * @param int $client
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getClientCompaniesCollection(int $client)
    {
        $companies = $this->clientRepository->getClientWithCompanies($client);

        return ClientCompaniesResource::collection($companies);
    }
}
