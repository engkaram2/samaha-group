<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class OurBlogsResource extends JsonResource
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
            'blog_id'                   => $this->id,
            'blog_image'                => $this->ImagePath,
            'blog_name'                 => $this->$name,
            'blog_quote'                => $this->$quote,
        ];
    }
}
