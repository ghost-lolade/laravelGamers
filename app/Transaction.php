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
        'transaction_date',
        'balance'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    //public function wallet(){
    //    return $this->belongsTo(Wallet::class);
    //}
}
