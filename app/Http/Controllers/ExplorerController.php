<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\Models\User;
use Illuminate\Http\Request;

class ExplorerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function people() {
        $user = auth()->user();
        $followers = auth()->user()->profile->followers()->pluck('user_id');
        $following = auth()->user()->following()->pluck('profiles.user_id');
        $profiles = profile::whereNotIn('id', $following)->where('id', '<>', $user->id)->get();

        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;

        return view('explore.people',
            compact('user', 'profiles', 'follows')
        );
    }
}

