<?php

namespace App\Repositories;

use App\Contracts\Repositories\ClientRepositoryContract;
use App\Models\Client;

class ClientRepository implements ClientRepositoryContract
{

    public function getAll(bool|int $paginate = false, bool|int $limit = false)
    {
        $clients = Client::query();

        if ($limit){
            $clients->limit($limit);
        }

        if ($paginate){
            $clients = $clients->paginate($paginate);
        } else {
            $clients = $clients->get();
        }

        return $clients;
    }

    public function find(int $id)
    {
        return Client::find($id);
    }

    public function createOrUpdate(array $request, bool|int $client = false)
    {
        $client = $this->find($client);

        if ($client !== null){
            $client->update([
               'first_name' => $request['first_name'],
               'last_name' => $request['last_name'],
               'email' => $request['email']
            ]);
        } else {
            $client = Client::create([
                'first_name' => $request['first_name'],
                'last_name' => $request['last_name'],
                'email' => $request['email']
            ]);
        }
    }

    public function delete(int $id)
    {
        $client = $this->find($id);
        $client->delete();
    }
}
