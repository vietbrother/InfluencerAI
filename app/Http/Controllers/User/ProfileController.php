<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        $user_id = Auth::user()->id;
        $accountSocials = SocialUsers::whereUserId($user_id);
        $accFb = null;
        $accIns = null;
        $accTw = null;
        $accGg = null;
        foreach ($accountSocials as $acc) {
            if ($acc->provider == 'facebook') {
                $accFb = $acc;
            } else if($acc->provider == 'twitter'){
                $accTw = $acc;
            } else if($acc->provider == 'instagram'){
                $accIns = $acc;
            } else if($acc->provider == 'youtube'){
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
