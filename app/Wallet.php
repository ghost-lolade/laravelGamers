<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $fillable = [
        'user_id',
        'card_no',
        'card_exp_date',
        'cvv',
        'amount',
        'total_amount'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
