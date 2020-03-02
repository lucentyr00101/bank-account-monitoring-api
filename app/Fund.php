<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
