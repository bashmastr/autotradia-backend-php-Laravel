<?php

namespace App\Http\Resources;

use App\Models\Ad;
use Illuminate\Http\Resources\Json\JsonResource;

class AdResource extends JsonResource
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
            'user_id' => $this->user_id,
            'email' => $this->user->email,
            'name' => $this->name,
            'slug' => $this->slug,
            'price' => $this->price,
            'price_label' => $this->price_label,
            'phone' => $this->phone,
            'is_certified' => $this->is_certified,
            'available_city' => $this->available_city,
            'description' => $this->description,
            'featured_image' => $this->featured_image,
            'status' => $this->status,
            'updated_at' => $this->updated_at ? $this->updated_at->diffForHumans() : $this->updated_at,
            "carDetails"=>new CarDetailResource($this->carDetails),
            "addcarFeatures"=>CarFeatureResource::collection($this->addcarFeatures),
            "category"=>new CategoryResource($this->category),
            "galleries"=>AdGalleryResource::collection($this->galleries),

        ];
    }
}
