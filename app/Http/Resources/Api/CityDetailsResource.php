<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class CityDetailsResource extends JsonResource
{

    public function toArray($request)
    {
        $name = 'name_'.app()->getLocale();

        return [
            'id'            => $this->id,
            'name'          => $this->$name,
            'offices'       => OfficeDetailsResource::collection($this->offices),

        ];

    }
}
