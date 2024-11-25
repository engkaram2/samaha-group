<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceDetailsResource extends JsonResource
{

    public function toArray($request)
    {
        $name = 'name_'.app()->getLocale();
//        $quote = 'quote_'.app()->getLocale();
        $description1 = 'description1_'.app()->getLocale();
        $description2 = 'description2_'.app()->getLocale();
        $title1 = 'title1_'.app()->getLocale();
        $title2 = 'title2_'.app()->getLocale();
        return [
            'id'            => $this->id,
            'name'          => $this->$name,
//            'quote'         => $this->$quote,
//            'icon'          => $this->icon_path,
            'title1'        => $this->$title1,
            'description1'  => $this->$description1,
            'image1'        => $this->image1_path,

            'title2'        => $this->$title2,
            'description2'  => $this->$description2,
            'image2'        => $this->image2_path,

        ];

    }
}
