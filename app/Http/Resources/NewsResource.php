<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
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
            'slug' => $this->slug,
            'description' => $this->description,
            'image' => $this->image,
            'status' => $this->status,
            'assignNewsCategory'=>NewsCategoryResource::collection($this->assignNewsCategory),
            'comments'=>NewsCommentResource::collection($this->comments),
            'created_at' => date('M d, Y',\strtotime($this->created_at)),
        ];
    }
}
