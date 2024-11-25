<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class OfficeDetailResource extends JsonResource
{

    public function toArray($request)
    {
        $name = 'name_'.app()->getLocale();
        $description = 'description_'.app()->getLocale();

        return [
            'id'            => $this->id,
            'name'          => $this->$name,
        ];

    }
}
