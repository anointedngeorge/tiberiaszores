<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class BlogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'image' => Storage::url($this->image),
            'title' => $this->title,
            'content' => $this->content,
            'author' => $this->author,
            'date' => $this->created_at ? \Carbon\Carbon::parse($this->created_at)->format('d-m') : null,
        ];

    }
}
