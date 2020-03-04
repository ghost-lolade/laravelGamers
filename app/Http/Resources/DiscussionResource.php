<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DiscussionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       return [ 'topic' => $this->topic,
        'details' => $this->details,
        'option_a' => $this->option_a,
        'option_b' => $this->option_b,
        'option_c' => $this->option_c,
        'option_d' => $this->option_d,
        'status' => $this->status,
        'answer' => $this->answer,
        'amount' => $this->amount,
        'refree_id' => $this->refree_id,
        'href' => [
            'comments' =>route('comments.index', $this->id)
        ],
        'user_id' => $this->user_id
        ];
    }
}
