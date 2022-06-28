<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Services\ClientServiceContract;
use App\Http\Controllers\Controller;
use App\Http\Requests\Client\StoreRequest;
use App\Http\Requests\Client\UpdateRequest;

class ClientController extends Controller
{
    public function __construct(private ClientServiceContract $clientService)
    {
    }

    public function index(){
        $clients =  $this->clientService->getAllClient(20,false);

        return view('admin.client.index', [
           'clients' => $clients,
        ]);
    }

    public function show($id){
        $client = $this->clientService->getClient($id);

        return view('admin.client.show', [
            'client' => $client,
        ]);
    }

    public function create(){
        return view('admin.client.create');
    }

    public function store(StoreRequest $request){
        $this->clientService->createOrUpdate($request->validated(), false);

        return redirect(route('client.index'));
    }

    public function edit($id){
        $client = $this->clientService->getClient($id);

        return view('admin.client.edit',[
            'client' => $client,
        ]);
    }

    public function update(UpdateRequest $request, $id){
        $this->clientService->createOrUpdate($request->validated(), $id);

        return redirect(route('client.index'));
    }

    public function delete($id){
        $this->clientService->deleteClient($id);

        return redirect(route('client.index'));
    }
}
