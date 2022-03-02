@extends('layouts.app')

@section('content')
<div class="container px-5 col-8 ">
   <div class="row">
       <div class="col-3 p-5">
           <img src="/storage/{{$user->profile->profileImage()}}" class="rounded-circle w-100" />
       </div>
       <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align- align-items-baseline">
                <div class="d-flex align-items-center pb-3 ">
                    <div class="h4">{{$user->username}}</div>

                    <follow-button user-id="{{$user->id}}" follows="{{$follows}}" ></follow-button>
                </div>

                @can('update', $user->profile)
                    <a href="/p/create" class="text-decoration-none" >Add a new post</a>
                @endcan

            </div>
           @can('update', $user->profile)
               <a href="/profile/{{$user->id}}/edit" class="text-decoration-none">Editprofile</a>
           @endcan

            <div class="d-flex">
                <div class="pe-5"><b>{{$postsCount}}</b> posts</div>
                <div class="pe-5"><b>{{$followersCount}}</b> followers</div>
                <div class="pe-5"><b>{{$followingCount}}</b> following</div>
            </div>
           <div class="pt-3"><b>{{$user->profile->title}}</b></div>
           <div>{{$user->profile->description}}</div>
           <div><a href="#" class="text-decoration-none">{{$user->profile->url ?? 'N/A'}}</a> </div>

       </div>
   </div>
   <div class="row">
       @foreach($user->posts as $post)

       <div class="col-4 pt-4">
           <a href="/p/{{$post->id}}">
               <img src="/storage/{{$post->image}}" alt="alternate text" class="w-100">
           </a>

        </div>
       @endforeach
</div>
@endsection
