<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'user_id',
        'refrence_code',
        'issues',
        'status',
        'date_resolved'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
