<?php

namespace App\Repositories;

use App\Contracts\Repositories\CompanyRepositoryContract;
use App\Models\Company;

class CompanyRepository implements CompanyRepositoryContract
{

    /**
     * @param bool|int $paginate
     * @param bool|int $limit
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
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

    /**
     * @param int $id
     * @return mixed
     */
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

    /**
     * @param int $id
     * @return void
     */
    public function delete(int $id)
    {
        $company = $this->find($id);
        $company->delete();
    }
}
