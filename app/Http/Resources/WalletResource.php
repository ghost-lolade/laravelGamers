<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WalletResource extends JsonResource
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
            'user_id' => $this->user_id,
            'card_no' => $this->card_no,
            'card_exp_date' => $this->card_exp_date,
            'cvv' => $this->cvv,
            'amount' => $this->amount,
            'total_amount' => $this->total_amount
        ];
    }
}
