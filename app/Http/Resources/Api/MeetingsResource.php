<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class MeetingsResource extends JsonResource
{
    public function toArray($request)
    {

        return [
            'id'                 => $this->id,
            'meeting_type'       => $this->appointment_type,
            'meeting_date'       => $this->date,
            'status'             => $this->status,
            'problem'            => $this->problem,
//            'image'              => $this->image_path,

        ];
    }
}
