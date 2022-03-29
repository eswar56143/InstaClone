@extends('layouts.app')
@section('title')
    <title>{{ config('app.name') }}</title>
@endsection
@section('content')
    <div class="home-container d-flex">
       <div class="container d-flex">
           <div class="status-container bg-white container">
               <div class="profile d-flex">
                   @foreach($profiles as $profile)
                       <div class="profile-content">
                           <a href="/profile/{{$profile->user->id}}" class="text-decoration-none">
                               <div class="profile-img">
                                   <img src="{{$profile->profileImage()}}" alt=""
                                        class="rounded-circle w-100">
                               </div>
                               <p class="username text-black">{{$profile->user->username}}</p>
                           </a>
                       </div>
                   @endforeach
               </div>
           </div>
           <div class="side-container bg-danger">
               <h1>hi</h1>
           </div>
       </div>
    </div>
@endsection
