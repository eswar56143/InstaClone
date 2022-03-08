@extends('layouts.app')
@section('title')
    <title>{{ auth()->user()->name }} (@ {{auth()->user()->username}}) | Insta </title>@endsection

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 offset-3 py-2">
                <b>suggested profiles</b>
            </div>
            <div class="col-6 offset-3 bg-white">
                @foreach($profiles as $profile)
                    <div class="row py-2 align-items-baseline">
                        <div class="col-10 d-flex align-items-center">
                            <div class="pe-3">
                                <a href="/profile/{{$profile->user->id}}" class="text-decoration-none">
                                    <img src="{{$profile->profileImage()}}" alt=""
                                         class="rounded-circle w-100" style="max-width: 50px">
                                </a>
                            </div>
                            <div>
                                <div class="fw-bold">
                                    <a href="/profile/{{$profile->user->id}}" class="text-decoration-none">
                                        <span class="text-black">{{$profile->user->username}}</span>
                                    </a>
                                </div>
                                <span>{{$profile->title}}</span>
                            </div>
                        </div>
                        <div class="col-2  align-content-center">
                            <follow-button user-id="{{$profile->user->id}}" follows="{{$follows = ($profile->user) ? auth()->user()->following->contains($profile->user->id) : false}}"
                                           class-data="btn-sm btn-primary ">
                            </follow-button>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
@endsection
