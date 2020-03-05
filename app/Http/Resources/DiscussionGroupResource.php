<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DiscussionGroupResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
        'discussion_id' => $this->discussion_id,
        'user_id' =>$this->user_id,
        'status' => $this->status,
        'payment_status' => $this->payment_status
        ];
    }
}
