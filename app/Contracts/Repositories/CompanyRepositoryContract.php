<?php

namespace App\Contracts\Repositories;

interface CompanyRepositoryContract
{

    public function getAll(bool|int $paginate = false, bool|int $limit = false);

    public function find(int $id);

    public function createOrUpdate(array $request, bool|int $company = false);

    public function delete(int $id);

}
