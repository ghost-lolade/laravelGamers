<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'user_id',
        'friend_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
