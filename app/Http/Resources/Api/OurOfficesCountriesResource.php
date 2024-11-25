<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class OurOfficesCountriesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $name = 'name_'.app()->getLocale();
        return [
            'office_country_id'                   => $this->id,
            'office_country_image'                => $this->ImagePath,
            'office_country_name'                 => $this->$name,
        ];
    }
}
