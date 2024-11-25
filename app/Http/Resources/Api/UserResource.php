<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        $name = 'name_' . app()->getLocale();
        return [
            'full_name'               => $this->full_name,
            'email'                   => $this->email,
            'mobile'                  => $this->mobile,
            'image'                   => $this->image_path,
            'passport_image'          => $this->passport_image_path,
            'nationality_name'        => isset($this->nationality)?$this->nationality->$name:null,
            'nationality_id'          => isset($this->nationality)?$this->nationality->id:null,
        ];

    }
}
//'mobile'               => ltrim($this->mobile,$this->country->phone_code),
