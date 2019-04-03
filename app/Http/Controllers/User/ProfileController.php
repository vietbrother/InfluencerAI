<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\SocialUsers;
use App\User;
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
        $user = Auth::user();
        if(empty($user->user_type)){
            return redirect()->to('/profile/register');
        }
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

    public function updateMainInfo()
    {
        $currentUser = Auth::user();
        return view('user.profile_register')->with('currentUser', $currentUser);
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $user_id = Auth::user()->id;
        User::whereId($user_id)
            ->update(array('username' => $data['username'],
                'email' => $data['email'],
                'full_name' => $data['fullname'],
                'user_type' => $data['radio'] == 'influencer' ? '1' : '0',
                'is_active' => '1',
                'description' => $data['description']
                ));
        return redirect()->to('/profile');
    }
}
