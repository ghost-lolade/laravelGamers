<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class DiscussionGroup extends Model
{
    protected $fillable = [
        'discussion_id',
        'user_id',
        'status',
        'payment_status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
