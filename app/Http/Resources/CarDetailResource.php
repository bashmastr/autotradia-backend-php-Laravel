<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarDetailResource extends JsonResource
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
            'car_model' => $this->car_model,
            'company' => $this->company,
            'car_color' => $this->car_color,
            'year' => $this->year,
            'milage' => $this->milage,
            'condition' => $this->condition,
            'fuel_type' => $this->fuel_type,
            'transmission' => $this->transmission,
            'engine' => $this->engine,
            'owner' => $this->owner,
            'registeration_no' => $this->registeration_no,
            'registeration_city' => $this->registeration_city,

        ];
    }
}
