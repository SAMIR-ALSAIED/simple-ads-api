<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return 
        [

        'Site Name'=> $this->site_name,
        'About Us'=> $this->about_us,
        'Address'=> $this->address,
        'Phone'=> $this->phone,
            

        ];
    }
}
