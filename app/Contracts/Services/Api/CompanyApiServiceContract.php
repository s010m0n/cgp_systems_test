<?php

namespace App\Contracts\Services\Api;

interface CompanyApiServiceContract
{
    public function getCompanyCollection(int|bool $pagination);
}
