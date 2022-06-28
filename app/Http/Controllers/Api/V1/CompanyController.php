<?php

namespace App\Http\Controllers\Api\V1;

use App\Contracts\Services\Api\CompanyApiServiceContract;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Company\GetCompaniesRequest;

class CompanyController extends Controller
{
    public function __construct(private CompanyApiServiceContract $companyApiService)
    {
    }

    public function get_companies(GetCompaniesRequest $request){

        return $this->companyApiService->getCompanyCollection(isset($request->validated()['pagination']) ? $request->validated()['pagination'] : false);
    }
}
