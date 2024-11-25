<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class OurTeamsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $full_name = 'full_name_'.app()->getLocale();
        $description = 'description_'.app()->getLocale();

        return [
            'team_id'                    => $this->id,
            'team_image'                 => $this->ImagePath,
            'team_name'                  => $this->$full_name,
            'team_job'                   => $this->job,
            'team_fb_link'               => $this->fb_link,
            'team_twitter_link'          => $this->twitter_link,
            'team_instagram_link'        => $this->instagram_link,
            'description'                => $this->$description,
        ];
    }

}
