<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\PlaceCollectionResource;

class PackageResource extends JsonResource
{

    public function toArray($request)
    {
        return [

            'id' => $this->id,
            'name' => $this->name,
            'days' => $this->days,
            'image_path' => $this->image_path,
            'discription' => $this->discription,
            'more_info' => $this->more_info,
            'places' => PlaceCollectionResource::collection($this->places)
            
        ];
    }
}
