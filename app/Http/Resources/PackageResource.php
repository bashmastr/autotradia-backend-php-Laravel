<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PackageResource extends JsonResource
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
            'durations' => $this->durations,
            'price' => $this->price,
            'max_ads' => $this->max_ads,
            'picture' => $this->picture,
            'sale_price' => $this->sale_price,
            'description' => $this->description,
        ];
    }
}
