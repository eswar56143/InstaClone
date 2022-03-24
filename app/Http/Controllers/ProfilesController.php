<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\ImageManagerStatic as Image;

class ProfilesController extends Controller
{
    public function index(User $user): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $postsCount = $user->posts->count();
        $followersCount= $user->profile->followers->count();
        $followingCount = $user->following->count();

        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;


        return view('profiles.index',
            compact('user', 'follows', "postsCount", 'followersCount', 'followingCount')
        );
    }

    public function edit(User $user): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $this->authorize('update' , $user->profile);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user) {

        $this->authorize('update' , $user->profile);

        $data = \request()->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image',
            'url' => 'url',
        ]);

        if (\request('image')) {
            $imagePath = \request('image')->store('profile', 'public');

            $image = Image::make('storage/'.$imagePath)->fit(1200,1200);
            $image->save();
            $data=array_merge($data, ['image'=>$imagePath]);
        }

        auth()->user()->profile->update($data);

        return redirect("/profile/{$user->id}");
    }
}
