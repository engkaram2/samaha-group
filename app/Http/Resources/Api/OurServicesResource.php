<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class OurServicesResource extends JsonResource
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
            'service_id'                   => $this->id,
            'service_icon'                 => $this->IconPath,
            'service_image'                => $this->Image1Path,
            'is_book_icon'                 => $this->is_book_icon,
            'service_name'                 => $this->$name,
            'service_quote'                => $this->$quote,
//            'send_at'             => $this->created_at->format('l Y-m-d h:s A'),
        ];
    }
}
