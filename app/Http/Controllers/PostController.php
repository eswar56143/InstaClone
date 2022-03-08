<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\profile;
use App\Models\User;
use Intervention\Image\ImageManagerStatic as Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user) {

        $users = auth()->user()->following()->pluck('profiles.user_id');
        $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(7);
        if ($posts->count() < 5) {
            $users = User::all()->pluck('id');
            $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(5);
        }
        return view('posts.index', compact('posts'));
    }

    public function create(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('posts.create');
    }

    public function store(){

        $data = \request()->validate([
           'caption' => 'required',
            'image' => ['required','image'],
        ]);

        $imagePath = \request('image')->store('uploads', 'public');

        $image = Image::make('storage/'.$imagePath)->fit(1200,1200);
        $image->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        return redirect('/profile/'. \auth()->user()->id);

    }

    public function show(\App\Models\Post $post) {
        return view('posts.show', compact('post'));
    }
}
