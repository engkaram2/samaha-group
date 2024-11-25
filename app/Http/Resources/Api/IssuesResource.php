<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class IssuesResource extends JsonResource
{
    public function toArray($request)
    {

        return [
            'id'                 => $this->id,
            'image'              => $this->image_path,
            'issue_name'         => $this->issue_name,
            'lawyer_name'        => $this->team->full_name,

        ];
    }
}
