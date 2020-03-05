<?php

namespace App;

use App\User;
use App\Discussion;

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

    public function discussion(){
        return $this->belongsTo(Discussion::class);
    }
}
