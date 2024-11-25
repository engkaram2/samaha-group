<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class OfficeDetailsResource extends JsonResource
{

    public function toArray($request)
    {
        $name = 'name_'.app()->getLocale();
        $description = 'description_'.app()->getLocale();
        $address = 'address_'.app()->getLocale();


        return [
            'id'            => $this->id,
            'name'          => $this->$name,
            'description'   => $this->$description,
            'email'         => $this->email,
            'mobile'        => $this->mobile,
            'address'       => $this->$address,
            'latitude'      => $this->latitude,
            'longitude'     => $this->longitude,
        ];

    }
}
