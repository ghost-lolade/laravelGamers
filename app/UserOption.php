<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOption extends Model
{
    protected $fillable = [
        'user_id',
        'discussion_id',
        'selected_option'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
