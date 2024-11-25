<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class SliderResource extends JsonResource
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
        $quote = 'quote_'.app()->getLocale();

        return [
            'slider_id'                    => $this->id,
            'slider_image'                 => $this->ImagePath,
            'slider_name'                  => $this->$name,
            'slider_quote'                 => $this->$quote,
        ];
    }

}
