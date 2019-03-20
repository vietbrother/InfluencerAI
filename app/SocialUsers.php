<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialUsers extends Model
{
    //
    protected $fillable = ['user_id', 'provider_user_id', 'provider', 'name', 'email', 'avatar', 'provider_id', 'access_token'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
