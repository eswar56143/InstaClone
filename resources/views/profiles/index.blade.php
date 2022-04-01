@extends('layouts.app')
@section('title')
    <title>{{ $user->name }} (@ {{$user->username}}) | Insta </title>
@endsection
@section('content')
<div class="profile-index">
    <div class="user-profile">

    </div>
</div>
@endsection
