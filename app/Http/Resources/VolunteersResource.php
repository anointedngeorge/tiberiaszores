<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class VolunteersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    // public static $wrap = true; 
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'name'       => $this->name,
            'phone'      => $this->phone,
            'email'      => $this->email,
            'occupation' => $this->occupation,
            'dob'        => $this->dob ? \Carbon\Carbon::parse($this->dob)->format('Y-m-d') : null,
            'tag'        => $this->tag,
            'address'    => $this->address,
            'content'    => $this->content,
            'image'      => Storage::url($this->image),
        ];
    }
}
