<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 14/03/2019
 * Time: 23:30 PM
 */

namespace App\Services;

use Laravel\Socialite\Contracts\User as ProviderUser;
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
            $email = $providerUser->getEmail() ?? $providerUser->getNickname();
            $account = new SocialUsers([
                'provider_user_id' => $providerUser->getId(),
                'provider' => $social,
                'name' => $providerUser->getName(),
                'email' => $providerUser->getEmail(),
                'avatar' => $providerUser->getAvatar(),
                'provider_id' => $providerUser->getId(),
                'access_token' => $providerUser->token
            ]);
            $user = User::whereEmail($email)->first();

            if (!$user) {

                $user = User::create([
                    'email' => $email,
                    'name' => $providerUser->getEmail(),
                    'password' => $providerUser->getName(),
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;
        }
    }
}