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


    /**
     * @param bool|int $paginate
     * @param bool|int $limit
     * @return mixed
     */
    public function getAllCompanies(bool|int $paginate = false, bool|int $limit = false)
    {
        return $this->companyRepository->getAll($paginate, $limit);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getCompany(int $id)
    {
        return $this->companyRepository->find($id);
    }

    /**
     * @param array $request
     * @param bool|int $company
     * @return void
     */
    public function createOrUpdate(array $request, bool|int $company = false)
    {
        $this->companyRepository->createOrUpdate($request, $company);
    }

    /**
     * @param int $id
     * @return void
     */
    public function deleteCompany(int $id)
    {
        $this->companyRepository->delete($id);
    }

}
