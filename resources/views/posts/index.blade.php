@extends('layouts.app')
@section('title')
    <title>{{ config('app.name') }}</title>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-2  ">
                @foreach($posts as $post)
                    <div class="bg-white mt-5 border">
                        <div class="row py-2 align-items-baseline">
                            <div class="col-10 d-flex align-items-center">
                                <div class="px-3">
                                    <a href="/profile/{{$post->user->id}}" class="text-decoration-none">
                                        <img src="{{$post->user->profile->profileImage()}}" alt=""
                                             class="rounded-circle w-100" style="max-width: 50px">
                                    </a>
                                </div>
                                <div>
                                    <div class="fw-bold">
                                        <a href="/profile/{{$post->user->id}}" class="text-decoration-none">
                                            <span class="text-black">{{$post->user->username}}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <a href="/profile/{{$post->user->id}}">
                                <image src="/storage/{{$post->image}}" class="w-100"></image>
                            </a>
                        </div>
                        <div class="row">
                            <div class=" pt-2 pb-4">
                                <div class="ps-3">
                                    <p>
                                        <span class="fw-bold ">
                                            <a href="/profile/{{$post->user->id}}" class="text-decoration-none">
                                                <span class="text-black pe-2">{{$post->user->username}}</span>
                                            </a>
                                        </span>{{$post->caption}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    <div class="row d-flex">
                        <div class="col-12 d-flex justify-content-center">
                            {{$posts->links()}}
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
