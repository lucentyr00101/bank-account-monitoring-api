<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\UserResource;

class FundsResource extends JsonResource
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
            'id' => $this->id,
            'user' => new UserResource($this->user),
            'amount' => $this->amount,
            'remarks' => $this->remarks ? $this->remarks : '-',
            'created_at' => $this->created_at->format('F d, Y h:i:s A'),
        ];
    }
}
