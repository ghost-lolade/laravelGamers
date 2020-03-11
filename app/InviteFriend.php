<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class InviteFriend extends Model
{
    protected $fillable = [
        'user_id',
        'invited_email'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
