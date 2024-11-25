<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class IssueDetailsResource extends JsonResource
{

    public function toArray($request)
    {
        $name = 'name_'.app()->getLocale();
        return [
            'id'            => $this->id,
            'image'         => $this->image_path,
            'issue_name'    => $this->issue_name,
            'issue_number'  => $this->issue_number,
            'status'        => $this->status,
            'lawyer_name'   => $this->team->full_name,
            'issue_files'   => IssueFilesResource::collection($this->issueFiles),

        ];

    }
}
