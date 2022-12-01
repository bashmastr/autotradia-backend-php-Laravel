<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

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
        return  [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'role_id' => $this->role_id,
            'is_dealer' => $this->is_dealer,
            'email_verified_at' => $this->email_verified_at,
            'userDetail'=>new UserDetialResource($this->userDetail),
            'whishlist'=>$this->wishlists,
            'created_at' => date('M d, Y',\strtotime($this->created_at)),

        ];
    }
}
