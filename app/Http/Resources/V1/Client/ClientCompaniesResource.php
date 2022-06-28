<?php

namespace App\Http\Resources\V1\Client;

use App\Http\Resources\V1\Company\CompanyResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientCompaniesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'companies' => $this->whenLoaded('company', CompanyResource::collection($this->company)),
        ];
    }
}
