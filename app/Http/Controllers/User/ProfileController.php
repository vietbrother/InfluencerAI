<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\SocialUsers;
use Config;


class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $temp = session("user");
        $user_id = Auth::user()->id;
        $abc = Auth::user();
        $accountSocials = SocialUsers::whereUserId($user_id)->get();
        $accFb = null;
        $accIns = null;
        $accTw = null;
        $accGg = null;
        foreach ($accountSocials as $acc) {
            if ($acc->social_type == Config::get('constants.socials.facebook')) {
                $accFb = $acc;
            } else if($acc->social_type == Config::get('constants.socials.twitter')){
                $accTw = $acc;
            } else if($acc->social_type == Config::get('constants.socials.instagram')){
                $accIns = $acc;
            } else if($acc->social_type == Config::get('constants.socials.youtube')){
                $accGg = $acc;
            } else {

            }
        }
        return view('user.profile')->with('accFb', $accFb)
            ->with('accTw', $accTw)
            ->with('accIns', $accIns)
            ->with('accGg', $accGg);
    }

    public function edit()
    {
        return view('user.profile_edit');
    }
}
