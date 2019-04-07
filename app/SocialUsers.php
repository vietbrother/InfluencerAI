<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialUsers extends Model
{
    //
    //protected $fillable = ['user_id', 'provider_user_id', 'provider', 'name', 'email', 'avatar', 'provider_id', 'access_token'];
    protected $table = 'social_users';
    protected $fillable = ['user_id', 'social_type','sns_access_token', 'username', 'email', 'avatar', 'link', 'platform_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
