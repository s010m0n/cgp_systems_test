<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Services\CompanyServiceContract;
use App\Http\Controllers\Controller;
use App\Http\Requests\Company\StoreRequest;
use App\Http\Requests\Company\UpdateRequest;

class CompanyController extends Controller
{
    public function __construct(private CompanyServiceContract $companyService)
    {
    }

    public function index(){
        $companies = $this->companyService->getAllCompanies(12,false);

        return view('admin.company.index', [
            'companies' => $companies,
        ]);
    }

    public function show($id){
        $company = $this->companyService->getCompany($id);

        return view('admin.company.show', [
           'company' => $company,
        ]);
    }

    public function create(){
        return view('admin.company.create');
    }

    public function edit($id){
        $company = $this->companyService->getCompany($id);
        $clients = $this->companyService->getClientIds();
        return view('admin.company.edit',[
            'company' => $company,
            'clients_ids' => $clients
        ]);
    }

    public function store(StoreRequest $request){
        $this->companyService->createOrUpdate($request->validated(), false);

        return redirect(route('company.index'));
    }

    public function update(UpdateRequest $request, $id){
        $this->companyService->createOrUpdate($request->validated(), $id);

        return redirect(route('company.index'));
    }

    public function delete($id){
        $this->companyService->deleteCompany($id);

        return redirect(route('company.index'));
    }
}
