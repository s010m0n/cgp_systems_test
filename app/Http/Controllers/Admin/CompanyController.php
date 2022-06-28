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

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        $companies = $this->companyService->getAllCompanies(20,false);

        return view('admin.company.index', [
            'companies' => $companies,
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id){
        $company = $this->companyService->getCompany($id);

        return view('admin.company.show', [
           'company' => $company,
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(){
        return view('admin.company.create');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id){
        $company = $this->companyService->getCompany($id);

        return view('admin.company.edit',[
            'company' => $company,
        ]);
    }

    /**
     * @param StoreRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreRequest $request){
        $this->companyService->createOrUpdate($request->validated(), false);

        return redirect(route('company.index'));
    }

    /**
     * @param UpdateRequest $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(UpdateRequest $request, $id){
        $this->companyService->createOrUpdate($request->validated(), $id);

        return redirect(route('company.index'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete($id){
        $this->companyService->deleteCompany($id);

        return redirect(route('company.index'));
    }
}
