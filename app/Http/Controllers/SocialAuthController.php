<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Services\SocialAccountService;
use Illuminate\Support\Facades\Log;
use Socialite;

class SocialAuthController extends Controller
{
    //
    public function redirect($social)
    {
        if ($social == 'instagram') {
            return Socialite::with('instagram')->scopes([
                "public_content"])->redirect();
        } else {
            return Socialite::driver($social)->redirect();
        }
    }

    public function callback($social)
    {
        if ($social == 'twitter') {
            $user = SocialAccountService::createOrGetUser(Socialite::driver($social)->user(), $social);
        } else {
            $user = SocialAccountService::createOrGetUser(Socialite::driver($social)->stateless()->user(), $social);
        }
        auth()->login($user);

        // Store a piece of data in the session...
        session('user', $user);

        return redirect()->to('/profile');
    }
}
