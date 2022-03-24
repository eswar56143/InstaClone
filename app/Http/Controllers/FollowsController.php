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
        $name = 'followers';

        $profiles = profile::whereIn('id', $followers)->get();


        return view('profiles.followers',
            compact('user', 'profiles', 'name')
        );
    }

    public function following(user $user ) {
        $following = $user->following()->pluck('profiles.user_id');
        $name = 'following';
        $profiles = profile::whereIn('id', $following)->get();

        $follows = true;

        return view('profiles.following',
            compact('user', 'profiles', 'follows', 'name')
        );
    }

    public function remove(User $follower) {
        $response = $follower->following()->toggle(auth()->user()->profile);
        $followers = auth()->user()->profile->followers()->pluck('user_id');

        return redirect('/profile/'.auth()->user()->id.'/followers');

    }
}
