<?php

namespace App\Contracts\Repositories;

use phpseclib3\System\SSH\Agent\Identity;

interface ClientRepositoryContract
{

    public function getAll(bool|int $paginate = false, bool|int $limit = false);

    public function find(int $id);

    public function createOrUpdate(array $request, bool|int $client = false);

    public function delete(int $id);

    public function getClientWithCompanies(int $id);

}
