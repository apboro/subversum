<?php

namespace App\Http\Resources;

use App\Models\Building;
use Illuminate\Http\Resources\Json\JsonResource;

class BuildingMapResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'building' => Building::find($this->building_id),
            'params' => [ 'volume' => $this->volume, 'storage'=>$this->storage, 'speed'=>$this->speed],
        ];

    }
}
