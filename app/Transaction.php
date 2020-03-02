<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id',
        'transaction_id',
        'order',
        'status',
        'account_name',
        'bank_name',
        'account_number',
        'transaction_date'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
