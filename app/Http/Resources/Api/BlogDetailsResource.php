<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class BlogDetailsResource extends JsonResource
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
        $description = 'description_'.app()->getLocale();
        return [
            'id'            => $this->id,
//            'name'          => $this->$name,
//            'quote'         => $this->$quote,
            'page_image'    => $this->page_image_path,
            'description'   => $this->$description,
        ];

    }
}
