@extends('layouts.app')
@section('title')
    <title>{{ $post->user->name }} (@ {{$post->user->username}}) | Insta  </title>
@endsection

@section('content')
<div class="container px-5">
    <div class="row">
        <div class="col-8">
            <image src="/storage/{{$post->image}}" class="w-100"/>
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pe-3">
                        <a href="/profile/{{$post->user->id}}" class="text-decoration-none">
                            <img src="{{$post->user->profile->profileImage()}}" alt=""
                                 class="rounded-circle w-100" style="max-width: 40px">
                        </a>
                    </div>
                    <div>
                        <div class="fw-bold ">
                            <a href="/profile/{{$post->user->id}}" class="text-decoration-none">
                                <span class="text-black">{{$post->user->username}}</span>
                            </a>
                            <a href="#" class="p-3 text-decoration-none">Follow</a>
                        </div>
                    </div>
                </div>
                <hr>
                <p><span class="fw-bold ">
                        <a href="/profile/{{$post->user->id}}" class="text-decoration-none">
                            <span class="text-black pe-2">{{$post->user->username}}</span>
                        </a>
                    </span>{{$post->caption}}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
