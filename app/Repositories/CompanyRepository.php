<?php

namespace App\Repositories;

use App\Contracts\Repositories\CompanyRepositoryContract;
use App\Models\Company;

class CompanyRepository implements CompanyRepositoryContract
{

    public function getAll(bool|int $paginate = false, bool|int $limit = false)
    {
        $company = Company::query();

        if($limit){
            $company->limit($limit);
        }

        if($paginate){
            $company = $company->paginate($paginate);
        } else {
            $company = $company->get();
        }

        return $company;
    }

    public function find(int $id)
    {
        return Company::find($id);
    }

    public function createOrUpdate(array $request, bool|int $company = false)
    {
        $company = $this->find($company);

        if ($company !== null){
            $company->update([
                'name' => $request['name'],
                'desc' => $request['desc'],
            ]);
        } else {
            $company = Company::create([
                'name' => $request['name'],
                'desc' => $request['desc'],
            ]);
        }
    }

    public function delete(int $id)
    {
        $company = $this->find($id);
        $company->delete();
    }
}
