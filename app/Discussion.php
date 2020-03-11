<?php

namespace App;

use App\User;
use App\Comment;
use App\Contact;
use App\DiscussionGroup;
use App\InviteFriend;
use App\Report;
use App\Transaction;
use App\UserOption;
use App\Wallet;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $fillable = [
        'user_id',
        'topic',
        'details',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'status',
        'answer',
        'winner_id',
        'amount',
        'refree_id'
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function discussion_group(){
        return $this->hasMany(DiscussionGroup::class);
    }

}
