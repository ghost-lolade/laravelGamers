<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
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
            'transaction_id' => $this->transaction_id,
            'order' => $this->order,
            'status' => $this->status,
            'account_name' => $this->account_name,
            'bank_name' => $this->bank_name,
            'account_number' => $this->account_number,
            'transaction_date' => $this->transaction_date,
            'balance' => $this->balance
        ];
    }
}
