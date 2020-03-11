<?php

namespace App;

use App\Discussion;
use App\Comment;
use App\Contact;
use App\DiscussionGroup;
use App\InviteFriend;
use App\Report;
use App\Transaction;
use App\UserOption;
use App\Wallet;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function discussion(){
        return $this->hasMany(Discussion::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }

    public function contact(){
        return $this->hasMany(Contact::class);
    }

    public function report(){
        return $this->hasMany(Report::class);
    }

    public function discussion_group(){
        return $this->hasMany(DiscussionGroup::class);
    }

    public function invite_friend(){
        return $this->hasMany(InvitedFriend::class);
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    public function wallet(){
        return $this->hasMany(Wallet::class);
    }

    public function user_option(){
        return $this->hasMany(UserOption::class);
    }
}
