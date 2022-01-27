<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Models\Company;

class JobResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'title' => $this->title,
            'days' => $this->days,
            'isremote' => $this->isremote,
            'description' => $this->description,
            'url'=> $this->url,
            'company' => $this->company,
            'category' => $this->category,
            'region' => $this->region,
            'timezone' => $this->timezone,
            'type' => $this->type,
            'posted' => $this->created_at,
        ];
    }
}
