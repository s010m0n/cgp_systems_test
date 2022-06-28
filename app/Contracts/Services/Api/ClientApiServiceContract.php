<?php

namespace App\Contracts\Services\Api;

interface ClientApiServiceContract
{

    public function getClientCollection(int|bool $pagination);

    public function getClientCompaniesCollection(int $client);
}
