@extends('layouts.app')
@section('title')
    <title>{{ $post->user->name }} (@ {{$post->user->username}}) | Insta  </title>
@endsection

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-6 offset-1">
                <image src="/storage/{{$post->image}}" class="w-100"/>
            </div>
            <div class="col-4 mt-4">
                <div>
                    <div class="d-flex align-items-baseline">
                        <div class="pe-3">
                            <a href="/profile/{{$post->user->id}}" class="text-decoration-none">
                                <img src="{{$post->user->profile->profileImage()}}" alt=""
                                     class="rounded-circle w-100" style="max-width: 40px">
                            </a>
                        </div>
                        <div>
                            <div class="fw-bold d-flex">
                                <a href="/profile/{{$post->user->id}}" class="text-decoration-none">
                                    <span class="text-black">{{$post->user->username}}</span>
                                </a>
                                @if($post->user->id == auth()->user()->id)
                                @else
                                    <follow-button user-id="{{$post->user->id}}"
                                                   follows="{{$follows}}" class-data="bg-light" msg="post"></follow-button>
                                @endif
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
@endsection
