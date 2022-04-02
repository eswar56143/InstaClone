@extends('layouts.app')
@section('title')
    <title>{{ config('app.name') }}</title>
@endsection
@section('content')
    <div class="home-container">
        <div class="all">
            <div class="status-container d-flex">
                <div class="left" id="left">
                    <i class="fa-solid fa-circle-chevron-left"></i>
                </div>
                <div class="profile-wrapper">
                    <div class="profile">
                        @foreach($profiles as $profile)
                            <div class="profile-content">
                                <a href="/profile/{{$profile->user->id}}" class="text-decoration-none">
                                    <div class="profile-img">
                                        <img src="{{$profile->profileImage()}}" alt=""
                                             class="rounded-circle">
                                    </div>
                                    <p class="username text-black">{{$profile->user->username}}</p>
                                </a>
                            </div>
                        @endforeach
                        @foreach($profiles as $profile)
                            <div class="profile-content">
                                <a href="/profile/{{$profile->user->id}}" class="text-decoration-none">
                                    <div class="profile-img">
                                        <img src="{{$profile->profileImage()}}" alt=""
                                             class="rounded-circle">
                                    </div>
                                    <p class="username text-black">{{$profile->user->username}}</p>
                                </a>
                            </div>
                        @endforeach
                        @foreach($profiles as $profile)
                            <div class="profile-content">
                                <a href="/profile/{{$profile->user->id}}" class="text-decoration-none">
                                    <div class="profile-img">
                                        <img src="{{$profile->profileImage()}}" alt=""
                                             class="rounded-circle">
                                    </div>
                                    <p class="username text-black">{{$profile->user->username}}</p>
                                </a>
                            </div>
                        @endforeach
                            @foreach($profiles as $profile)
                                <div class="profile-content">
                                    <a href="/profile/{{$profile->user->id}}" class="text-decoration-none">
                                        <div class="profile-img">
                                            <img src="{{$profile->profileImage()}}" alt=""
                                                 class="rounded-circle">
                                        </div>
                                        <p class="username text-black">{{$profile->user->username}}</p>
                                    </a>
                                </div>
                            @endforeach
                            @foreach($profiles as $profile)
                                <div class="profile-content">
                                    <a href="/profile/{{$profile->user->id}}" class="text-decoration-none">
                                        <div class="profile-img">
                                            <img src="{{$profile->profileImage()}}" alt=""
                                                 class="rounded-circle">
                                        </div>
                                        <p class="username text-black">{{$profile->user->username}}</p>
                                    </a>
                                </div>
                            @endforeach
                        @foreach($profiles as $profile)
                            <div class="profile-content">
                                <a href="/profile/{{$profile->user->id}}" class="text-decoration-none">
                                    <div class="profile-img">
                                        <img src="{{$profile->profileImage()}}" alt=""
                                             class="rounded-circle">
                                    </div>
                                    <p class="username text-black">{{$profile->user->username}}</p>
                                </a>
                            </div>
                        @endforeach
                        @foreach($profiles as $profile)
                            <div class="profile-content">
                                <a href="/profile/{{$profile->user->id}}" class="text-decoration-none">
                                    <div class="profile-img">
                                        <img src="{{$profile->profileImage()}}" alt=""
                                             class="rounded-circle">
                                    </div>
                                    <p class="username text-black">{{$profile->user->username}}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="right" id="right">
                    <i class="fa-solid fa-circle-chevron-right"></i>
                </div>
            </div>
            <div class="side-container">
                <div class="user">
                    <div class="profile">
                        <div class="profile-img">
                            <a href="/profile/{{auth()->user()->id}}" class="text-decoration-none">
                                <img src="{{auth()->user()->profile->profileImage()}}" alt=""
                                     class="rounded-circle" style="max-width: 60px">
                            </a>
                        </div>
                        <div class="profile-content">
                            <a href="/profile/{{auth()->user()->id}}" class="text-decoration-none">
                                <b class="text-black">{{auth()->user()->username}}</b>
                            </a>
                            <span class="text-secondary">{{auth()->user()->name}}</span>
                        </div>
                        <div class="profile-switch">
                            <a class="text-decoration-none" href="{{ route('logout') }}"
                               onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                                <small>Switch</small>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="suggestions">
                    <div class="suggestions-header">
                        <b class="text-secondary">Suggestions for you  </b>
                        <div class="suggestions-all">
                            <a href="/explore/people" class="text-decoration-none text-black "><small>See All</small></a>
                        </div>
                    </div>
                    @forelse($s_profiles as $sprofile)
                        <div class="profile">
                            <div class="profile-img">
                                <a href="/profile/{{$sprofile->user->id}}" class="text-decoration-none">
                                    <img src="{{$sprofile->profileImage()}}" alt=""
                                         class="rounded-circle" style="max-width: 35px">
                                </a>
                            </div>
                            <div class="profile-content">
                                <a href="/profile/{{$sprofile->user->id}}" class="text-decoration-none">
                                    <b class="text-black">{{$sprofile->user->username}}</b>
                                </a>
                                <span class="text-secondary">{{$sprofile->user->name}}</span>
                            </div>
                            <div class="profile-switch">

                                    <small>Switch</small>

                            </div>
                        </div>
                    @empty
                        <small>No Profiles to show</small>
                    @endforelse
                </div>
            </div>
            <div class="posts-container">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="user-details">
                            <div class="user-img">
                                <a href="/profile/{{$post->user->id}}" class="text-decoration-none">
                                    <img src="{{$post->user->profile->profileImage()}}" alt=""
                                         class="rounded-circle" style="max-width: 35px">
                                </a>
                            </div>
                            <div class="user-name">
                                <a href="/profile/{{$post->user->id}}" class="text-decoration-none">
                                    <span class="text-black">{{$post->user->username}}</span>
                                </a>
                            </div>
                            <div class="more">
                                <a href="#" class="text-black">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </a>
                            </div>
                        </div>
                        <div class="post-img">
                            <a href="/profile/{{$post->user->id}}">
                                <image src="/storage/{{$post->image}}" class="border-bottom border-top"></image>
                            </a>
                        </div>
                        <div class="post-content">
                            <section class="post-response d-flex">
                                <button type="button"><i class="fa-regular fa-heart"></i></button>
                                <button type="button"><i class="fa-regular fa-comment"></i></button>
                                <button type="button"><i class="fa-regular fa-paper-plane"></i></button>
                                <div class="save">
                                    <button type="button"><i class="fa-regular fa-bookmark"></i></button>
                                </div>
                            </section>
                            <section class="likes">
                                <span>1024 likes</span>
                            </section>
                            <section class="post-caption">
                                <span class="fw-bold ">
                                    <a href="/profile/{{$post->user->id}}" class="text-decoration-none">
                                        <span class="text-black pe-2">{{$post->user->username}}</span>
                                    </a>
                                </span>{{$post->caption}}
                            </section>
                            <section class="post-comment d-flex">
                                <div class="smile">
                                    <span><i class="fa-regular fa-smile"></i></span>
                                </div>
                                <div class="text">
                                    <input type="text" placeholder="Add a Comment">
                                </div>
                                <div class="post-b">
                                    <button type="button">Post</button>
                                </div>
                            </section>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
