<?php

namespace App;

use App\User;
use App\Discussion;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id',
        'discussion_id',
        'comment'
    ];

    public function user(){
        return $this->hasMany(User::class);
    }

    public function discussion(){
        return $this->belongsTO(Discussion::class);
    }
}
