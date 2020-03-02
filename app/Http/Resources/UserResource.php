<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\BankDetailResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'           => $this->id,
            'first_name'         => $this->first_name,
            'middle_name'  => $this->middle_name,
            'last_name'    => $this->last_name,
            'full_name'    => $this->fullName,
            'birthday'     => $this->birthday,
            'email'        => $this->email,
            'bank_details' => new BankDetailResource($this->bankDetails),
            'created_at'   => $this->created_at,
            'updated_at'   => $this->updated_at
        ];
    }
}
