<?php

namespace App\Contracts\Services;

interface CompanyServiceContract
{
    public function getAllCompanies(bool|int $paginate = false, bool|int $limit = false);

    public function getCompany(int $id);

    public function createOrUpdate(array $request, bool|int $company = false);

    public function deleteCompany(int $id);


}
