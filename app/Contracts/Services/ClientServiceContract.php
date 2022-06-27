<?php

namespace App\Contracts\Services;

interface ClientServiceContract
{
    public function getAllClient(bool|int $paginate = false, bool|int $limit = false);

    public function getClient(int $id);

    public function createOrUpdate(array $request, bool|int $client = false);

    public function deleteClient(int $id);
}
