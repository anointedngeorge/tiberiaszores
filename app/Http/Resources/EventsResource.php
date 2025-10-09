<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class EventsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return  [
            'title' => $this->title,
            'content' => $this->content,
            'start' => $this->start,
            'end' => $this->end,
            'address' => $this->address,
            'date' => $this->date,
            'image'  => Storage::url($this->image),
            'time' => $this->time,
        ];
    }
}
