<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PurchaseResource extends JsonResource
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
            "user"=>new UserResource($this->user),
            "package"=>new PackageResource($this->package),
            "ad_used"=>$this->ad_used,
            "status"=>$this->status,
            'created_at' => date('M d, Y',\strtotime($this->created_at)),
            'expiry_date' => date('M d, Y',\strtotime($this->expiry_date)),
        ];
    }
}
