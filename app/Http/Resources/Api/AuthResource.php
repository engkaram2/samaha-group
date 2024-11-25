<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class AuthResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
//        $name = 'name_' . app()->getLocale();
        return [
            'id'                  => $this->id,
            'image'               => $this->image_path,
            'passport_image'      => $this->passport_image_path,
            'name'                => $this->full_name ,
            'email'               => $this->email,
            'mobile'              => $this->mobile,
            'token'               => $this->token->jwt,

        ];
    }
}
