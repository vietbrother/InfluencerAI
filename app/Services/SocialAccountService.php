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

class SocialAccountService
{
    public static function createOrGetUser(ProviderUser $providerUser, $social)
    {
        $account = SocialUsers::whereProvider($social)
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {
            print_r('$providerUser');
            $email = $providerUser->getEmail() ?? $providerUser->getNickname();
            if ($social == 'facebook') {

                $account = new SocialUsers([
                    'platform_id' => $providerUser->getId(),
                    'social_type' => Config::get('constants.socials.' + $social),
                    'name' => $providerUser->getName() == null ?? $email,
                    'email' => $providerUser->getEmail(),
                    'avatar' => $providerUser->getAvatar(),
                    'provider_id' => $providerUser->getId(),
                    'access_token' => $providerUser->token
                ]);
            } else if ($social == 'twitter') {
                Config::get('constants.socials.twitter');
                $account = new SocialUsers([
                    'platform_id' => $providerUser->getId(),
                    'social_type' => Config::get('constants.socials.' + $social),
                    'name' => $providerUser->getName() == null ?? $email,
                    'email' => $providerUser->getEmail() ?? $email,
                    'avatar' => $providerUser->getAvatar(),
                    'provider_id' => $providerUser->getId(),
                    'access_token' => $providerUser->token
                ]);
            } else if ($social == 'instagram') {
                $account = new SocialUsers([
                    'platform_id' => $providerUser->getId(),
                    'social_type' => Config::get('constants.socials.' + $social),
                    'name' => $providerUser->getName() == null ?? $email,
                    'email' => $providerUser->getEmail() ?? $email,
                    'avatar' => $providerUser->getAvatar(),
                    'provider_id' => $providerUser->getId(),
                    'access_token' => $providerUser->token
                ]);
            } else if ($social == 'google') {
                $account = new SocialUsers([
                    'platform_id' => $providerUser->getId(),
                    'social_type' => Config::get('constants.socials.' + $social),
                    'name' => $providerUser->name == null ?? $email,
                    'email' => $providerUser->email,
                    'avatar' => $providerUser->getAvatar(),
                    'provider_id' => $providerUser->getId(),
                    'access_token' => $providerUser->token
                ]);

            } else {
                $account = new SocialUsers([
                    'platform_id' => $providerUser->getId(),
                    'social_type' => $social,
                    'name' => $providerUser->getName() == null ?? $email,
                    'email' => $providerUser->getEmail() ?? $email,
                    'avatar' => $providerUser->getAvatar(),
                    'provider_id' => $providerUser->getId(),
                    'access_token' => $providerUser->token
                ]);
            }

            $user = User::whereEmail($email)->first();

            if (!$user) {

                $user = User::create([
                    'email' => $email,
                    'name' => $providerUser->getEmail() ?? $providerUser->getName(),
                    'avatar' => $providerUser->getAvatar(),
                    'password' => Hash::make($providerUser->getEmail() ?? $providerUser->getName()),
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;
        }
    }
}