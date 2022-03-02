@extends('layouts.app')

@section('content')
<div class="container px-5">
    @foreach($posts as $post)
        <div class="row">
            <div class="col-6 offset-3 p-2">
                <div class="d-flex align-items-center ps-2">
                    <div class="pe-3">
                        <img src="{{$post->user->profile->profileImage()}}" alt=""
                             class="rounded-circle w-100" style="max-width: 40px">
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
            </div>
            <div class="col-6 offset-3">
                <a href="/profile/{{$post->user->id}}">
                    <image src="/storage/{{$post->image}}" class="w-100"/>
                </a>
            </div>
            <div class="col-6 offset-3 pt-2 pb-4">
                <div class="ps-3">
                    <p><span class="fw-bold ">
                        <a href="/profile/{{$post->user->id}}" class="text-decoration-none">
                            <span class="text-black pe-2">{{$post->user->username}}</span>
                        </a>
                    </span>{{$post->caption}}
                    </p>
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
@endsection
