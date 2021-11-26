<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fileable = [
        
        'user_id',
        'song_id',
        'review',

];

public function user()
{
    return $this->belongsTo('App\User');
}
}
