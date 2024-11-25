<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class TranslationsResource extends JsonResource
{
    public function toArray($request)
    {
        $name = 'name_' . app()->getLocale();

        return [
            'id'                 => $this->id,
            'file'               => $this->file_path,
            'file_name'          => $this->$name,
            'file_translation'   => $this->file_translation_path,
            'is_translated'      => $this->status,
            'lawyer_name'        => $this->team->full_name,

        ];
    }
}
