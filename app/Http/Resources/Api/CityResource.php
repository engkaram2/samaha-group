<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class CityResource extends JsonResource
{

    public function toArray($request)
    {
        $name = 'name_'.app()->getLocale();

        return [
            'id'            => $this->id,
            'name'          => $this->$name,
            'city_office_detail'       => OfficeDetailResource::collection($this->offices),

        ];

    }
}
