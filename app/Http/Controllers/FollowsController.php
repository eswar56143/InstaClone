<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\Models\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(User $user) {

        return auth()->user()->following()->toggle($user->profile);
    }

    public function followers(User $user) {
        $followers = $user->profile->followers()->pluck('user_id');
        $following = $user->following()->pluck('profiles.user_id');

//        dd($this->followers);

        $profiles = profile::whereIn('id', $followers)->get();


        return view('profiles.followers',
            compact('user', 'profiles')
        );
    }

    public function following(user $user ) {
        $followers = $user->profile->followers()->pluck('user_id');
        $following = $user->following()->pluck('profiles.user_id');

//        dd($this->followers);

        $profiles = profile::whereIn('id', $following)->get();

        $follows = true;

        return view('profiles.followers',
            compact('user', 'profiles', 'follows')
        );
    }
}
