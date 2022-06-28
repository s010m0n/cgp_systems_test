<?php

namespace App\Services\Api;

use App\Contracts\Repositories\CompanyRepositoryContract;
use App\Contracts\Services\Api\CompanyApiServiceContract;
use App\Http\Resources\V1\Company\CompanyCollection;
use App\Http\Resources\V1\Company\CompanyResource;

class CompanyApiApiService implements CompanyApiServiceContract
{
    public function __construct(private CompanyRepositoryContract $companyRepository)
    {
    }


    /**
     * @param int|bool $pagination
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getCompanyCollection(int|bool $pagination)
    {
        $companies = $this->companyRepository->getAll($pagination,false);

        return CompanyResource::collection($companies);
    }
}
