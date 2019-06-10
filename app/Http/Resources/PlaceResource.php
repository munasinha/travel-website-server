<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlaceResource extends JsonResource
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

            'id'  => $this->id,
            'name' => $this->name,
            'lat' => $this->lat,
            'lan' => $this->lan,
            'map_name' => $this->map_name,
            'discription' => $this->discription,
            'location' => $this->location,
            'image' => ImagesForPlaceCollectionResource::collection($this->images),

        ];
    }
}
