<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
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
            'location' => $this->location,
            'event_date' =>date('M d, Y',\strtotime($this->event_date)),
            'event_time' =>date('h:i:s a',\strtotime($this->event_time)),
            'status' => $this->status,
            'eventCategory'=>new EventCategoryResource($this->eventCategory),
            'comments'=>EventCommentResource::collection($this->comments),
            'created_at' => date('M d, Y',\strtotime($this->created_at)),
        ];
    }
}
