<?php

namespace App\Actions\OpenApi\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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
            'image' => new ImageResource($this->imageDto),
            'title' => $this->title,
            'authors' => AuthorResource::collection($this->authors),
            'publishDate' => $this->publishDate,
            'physicalFormat' => $this->physicalFormat
        ];
    }
}
