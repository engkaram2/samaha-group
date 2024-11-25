<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class IssueFilesResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'file'          => $this->file_path,
            'file_name'     => $this->file_name,

        ];

    }
}
