<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserDetialResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return  [
            'id' => $this->id,
            'name' => $this->name,
            'avatar' => $this->avatar,
            'user_id ' => $this->user_id ,
            'dealing_name' => $this->dealing_name,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'gender' => $this->gender,
            'dob' => $this->dob,
            'country' => $this->country,
            'phone' => $this->phone,
            'zip' => $this->zip,
            'created_at' => date('M d, Y',\strtotime($this->created_at)),
        ];
    }
}
