<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 14/03/2019
 * Time: 23:30 PM
 */

namespace App\Services;

use Laravel\Socialite\Contracts\User as ProviderUser;
use Illuminate\Support\Facades\Hash;
use App\SocialUsers;
use App\User;
use Config;
use Illuminate\Support\Facades\Auth;

class SocialAccountService
{
    public static function createOrGetUser(ProviderUser $providerUser, $social)
    {
        $socialType = Config::get('constants.socials.' . $social);
        $account = SocialUsers::whereSocialType($socialType)
            ->wherePlatformId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {
            //print_r($providerUser);
            $email = empty($providerUser->getEmail()) ? $providerUser->getNickname() : $providerUser->getEmail();
            $name = empty($providerUser->getName()) ? $providerUser->getNickname() : $providerUser->getName();
            if ($social == 'facebook') {
                $account = new SocialUsers([
                    'platform_id' => $providerUser->getId(),
                    'social_type' => $socialType,
                    'name' => $name,
                    'email' => $providerUser->getEmail(),
                    'avatar' => $providerUser->getAvatar(),
                    'provider_id' => $providerUser->getId(),
                    'sns_access_token' => $providerUser->token
                ]);
            } else if ($social == 'twitter') {
                $account = new SocialUsers([
                    'platform_id' => $providerUser->getId(),
                    'social_type' => $socialType,
                    'name' => $name,
                    'email' => $email,
                    'avatar' => $providerUser->getAvatar(),
                    'provider_id' => $providerUser->getId(),
                    'sns_access_token' => $providerUser->token
                ]);
            } else if ($social == 'instagram') {
                $account = new SocialUsers([
                    'platform_id' => $providerUser->getId(),
                    'social_type' => $socialType,
                    'name' => $name,
                    'email' => $email,
                    'avatar' => $providerUser->getAvatar(),
                    'provider_id' => $providerUser->getId(),
                    'sns_access_token' => $providerUser->token
                ]);
            } else if ($social == 'google') {
                $account = new SocialUsers([
                    'platform_id' => $providerUser->getId(),
                    'social_type' => $socialType,
                    'name' => $name,
                    'email' => $email,
                    'avatar' => $providerUser->getAvatar(),
                    'provider_id' => $providerUser->getId(),
                    'sns_access_token' => $providerUser->token
                ]);

            } else {
                $account = new SocialUsers([
                    'platform_id' => $providerUser->getId(),
                    'social_type' => $socialType,
                    'name' => $name,
                    'email' => $email,
                    'avatar' => $providerUser->getAvatar(),
                    'provider_id' => $providerUser->getId(),
                    'sns_access_token' => $providerUser->token
                ]);
            }

            $user_id = Auth::user() == null ? null :  Auth::user()->id;
            //$user = User::whereEmail($email)->first();
            if ($user_id == null || $user_id == "") {
                $ip = \Request::ip();
                $data = \Location::get($ip);
                $localtion = (empty($data->cityName) ?  '' : ($data->cityName  . ','))
                    . $data->regionName;
                $user = User::create([
                    'email' => $email,
                    'username' => empty($name) ? $name : $email,
                    'full_name' => $name,
                    'avatar' => $providerUser->getAvatar(),
                    'password' => Hash::make($providerUser->getEmail() ?? $email),
                    'location' => $localtion,
                    'country' => $data->countryName,
                    'ip' => $ip,
                ]);
            } else {
                $user = User::whereId($user_id)->first();
            }

            $account->user()->associate($user);
            $account->save();

            return $user;
        }
    }
}