<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ImagesForPlaceCollectionResource;

class PlaceCollectionResource extends JsonResource
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
            'images' => ImagesForPlaceCollectionResource::collection($this->images),
            'viewCount' => $this->viewCount
            
        ];
    }
}
