<?php

namespace App\Actions\OpenApi\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'thumbnailUrl' => $this->thumbnailUrl,
            'largeImageUrl' => $this->largeImageUrl
        ];
    }
}
