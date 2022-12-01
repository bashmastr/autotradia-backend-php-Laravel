<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsCommentResource extends JsonResource
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
            "user_name"=>$this->user->name,
            "user_email"=>$this->user->email,
            "user_detail"=>$this->user->userDetail,
            "comment"=>$this->comment,
            "status"=>$this->status,
            'created_at' => $this->updated_at->diffForHumans(),
        ];
    }
}
