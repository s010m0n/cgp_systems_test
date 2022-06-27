<?php

namespace App\Services;

use App\Contracts\Repositories\CompanyRepositoryContract;
use App\Contracts\Services\CompanyServiceContract;
use App\Models\Client;

class CompanyService implements CompanyServiceContract
{
    public function __construct(private CompanyRepositoryContract $companyRepository)
    {
    }


    public function getAllCompanies(bool|int $paginate = false, bool|int $limit = false)
    {
        return $this->companyRepository->getAll($paginate, $limit);
    }

    public function getCompany(int $id)
    {
        return $this->companyRepository->find($id);
    }

    public function createOrUpdate(array $request, bool|int $company = false)
    {
        $this->companyRepository->createOrUpdate($request, $company);
    }

    public function deleteCompany(int $id)
    {
        $this->companyRepository->delete($id);
    }

}
