<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\User\Link as LinkResource;

class Sponsor extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'photo_url' => $this->photo_url,
            'referral_link' => new LinkResource($this->whenLoaded('referralLink')),
        ];
    }
}
