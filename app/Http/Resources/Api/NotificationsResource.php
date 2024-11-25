<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class NotificationsResource extends JsonResource
{
    public function toArray($request)
    {

        return [
            'is_link'       => $this->is_link,
            'title'         => $this->title,
            'text'          => $this->text,
            'domain_type'   => $this->type,
//            'meeting'    => [
//                'id' => isset($this->meeting_id)?$this->meeting_id:null,
//            ],
            'is_seen'       => $this->seen,
            'send_at'       => $this->created_at->diffForHumans(),
        ];
    }
}
