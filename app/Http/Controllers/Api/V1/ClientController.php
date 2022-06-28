<?php

namespace App\Http\Controllers\Api\V1;

use App\Contracts\Services\Api\ClientApiServiceContract;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Client\GetClientCompaniesRequest;
use App\Http\Requests\Api\V1\Client\GetClientsRequest;

class ClientController extends Controller
{
    public function __construct(private ClientApiServiceContract $clientApiService)
    {
    }

    public function get_client_companies(GetClientCompaniesRequest $request){
        return $this->clientApiService->getClientCompaniesCollection($request->validated()['id']);
    }

    public function get_clients(GetClientsRequest $request){
        return $this->clientApiService->getClientCollection(isset($request->validated()['pagination']) ? $request->validated()['pagination'] : false);
    }
}
